<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function store()
    {
        \Cart::add($request->identifier, $request->name, 1, $request-net_price)->associate('App\Product');
        return view('cart.index')->with('message','Kosárba rakva!');
    }
}
