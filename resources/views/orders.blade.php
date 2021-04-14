@extends('layouts.mainlayout')

@section('content')
    <div class="album text-muted">
      <div class="container">


        <div class="row">
            <div class="col-12">
          <h1>Order fruit pizza!</h1>
          </div>
          <div class="col-12">
		<form action="/orders" method="post">
    @csrf

<div class="form-group">
    <label for="pizza">Pizza</label>
    <select class="form-control" name="pizza" id="pizza">
        <option selected>Pick Type</option>
        @foreach ($pizzas as $pizza)
        <option value="{{$pizza}}">{{$pizza}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address">
</div>
    <button type="submit" class="btn btn-success">Create Order</button>

</form>

@include('errors')

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
        <a class="nav-link" href="{{ route('orders.index') }}">{{ __('View order') }}</a>
    </div>
@endif
          </div>

        </div>
      </div>
    </div>
@endsection

