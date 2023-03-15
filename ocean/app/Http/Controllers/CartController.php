<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function show()
    {
        $cats = ProductCategory::all();
        return view('client.cart.cart', compact('cats'));
    }
}
