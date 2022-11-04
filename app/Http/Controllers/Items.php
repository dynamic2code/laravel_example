<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Items extends Controller
{
    public function show_items(){
        $item =  [
            'item_name' => $name,
            'quantity'=> $quantity,
            'price' => $price
        ];
        return view('shopping_list',$item);
    }
}
