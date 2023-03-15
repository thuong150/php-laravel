<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    function show()
    {
        $cats = ProductCategory::all();
        return view('client.checkout.checkOut', compact('cats'));
    }
}
