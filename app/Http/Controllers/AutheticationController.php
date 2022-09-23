<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Admin;
use Hash;
use Session;

class AutheticationController extends Controller
{
   
    public function login()
    {
        return \view('auth.login');

    }

    public function loginUser(Request $request){
      
        $request->validate([       
          'email'=>'required|email',
          'password'=>'required|min:5|max:15',        
        ]);
        
        $customer = Customer::where('email','=',$request->email)->first();
        $admin = Admin::where('email','=', $request->email)->first();
  
        if($customer){
            if(Hash::check($request->password, $customer->password)){
               
              $request->Session()->put('loginId',$customer->id);
              return redirect('home');
            }else{
              return back()->with('fail', 'Incorrect Password');
            }
  
        }elseif($admin){
          if(Hash::check($request->password,$admin->password)){
            $request->Session()->put('loginId',$admin->id);
            return redirect('dashboard');
          }else{
            return back()->with('fail', 'Incorrect Password');
          }
        
           
        }else{
          return back()->with('fail', 'Your email is not registered');
        }
  
      }

      public function logoutUser()
    {
      if(Session::has('loginId')){
        Session::pull('loginId');
        return redirect('login');
      }
    }
  
}
