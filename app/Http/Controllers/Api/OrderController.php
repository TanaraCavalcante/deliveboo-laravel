<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreOrderRequest;
use App\Mail\NewOrder;
use App\Models\Order;
use App\Models\Plate;
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
    public function getPaymentToken()
    {
        $gateway = new Gateway([
            'environment' => env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY')
        ]);
        return $gateway->clientToken()->generate();
    }


    public function performTransaction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // da validare con attenzione! per ora fa schifo
            'payment_method_nonce' => 'required',
            'device_data' => 'required',
            'orderId' => 'required',
        ]);
        // DA SISTEMARE PERCHè TORNI CODICE ERRRORE GIUSTO
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        } else {


        $paymentMethodNonce = $request->input('payment_method_nonce');
        $deviceData = $request->input('device_data');
        $orderId = $request->input('orderId');

        $gateway = new Gateway([
            'environment' => env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY')
        ]);

        // da fixare l'amount deve essere preso dal orderId per ora tutti pagano 10
        $result = $gateway->transaction()->sale([
            'amount' => '10.00',
            'paymentMethodNonce' => $paymentMethodNonce,
            'deviceData' => $deviceData,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);
        // per tenere traccia della risposta di braintree
        Log::info('Braintree Transaction result', [
            'result' => $result
        ]);

        return response()->json([
            'success' => $result->success,
        ]);
    }
}
