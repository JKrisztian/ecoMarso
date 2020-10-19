<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Product extends Controller
{
    public function index()
    {
    $products = DB::table('products')->get();
    return view('welcome',['products' => $products]);
    }

    // public function show($identifier)
    // {
    //     $product = Product::where('identifier',$identifier)->first();
    //     if (!is_null($product)){
    //         return view('show',compact('product'));
    //     }else{
    //         session()->flash('errors','sorry');
    //         return redirect()->route('welcome');
    //     }
    // }
}
