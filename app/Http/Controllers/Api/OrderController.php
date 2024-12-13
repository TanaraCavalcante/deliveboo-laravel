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

class OrderController extends Controller
{

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'first_name' => 'required|min:3|max:20',
            'last_name' => 'required|min:3|max:30',
            'email' => 'required|email',
            'address' => 'required|min:3|max:30',
            'phone_number' => 'required|string|digits:10',
            'total' => 'required|numeric'

        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        } else {


        $order = Order::create($validator->validated());
        $order->plates()->sync($request['items']);

        //Mail::to($order->email)->send(new NewOrder($order));

        return response()->json([
            'success' => true
        ]);
    }
    }

}