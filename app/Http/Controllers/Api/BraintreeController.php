<?php

namespace App\Http\Controllers;

use Braintree\Gateway;
use Illuminate\Http\Request;

class BraintreeController extends Controller
{
    protected $gateway;

    //uso le variabile con le credenziale Braintree SANDBOX
    public function __construct()
    {
        $this->gateway = new Gateway([
            'environment' => config('braintree.environment'),
            'merchantId' => config('braintree.merchant_id'),
            'publicKey' => config('braintree.public_key'),
            'privateKey' => config('braintree.private_key')
        ]);
    }

    // Genera il client token
    public function generateClientToken()
    {
        $clientToken = $this->gateway->clientToken()->generate();
        return response()->json(['client_token' => $clientToken]);
    }
}