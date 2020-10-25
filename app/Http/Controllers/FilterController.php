<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FilterController extends Controller
{
    
    public function filter_p()
    {
        $brand = DB::table('products')->orderBy('short_name')->get()->unique('short_name');

        $type = \Request::get('evszak');
        $size = \Request::get('meret');
        $maked = \Request::get('gyarto');

        // if($type == "summer"){
        // $sum = DB::table('products')
        //     ->where('name', 'LIKE' ,'%summer%' )
        //     ->where('name', 'NOT LIKE' ,'%winter%' )
        //     ->where('name', 'NOT LIKE' ,'%snow%' )
        //     ->where('name', 'NOT LIKE' ,'%all weather%' )
        //     ->where('name', 'NOT LIKE' ,'%all season%' )
        //     ->where('name', 'NOT LIKE' ,'%allseason%' )
        //     ->where('name', 'LIKE' ,'%'. $size .'%' )
        //     ->where('short_name', 'LIKE' ,'%'. $maked .'%')
        //     ->paginate(6);
        // }
        // if($type == 'winter'){
        // $sum = DB::table('products')
        //     ->where('name', 'LIKE' ,'%winter%' )
        //     ->where('name', 'LIKE' ,'%snow%' )
        //     ->where('name', 'NOT LIKE' ,'%all weather%' )
        //     ->where('name', 'NOT LIKE' ,'%all season%' )
        //     ->where('name', 'NOT LIKE' ,'%allseason%' )
        //     ->where('name', 'NOT LIKE' ,'%summer%' )
        //     ->where('name', 'LIKE' ,'%'. $size .'%' )
        //     ->where('short_name', 'LIKE' ,'%'. $maked .'%')
        //     ->paginate(6);
        // }
        
                $sum = DB::table('products')
                ->where('name', 'LIKE' ,'%'. $type .'%' )
                ->where('name', 'LIKE' ,'%'. $size .'%' )
                ->where('short_name', 'LIKE' ,'%'. $maked .'%')
                ->paginate(6);
            
        


        return view('product.filterResult',compact(['sum','brand']));
    }
}
