<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Product;



class ParticipantsController extends Controller
{
    //
    public function displayParticipants(){
        
        $products=Product::all();
        $participants= Participant::all();
        
        return \view('participant',compact('products','participants'));
    }

    public function displayParticipantlist(){
       
        $products=Product::all();
        $participants= Participant::all();
        
        return \view('admin.participantlist',compact('products','participants'));
    }
}
