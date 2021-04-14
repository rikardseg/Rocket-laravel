@extends('layouts.mainlayout')

@section('content')

<div class="container">
<div class="row">
<div class="col-12">
<div class="card mx-auto" style="width: 18rem;">
  <img src="{{asset('/images/pizza1.png')}}" class="card-img-top" alt="Image">
  <div class="card-body">
    <h5 class="card-title">Hello, {{ Auth::user()->name }}!</h5>
    <p class="card-text">Do you want fruit? Do your want pizza? Do you want fruit on a pizza?</p>
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Yes!</a>
  </div>
</div>
</div>
</div>

@endsection
