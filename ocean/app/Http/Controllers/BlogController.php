<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    function show()
    {
        $cats = ProductCategory::all();
        $blogs = Blog::all();
        return view('client.blog.blog', compact('blogs', 'cats'));
    }

    function blogDetail($id){
        $cats = ProductCategory::all();
        $blog = Blog::find($id);
        return view('client.blog.blog-detail', compact('blog', 'cats'));
    }
}
