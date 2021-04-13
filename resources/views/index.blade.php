@extends('layouts.mainlayout')

@section('content')

<div class="container">

<form method="post" action="/login">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" name="email" id="email" type="email" />
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" name="password" id="password" type="password" />
    </div>
    <button class="btn btn-success" type="submit">Login</button>
</form>

<a class="nav-link" href="/register">{{ __('New to fruit pizza? Register an account to order!') }}</a>

@include('errors')

@endsection
