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

     // Processa o pagamento
     public function processPayment(Request $request)
     {
         $nonceFromClient = $request->payment_method_nonce; //nonce del metodo di pagamento
         $amount = $request->amount; // valore della compra

         $result = $this->gateway->transaction()->sale([
             'amount' => $amount,
             'paymentMethodNonce' => $nonceFromClient,
             'options' => ['submitForSettlement' => true] //Submete a transação para processamento
         ]);

         //verifica se il pagamento è andato a buon fine dopo della riga 39
         if ($result->success) {
             return response()->json(['message' => 'Pagamento realizado com sucesso']);
         } else {
             return response()->json(['error' => $result->message], 500);
         }
     }
}