@extends('layouts.layout')
@section('content')
<?php 
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')) {
  $total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
    <a class="navbar-brand" href="#">Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto d-flex">
        <li class="nav-item">
          <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
        </li>
        @if(Session::has('user'))
        <li class="nav-item">
          <a class="nav-link user" href="/logout">Logout <span>({{Session::get('user')['name']}})</span></a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        @endif
      </ul>
    </div>
  </nav>
<main>
    <h1 class="text-center pb-2 display-6">Products</h1>
    <div class="products">
        <div class="container">
        @foreach($products as $item)
        <div class="box">
            <a href="detail/{{$item['id']}}" style="color:black">
            <img src="/img/{{$item['image']}}">
            <div class="name">
                {{$item['name']}}
            </div>
            <div class="description">
                {{$item['description']}}
            </div>
            <div class="price">
                {{$item['price']}} $
            </div>
        </a>
        </div>
        @endforeach
    </div>
    </div>
</main>
@endsection