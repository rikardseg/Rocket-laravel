<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = Auth::user();

        // User::$user->orders()->get();

        $orders = Order::find($user);

        $users = User::find(1);

        foreach ($orders as $order) {
        }

        $pizzas = ['Capricciosa', 'Fruktpizza', 'Bananpizza'];

        return view('dashboard', ['user' => $user, 'pizzas' => $pizzas]);
    }
}
