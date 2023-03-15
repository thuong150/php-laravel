<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    //
    public function index() {
        $cats = ProductCategory::all();
         $products = Product::all();
        return view('client.layout.master', compact('cats','products'));
    }
    
}
