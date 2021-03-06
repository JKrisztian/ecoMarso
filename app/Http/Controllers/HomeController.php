<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Product;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $brand = DB::table('products')->orderBy('short_name')->get()->unique('short_name');

        $products = DB::table('products')->inRandomOrder()->take(3)->get();
        return view('home',compact(['products','brand']));
    }
}
