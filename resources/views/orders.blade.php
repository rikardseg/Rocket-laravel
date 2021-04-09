@include('errors')
@extends('layouts.mainlayout')

@section('content')
    <div class="album text-muted">
      <div class="container">


        <div class="row">
            <div class="col-12">
          <h1>Order fruit pizza!</h1>
		<!--  <p>hej o hå </p> -->
          </div>
          <div class="col-12">
		<form action="/orders" method="post">
    @csrf

    <label for="pizza">Pizza</label>
    <select class="form-control" name="pizza" id="pizza">
        <option selected>Pick Type</option>
        @foreach ($pizzas as $pizza)
        <option value="{{$pizza}}">{{$pizza}}</option>
        @endforeach
    </select>

    <label for="full_name" >Full Name</label>
    <input type="text" class="form-control" id="full_name" name="full_name">
    <label for="">Address</label>
    <input type="text" class="form-control" id="address" name="address">
    <button type="submit" class="btn btn-primary">Create Order</button>
</form>
          </div>

        </div>
      </div>
    </div>
@endsection





{{-- @foreach ($pizzas as $pizza)
<h2>{{$pizza}}</h2>
@endforeach --}}

