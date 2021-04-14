@extends('layouts.mainlayout')

@section('content')

<div class="container">
<div class="row">
<div class="col-12">
<div class="card mx-auto" style="width: 18rem;">
  <img src="https://sparkpeo.hs.llnwd.net/e1/resize/630m620/e2/guid/Fruit-Pizza-/824e0313-21dd-4a0c-ba52-e7c88b8cff25.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hello, {{ Auth::user()->name }}!</h5>
    <p class="card-text">Do you want fruit? Do your want pizza? Do you want fruit on a pizza?</p>
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Yes!</a>
  </div>
</div>
</div>
</div>

@endsection
