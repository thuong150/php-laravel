<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    function show()
    {   
         // Lấy tất cả các sản phẩm từ bảng "products"
         $cats = ProductCategory::all();
         $products = Product::all();
         // Trả về view "product.index" với biến "products"
        return view('client.shop.shop', compact('cats','products'));
    }
}
