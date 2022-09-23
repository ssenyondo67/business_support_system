<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Participant;
use Hash;
use Session;

class CustomersController extends Controller
{
    //
    public function registration()
    {
      return \view('auth.register');
    }
    
    public function registerCustomer(Request $request)
    {
       $request->validate([
         'first_name'=>'required',
         'last_name'=>'required',
         'username'=>'required',
         'email'=>'required|email|unique:customers,email',
         'password'=>'required|min:5|max:15',
         'address'=>'required',
         'contact'=>'required',
         'repeated_password'=>'required',
         'date_of_birth'=>'required',
       ]);

       $user = new Customer();
       $user->first_name = $request->first_name;
       $user->last_name = $request->last_name;
       $user->username = $request->username;
       $user->email = $request->email;
       $user->password =Hash::make( $request->password);
       $user->address = $request->address;
       $user->contact = $request->contact;
       $user->date_of_birth = $request->date_of_birth;
       $res =$user->save();
       if($res){
         return back()->with('success', 'You have register successfuly');
       }else{
         return back()->with('fail', 'Something wet wrong');
       }


    }

    public function editCustomerProfile(){
       $customer = Customer::where('id','=',Session::get('loginId'))->first();
       
       return view('auth.update',compact('customer'));
    }
    
    public function updateCustomerProfile(Request $request,$id){
      $request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'username'=>'required',
        'email'=>'required|email|',
        'password'=>'required|min:5|max:15',
        'address'=>'required',
        'contact'=>'required',
        'repeated_password'=>'required',
        'date_of_birth'=>'required',
      ]);

       $user = Customer::where('id','=',$id);
       $user->first_name = $request->first_name;
       $user->last_name = $request->last_name;
       $user->username = $request->username;
       $user->email = $request->email;
       $user->password =Hash::make( $request->password);
       $user->address = $request->address;
       $user->contact = $request->contact;
       $user->date_of_birth = $request->date_of_birth;
       $res =$user->save();
       if($res){
         return back()->with('success', 'You have updated successfuly');
       }else{
         return back()->with('fail', 'Something wet wrong');
       }


    }



   
    
}
