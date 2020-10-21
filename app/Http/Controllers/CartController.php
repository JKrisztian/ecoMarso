<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function store(Request $request)
    {
        \Cart::add($request->identifier, $request->name, $request->net_price, 1);
        return view('cart.index')->with('message','Kosárba rakva!');
    }
}
