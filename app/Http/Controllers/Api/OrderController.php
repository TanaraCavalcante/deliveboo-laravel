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

class OrderController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required |max:255',
            'email' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'total' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        }

        $order = Order::create($validator->validated());
        // Mail::to('mailacuidevoinviare')->send(new NewOrder($order));

        return response()->json([
            'success' => true,
            'orderId' => $order->id,
        ]);
    }

    public function getPaymentToken()
    {
        $gateway = new Gateway([
            'environment' =>env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY')
        ]);
    }
}
