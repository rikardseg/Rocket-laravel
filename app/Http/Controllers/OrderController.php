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
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'pizza' => 'string'
        ]);

        $order = new Order();
        $order->pizza = $request->input('pizza');
        $order->user_id = Auth::id();
        $order->save();

        return back();
        // return redirect('/orders')->with('success', 'Order Created');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'pizza' => 'string',
            // 'full_name' => 'string',
            'address' => 'string'
        ]);

        $order = new Order();
        $order->pizza = $request->input('pizza');
        $order->full_name = $request->input('full_name');
        $order->address = $request->input('address');
        $order->user_id = Auth::id();
        $order->save();

        $orders = Order::where('user_id', Auth::user()->id)
            ->take(10)
            ->get();
        return view('user.history', [
            'orders' => $orders
        ]);
    }

    public function index()
    {
        $user = Auth::user();
        // $orders = Orders::all();

        $pizzas = ['Capricciosa', 'Fruktpizza', 'Bananpizza'];

        return view('orders', ['user' => $user, 'pizzas' => $pizzas]);
    }

    public function show($id)
    {
        return view('orders.history', [
            'orders' => Order::findOrFail($id)
        ]);
    }
}
