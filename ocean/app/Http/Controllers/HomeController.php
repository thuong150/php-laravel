<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function show()
    {
        
        // Lấy tất cả các sản phẩm từ bảng "products"
        $cats = ProductCategory::all();
        $products = Product::all();
        return view('client.home.index', compact('products','cats'));
    }
}
