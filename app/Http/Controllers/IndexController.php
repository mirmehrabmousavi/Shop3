<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class IndexController extends Controller{
    public function index()
    {
        $users_count    = User::where('level', '!=', 'creator')->count();
        $products_count = Product::count();
        $orders_count   = Order::count();
        $total_sell     = Order::where('status', 'paid')->sum('price');

        return view('index', compact(
            'users_count',
            'products_count',
            'orders_count',
            'total_sell'
        ));
    }
}
