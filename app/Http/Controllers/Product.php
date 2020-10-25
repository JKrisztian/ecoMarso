<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Product extends Controller
{
    public function index()
    {
        $brand = DB::table('products')->orderBy('short_name')->get()->unique('short_name');

        if(request()->has('category_id')){
            $products = DB::table('products')->where('category_id',request('category_id'))->paginate(6);
        }else{
            $products = DB::table('products')->paginate(6);
        }

    return view('product.index',compact(['products','brand']));
    }

    public function show($identifier)
    {
        $brand = DB::table('products')->orderBy('short_name')->get()->unique('short_name');

        $products = DB::table('products')->where('identifier',$identifier)->get();
        return view('product.show',compact(['products','brand']));
    }

    public function search_p()
    {
        $brand = DB::table('products')->orderBy('short_name')->get()->unique('short_name');

        $key = \Request::get('keres');
        $products = DB::table('products')->where('name', 'LIKE' ,'%'. $key .'%')->orderBy('identifier')->paginate(12);
        return view('product.searchResult',compact(['products','brand']));
    }
}
