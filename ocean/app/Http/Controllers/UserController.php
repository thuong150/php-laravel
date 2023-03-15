<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login() {
        $cats = ProductCategory::all();
        return view('client.login.login', compact('cats'));
    }
    public function register() {
        $cats = ProductCategory::all();
        return view('client.register.register', compact('cats'));
    }
}
