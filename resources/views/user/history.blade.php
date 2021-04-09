@extends('layouts.mainlayout')

@section('content')

<div class="container">
<div class="row">
<div class="col-12">
<p>Here's your order history. And address! if you don't know where you live {{ Auth::user()->name }}</p>
@foreach ($orders as $order)
    {{ $order->pizza }}<br>
    {{ $order->full_name }}<br>
    {{ $order->address }}<br>
    {{ $order->created_at }}<hr>

@endforeach
</div>
</div>
</div>


@endsection
