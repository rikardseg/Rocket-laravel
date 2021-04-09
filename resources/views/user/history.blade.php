@extends('layouts.mainlayout')

@section('content')

<div class="container">
<div class="row">
<div class="col-12">
<h2>Your pizza is on the way and will be with you in the minimum of 2 days, {{ Auth::user()->name }}!</h2>
@foreach ($orders as $order)
    {{ $order->pizza }}<br>
    {{ $order->full_name }}<br>
    <b>Delivers to:</b>
    {{ $order->address }}<br>
    {{ $order->created_at }}<hr>

@endforeach
</div>
</div>
</div>


@endsection
