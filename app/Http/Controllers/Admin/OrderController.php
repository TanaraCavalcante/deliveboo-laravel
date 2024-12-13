<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Plate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    //
    public function index () {
        $user = Auth::user();
        $orders = Order::whereRelation('plates', 'restaurant_id', '=', $user->id)
        ->orderBy('created_at', 'desc')
        ->paginate(15);

        // recupero l'utente verificato

        return view('admin.orders.index', compact('user', 'orders'));
    }

    public function show (Order $order) {
        $plates = $order->plates()->get();
        return view('admin.orders.show', compact('order', 'plates'));
    }
}