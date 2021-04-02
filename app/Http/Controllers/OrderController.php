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
            'pizza' => 'string|min:10'
        ]);

        $order = new Orders();
        $order->pizza = $request->input('pizza');
        $order->id = Auth::id();
        $order->save();

        return back();
        // return redirect('/orders')->with('success', 'Order Created');
    }
}
