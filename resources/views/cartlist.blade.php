@extends('layouts.layout')
@section('content')
<?php
    $total = 0;
?>
<div class="container">
    <a href="/" class="p-3 d-block">Go back</a>
    <div class="cart">
        <h2>Your cart</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Remove</th>
              </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <th scope="row"><img src="/img/{{$item->image}}" alt=""></th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                    <td><a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove</a></td>
                    <?php
                        $total += $item->price;
                    ?>
                </tr>
              @endforeach
            </tbody>
          </table>
          <p class="text-center display-6 total">Your total is: {{$total}} $</p>
    </div>
  
</div>
@endsection