@extends('layouts.layout')
@section('content')

    <h1 class="text-center pb-5">Create New Product</h1>
    <form action="addproduct" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Product Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Product Price</label>
            <input type="number" step="0.01" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label class="form-label">Product image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="mb-3">
            <label class="form-label">Product categorie</label>
            <input type="text" class="form-control" name="category">
        </div>
        <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </form>

@endsection