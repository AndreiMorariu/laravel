<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Http\Controllers\AdminController;
use SebastianBergmann\Type\NullType;
use Session;


class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userId = session()->get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cartList()
    {
        $userId = session()->get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

        return view('cartlist', ['products' => $products]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function delete($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect('admin');
    }
    function showData($id)
    {
        $data = Product::find($id);
        return view('edit', ['data' => $data]);
    }

    function update(Request $req)
    {
        $data = Product::find($req->id);
        $data->name = $req->name;
        $data->description = $req->description;
        $data->price = $req->price;
        $data->image = $req->image;
        $data->category = $req->category;

        $data->save();
        return redirect('admin');
    }


    function addData(Request $req)
    {
        $product = new Product;
        $product->name = $req->name;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->image = $req->image;
        $product->category = $req->category;

        $product->save();
        return redirect('admin');
    }
}
