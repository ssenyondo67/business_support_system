<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Participant;
use App\Models\Reward;


class ProductsController extends Controller
{
    //
    public function displayProducts(){
        $products=Product::all();
        return view('products',compact('products'));
    }
    
    public function home(){
        $products=Product::all();
        $participants=Participant::all();
        $rewards=Reward::all();
        return \view('home',compact('products','participants','rewards'));
    }
}

