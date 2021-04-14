<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
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
            'name' =>  'required|string|min:3',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|min:5'
        ]);

        // 'username' => 'required|alpha_num|unique:users,username|min:4',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|min:6|confirmed'

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        Auth::login($user);

        return redirect('dashboard');
    }
}
