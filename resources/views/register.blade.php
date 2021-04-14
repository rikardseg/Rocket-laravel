@extends('layouts.mainlayout')

@section('content')

<div class="container">


<form method="post" action="/register">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" name="name" id="name" type="name" placeholder="Fru Fruktpizza" />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" name="email" id="email" type="email" placeholder="frufruktpizza@email.se" />
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" name="password" id="password" type="password" placeholder="*****" />
    </div>
    <button class="btn btn-success" type="submit">Register</button>
</form>
@include('errors')
</div>
</div>
@endsection
