<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Participant;
use App\Models\Customer;
use App\Models\Sale;


use Session;
use DB;

class SalesController extends Controller
{
    // important methods
    public function set_rank(){
        $participants =Participant::all();
        $scores=[];
        foreach($participants as $participant){
             $scores[$participant->id]=$participant->current_score;
        }

        $count=count($scores);
      for ($i=0; $i < $count ; $i++){
            if(count($scores) > 1){
              $high_score_index = array_search(max($scores),$scores);            
             
            }else{
              $high_score_index = array_search(min($scores),$scores);
            }
            $participant = Participant::where('id','=',$high_score_index)->first();
            $participant->rank = strval($i + 1);
            $participant->save();
            unset($scores[$high_score_index]);

        }

        // for ($i=0; $i < count($scores) +1; $i++){
        //     $high_score_index = array_search(max($scores),$scores);
        //     $participant = Participant::where('id','=',$high_score_index)->first();
        //     $participant->rank = strval($i + 1);
        //     $participant->save();
        //     unset($scores[$high_score_index]);
        // }

    
    }


    public function booking(Request $request,$id){
        $product=Product::where('id','=',$id)->first();
        return view('confirmbooking',compact('product','id'));
    }

    public function savebooking(Request $request, $id){
        $request->validate([
            'number'=>'required',
        ]);

           // check for buying of the same product
        $sale=Sale::where('customer_id','=',Session::get('loginId'))
                    ->where('product_id','=',$id)
                    ->first();
             
        if($sale){
            if($request->number > 1){
                $points=4;
            }else{
                $points=2;
            }
        }else{
            $points=1;
        }

        $product =Product::where('id', '=',$id)->first();
        $product->stock_available= $product->stock_available - $request->number;
        $product->stock_sold= $product->stock_sold + $request->number;
        $res=$product->save();

        $participant =Participant::where('id','=',$product->participant_id)->first();
        $participant->current_score =$participant->current_score + $points;
        $participant->save();
        $this->set_rank();

        $sale = new Sale();
        $sale->customer_id = Session::get('loginId');
        $sale->product_id =$id;
        $sale ->quantity =$request->number;
        $sale->points=$points;
        $res =$sale->save();
        if($res){
            return back()->with('success','booking done');
        }
    }

   
}





/////////////////////////////////////////////////////////////////////////////////////////////
