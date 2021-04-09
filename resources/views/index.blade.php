@include('errors')

@extends('layouts.mainlayout')

@section('content')

<div class="container">

<form method="post" action="/login">
    @csrf
    <div>
        <label for="email">Email</label>
        <input name="email" id="email" type="email" />
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" />
    </div>
    <button type="submit">Login</button>
</form>

<a class="nav-link" href="{{ route('register') }}">{{ __('New to fruit pizza? Register an account to order!') }}</a>


@endsection
