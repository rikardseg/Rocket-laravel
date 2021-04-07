Hello :) :)

Hello, {{ $user->name }}! <a href="logout">Do you want to logout?</a>

@include('errors')

{{-- @foreach ($pizzas as $pizza)
<h2>{{$pizza}}</h2>
@endforeach --}}
<form action="/orders" method="post">
    @csrf

    <label for="pizza">Pizza</label>
    <select class="form-control" name="pizza" id="pizza">
        <option selected>Pick Type</option>
        @foreach ($pizzas as $pizza)
        <option value="{{$pizza}}">{{$pizza}}</option>
        @endforeach
    </select>
    <label for="full_name">Full Name</label>
    <input type="text" id="full_name" name="full_name">
    <label for="email">Email</label>
    <input type="text" id="email" name="email">
    <label for="">Address</label>
    <input type="text" id="address" name="address">
    <button type="submit">Create Order</button>
</form>