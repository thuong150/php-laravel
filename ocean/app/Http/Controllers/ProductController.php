<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show()
    {
        return view('client.home.index');
    }

    public function showProductsByCategory(Request $request, $categoryId)
    {
        $category = ProductCategory::findOrFail($categoryId);
        $cats = ProductCategory::all();
        $products = $category->products()
            ->paginate(9);

            return view('client.shop.shop', compact('products', 'cats'));
    }

    public function showDetail($id){
        $cats = ProductCategory::all();
        $product = Product::find($id);
        return view('client.product.product-detail', compact('product', 'cats'));
    }
}
