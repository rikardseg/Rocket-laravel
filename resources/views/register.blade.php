@extends('layouts.mainlayout')

@section('content')

<div class="container">


<form method="post" action="/register">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input placeholder="John Johnson" class="form-control" name="name" id="name" type="name" />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" name="email" id="email" type="email" />
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" name="password" id="password" type="password" />
    </div>
    <button class="btn btn-success" type="submit">Register</button>
</form>
</div>
</div>
@include('errors')
@endsection
