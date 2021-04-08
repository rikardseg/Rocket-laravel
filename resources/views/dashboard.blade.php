@extends('layouts.mainlayout')

@section('content')

<div class="container">
<div class="row">
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="#" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hello, {{ $user->name }}!</h5>
    <p class="card-text">Vill du ha fruktpizza?</p>
    <a href="{{ route('orders.index') }}" class="btn btn-primary">Ja!</a>
  </div>
</div>
</div>
</div>


  <a class="nav-link" href="{{ route('orders.index') }}">{{ __('Boka pizza!') }}</a>

@endsection
