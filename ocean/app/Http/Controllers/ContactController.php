<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function show()
    {
        $cats = ProductCategory::all();
        return view('client.contact.contact', compact('cats'));
    }
}
