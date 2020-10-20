<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Product;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->inRandomOrder()->take(3)->get();
        return view('home')->with('products', $products);
    }
}
