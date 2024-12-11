<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Plate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function index () {
        $user = Auth::user();
        $restaurant = $user->restaurant;
        if (!$restaurant) {
            abort(403, 'Non hai un ristorante associato.');
        }
        $orders = Order::orderBy('id', 'desc')->get();

        return view('admin.orders.index', compact('orders'));
    }

    public function show (Order $order) {
        return view('admin.orders.show', compact('order'));
    }
}