<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reward;
use Hash;
use Session;

class RewardsController extends Controller
{
    public function add_reward(){
        return view('admin.AddReward');
    }

    public function registerReward(Request $request)
    {
       $request->validate([
         'name'=>'required',
         'description'=>'required',
                 
         ]);

       $reward = new Reward();
       $reward->name = $request->name;
       $reward->description = $request->description;
       $res =$reward->save();
       if($res){
         return back()->with('success', 'You have register successfuly');
       }else{
         return back()->with('fail', 'Something wet wrong');
       }


    }

  
}
