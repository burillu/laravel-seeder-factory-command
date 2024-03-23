<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index (){
        $products = Product::where('sponsored', 1)->get();
        return view('products.index', compact('products'));
    }
}
