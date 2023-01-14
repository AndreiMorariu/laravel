@extends('layouts.layout') 
@section('content')  
    <div class="container" style="padding: 50px">
        <div class="row">
            <div class="col-sm-6 d-flex justify-content-center align-items-center">
                <img src="/img/{{$product['image']}}" alt="" class="detail-img">
            </div>
            <div class="col-sm-6">
                <a href="/">Go back</a>
                <h2>{{$product['name']}}</h2>
                <h3>{{$product['price']}} $</h3>
                <h4>{{$product['description']}}</h4>
                <h4>{{$product['category']}}</h4>
                <br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
@endsection