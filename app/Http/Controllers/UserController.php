<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function show($id)
    // {

    //     return view('user.history', [
    //         'orders' => Order::findOrFail(Auth::user()->id)
    //     ]);
    // }

    /*     public function index()
    {

        $orders = Order::where('user_id', Auth::user()->id)
            ->take(10)
            ->get();
        return view('user.history', [
            'orders' => $orders
        ]);
    } */
}
