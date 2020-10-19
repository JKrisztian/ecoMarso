<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Product extends Controller
{
    public function index()
    {
    $products = DB::table('products')->paginate(6);
    return view('welcome',['products' => $products]);
    }

    public function show($identifier)
    {
        $product = DB::table('products')->where('identifier',$identifier)->first();
        return view('products/{identifier}',['product' => $product]);
    }
}
