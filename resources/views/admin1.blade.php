<?php
    use Illuminate\Support\Facades\DB;
    use App\Models\Product;
    use App\Models\Cart;
    use Illuminate\Http\Request;
    use App\Http\Controllers\ProductController;
    $products = $users = DB::select('select * from products');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Admin</title>
</head>

<body class="p-5">
    <a class="btn btn-success" href="addproduct">Create product</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">price</th>
                <th scope="col">category</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}} $</td>
                <td>{{$item->category}}</td>
                <td> <img src="/img/{{$item->image}}" alt="" class="detail-img" style="height: 100px"></td>
                <td>
                    <a href="delete/{{$item->id}}" class="btn btn-outline-danger">Delete</a>
                    <a href="edit/{{$item->id}}" class="btn btn-outline-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        
</body>

</html>