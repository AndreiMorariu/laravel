<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/admin', function () {
    return view('admin1');
});

Route::get('/logout', function () {
    session()->forget('user');
    return redirect('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/addproduct', function () {
    return view('addproduct');
});

// Route::get('/delete', function () {
//     return view('delete');
// });

Route::get('/product', function () {
    return view('product');
});

Route::get('/create', function () {
    return view('create');
});

Route::post("/adminlogin", [AdminController::class, 'login']);
Route::view("/register", 'register');
Route::post("/login", [UserController::class, 'login']);
Route::post("/register", [UserController::class, 'register']);
Route::get("/", [ProductController::class, 'index']);
Route::get("/detail/{id}", [ProductController::class, 'detail']);
Route::post("/add_to_cart", [ProductController::class, 'addToCart']);
Route::get("/cartlist", [ProductController::class, 'cartList']);
Route::get("/removecart/{id}", [ProductController::class, 'removeCart']);
Route::get("/editcart/{id}", [ProductController::class, 'editCart']);
Route::get("/delete/{id}", [ProductController::class, 'delete']);
Route::get("/edit/{id}", [ProductController::class, 'showData']);
Route::post("/edit", [ProductController::class, 'update']);
Route::post("/addproduct", [ProductController::class, 'addData']);
