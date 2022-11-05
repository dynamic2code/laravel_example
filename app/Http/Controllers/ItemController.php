<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemController extends Controller
{
    //
    

    public Function show_items(){

        $item = Items::all();
        // $item =  array(
        //     'name' => 'cups',
        //     'quantity'=> 30,
        //     'price' => 89
        // );

        return view('shopping_list',$item);
    }
}
