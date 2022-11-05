<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //

    public Function show_items(){
        $item =  array(
            'name' => 'cups',
            'quantity'=> 30,
            'price' => 89
        );

        return view('shopping_list',$item);
    }
}
