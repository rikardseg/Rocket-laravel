<?php

namespace App\Http\Controllers;

use App\Models\Orders;
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
            'pizza' => 'required|string|min:10'
        ]);

        $orders = new Orders();
        $orders->pizza = $request->input('pizza');
        $orders->user_id = Auth::id();
        $orders->save();

        return back();
    }
}
