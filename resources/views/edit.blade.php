@extends('layouts.layout')
@section('content')
<h1 class="display-4 text-center">Edit Product</h1>

    <form action="/edit" method="post">
        @csrf
        <input type="hidden" name="id" value={{$data->id}}>
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Product Description</label>
            <input type="text" class="form-control" name="description" value="{{$data->description}}">
        </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Product Price</label>
            <input type="number" step="0.01" class="form-control" name="price" value="{{$data->price}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Product image</label>
            <input type="file" class="form-control" name="image" value="">
        </div>
        <div class="mb-3">
            <label class="form-label">Product category</label>
            <input type="text" class="form-control" name="category" value="{{$data->category}}">
        </div>
        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
    </form>

@endsection