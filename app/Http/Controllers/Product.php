<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Product extends Controller
{
    public function index()
    {
        if(request()->has('category_id')){
            $products = DB::table('products')->where('category_id',request('category_id'))->paginate(6);
        }else{
            $products = DB::table('products')->paginate(6);
        }

    return view('product.index',['products' => $products]);
    }

    public function show($identifier)
    {
        $products = DB::table('products')->where('identifier',$identifier)->get();
        return view('product.show')->with('products', $products);
    }
}
