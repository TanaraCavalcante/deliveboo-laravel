<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreOrderRequest;
use App\Mail\NewOrder;
use App\Models\Order;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
// devo includer braintree che ho installato
use Braintree\Gateway;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'total' => 'required',
            'items' => 'required|array',
            'items.*.plate_id' => 'required|exists:plates,id',
            'items.*.quantity' => 'required|integer|min:1',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        } else {

        $order = Order::create($validator->validated());

        $items = collect($request->input('items'))->mapWithKeys(function ($item) {
            return [$item['plate_id'] => ['quantity' => $item['quantity']]];
        });
        $order->plates()->sync($items);

        // Mail::to($order->email)->send(new NewOrder($order));

        return response()->json([
            'success' => true,
            // MI SERVE PER I PAGMENTI!!!!!!!!!!
            'orderId' => $order->id,
        ]);
    }
}

    //  MI SERVE PER I PAGAMENTI!!!!!!!
    public function getPaymentToken(){
        try {
            $gateway = new Gateway([
                'environment' => env('BRAINTREE_ENVIRONMENT'),
                'merchantId' => env('BRAINTREE_MERCHANT_ID'),
                'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
                'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
            ]);

            return response()->json([
                'success' => true,
                'token' => $gateway->clientToken()->generate(),
            ]);
        } catch (\Exception $e) {
            Log::error('Braintree Token Generation Failed', ['exception' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Unable to generate payment token.',
            ], 500);
        }
    }

    public function performTransaction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'payment_method_nonce' => 'required',
            'device_data' => 'required',
            'orderId' => 'required|exists:orders,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        }

        $order = Order::find($request->input('orderId'));

        if (!$order) {
            return response()->json([
                'success' => false,
                'message' => 'Order not found.',
            ], 404);
        }

        try {
            $gateway = new Gateway([
                'environment' => env('BRAINTREE_ENVIRONMENT'),
                'merchantId' => env('BRAINTREE_MERCHANT_ID'),
                'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
                'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
            ]);

            $result = $gateway->transaction()->sale([
                'amount' => $order->total,
                'paymentMethodNonce' => $request->input('payment_method_nonce'),
                'deviceData' => $request->input('device_data'),
                'options' => [
                    'submitForSettlement' => true,
                ],
            ]);

            Log::info('Braintree Transaction Result', [
                'result' => $result,
            ]);

            if (!$result->success) {
                Log::error('Braintree Transaction Failed', [
                    'errors' => $result->errors->deepAll(),
                ]);
                return response()->json([
                    'success' => false,
                    'message' => $result->message,
                ], 400);
            }

            return response()->json([
                'success' => true,
                'transactionId' => $result->transaction->id,
            ]);
        } catch (\Exception $e) {
            Log::error('Transaction Processing Error', ['exception' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Transaction failed due to an error.',
            ], 500);
        }
    }
}


