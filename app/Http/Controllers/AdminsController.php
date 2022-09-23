<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;
use App\Models\Participant;
use App\Models\Admin;
use Hash;
use Session;


class AdminsController extends Controller
{
    //
    public function registration()
    {
      return \view('admin.AddAdmin');
    }

    public function editAdminprofile(){
      $admin=Admin::where('id','=',Session::get('loginId'))->first();
      return view('admin.editAdminProfile',compact('admin'));
    }
    
    public function registerAdmin(Request $request)
    {
       $request->validate([
         'first_name'=>'required',
         'last_name'=>'required',
         'username'=>'required',
         'email'=>'required|email|unique:admins,email',
         'password'=>'required|min:5|max:15',
         
         ]);

       $user = new Admin();
       $user->first_name = $request->first_name;
       $user->last_name = $request->last_name;
       $user->username = $request->username;
       $user->email = $request->email;
       $user->password =Hash::make( $request->password);
       $res =$user->save();
       if($res){
         return back()->with('success', 'You have register successfuly');
       }else{
         return back()->with('fail', 'Something wet wrong');
       }


    }

   
    public function dashboard(){
      $products=Product::all();
      $participants= Participant::all();
      
      return \view('admin.dashboard',compact('products','participants'));
    }

    
    public function updateAdminProfile(Request $request,$id){
      //validation rules
      $request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'username'=>'required',
        'email'=>'required',
        'password'=>'required|min:5|max:15',
        
        ]);

      $user = Admin::where('id','=',$id);
      $user->first_name = $request->first_name;
      $user->last_name = $request->last_name;
      $user->username = $request->username;
      $user->email = $request->email;
      $user->password =Hash::make( $request->password);
      $res =$user->save();
      if($res){
       return back()->with('message','Profile Updated');
      }
  }
  
  

}
