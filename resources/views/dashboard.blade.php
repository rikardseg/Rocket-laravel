Hello, {{ $user->name }}! <a href="logout">Do you want to logout?</a>

@include('errors')

{{-- @foreach ($pizzas as $pizza)
<h2>{{$pizza}}</h2>
@endforeach --}}
<form action="/orders" method="post">
    @csrf

    <label for="pizza">Pizza</label>
    <select class="form-control" name="type">
        <option selected>Pick Type</option>
        @foreach ($pizzas as $pizza)
        <option value="{{$pizza}}">{{$pizza}}</option>
        @endforeach
    </select>
    <input name="pizza" id="pizza" type="text">
    <button type="submit">Create Order</button>
</form>
