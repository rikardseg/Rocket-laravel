<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'pizza' => 'string',
            'address' => 'string'
        ]);

        $order = new Order();
        $order->pizza = $request->input('pizza');
        $order->address = $request->input('address');
        $order->user_id = Auth::id();
        $order->save();

        return redirect()->back()->with('success', 'Fruit Pizza is on the way!');
    }

    public function create()
    {
        $user = Auth::user();

        $pizzas = ['Hawaii', 'Fruktpizza', 'Bananpizza', 'Capricciosa med ananas'];

        return view('orders', ['user' => $user, 'pizzas' => $pizzas]);
    }

    public function index()
    {
        $orders = Order::where('user_id', Auth::user()->id)
            ->take(5)
            ->orderBy('id', 'desc')
            ->get();
        return view('orders.history', [
            'orders' => $orders
        ]);
    }
}
