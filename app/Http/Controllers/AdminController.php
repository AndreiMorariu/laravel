<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\Cart;
use SebastianBergmann\Type\NullType;
use Session;

class AdminController extends Controller
{
    function login(Request $req)
    {
        $admin =  Admin::where(['email' => $req->email])->first();
        if ($req->email != $admin->email && $req->password != $admin->password) {
            return "Email or password is not matched";
        } else {
            $req->session()->put('admin', $admin);
            return redirect('/admin');
        }
    }
}
