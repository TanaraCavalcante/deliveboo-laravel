<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function store(StoreOrderRequest $request){
        $data = $request->validated();
        $order = Order::create($data);
    }

}
