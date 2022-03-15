<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\VendorAuthController;

use Illuminate\Http\Request;
use App\Models\VendorAuth;
use Session;



class VendorAuthController extends Controller
{
        
    public function Home(){
        return view("home");
      }
      
    public function Login()
    {
        return view("login");
    }

    public function Registration(){
      return view("registration");
    }
    


    public function RegisterVendor(Request $request){
      

      $request->validate([
          'name' => 'required|min:3|max:20',
          'email' => 'required|email|unique:vendor_auths',
          'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
          'address' => 'required',
          'password' => 'required|min:4|max:15',
      ]);
   
        $vendor = new VendorAuth();
        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->number = $request->number;
        $vendor->address = $request->address;
        $vendor->password = $request->password;    
        $res=$vendor->save();

        if($res){
          return back()->with('Success','You have registered successfully');
        }
        else{
          return back()->with('Fail','Something Wrong');
        }


    }



    public function LoginVendor(Request $request){
      $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:4|max:15',
      ]);


      $vendor = VendorAuth::where('email','=',$request->email)->first();
      if($vendor){
        if($request->password == $vendor->password){
          $request->Session()->put('loginId', $vendor->id);
          return redirect('dashboard');
        }
        else{
          return back()->with('Fail','Password not matches');
        }
      }
      else{
        return back()->with('Fail','This email is not registered');
      }

    }

    public function Help(){
      return view("help");
    }


    public function Dashboard(){
    $data = array();
    if(Session::has('loginId')){
      $data = VendorAuth::where('id', '=', Session::get('loginId'))->first();

    }
      return view('dashboard', compact('data'));
    }
  
    

    public function Logout(){
      if(Session::has('loginId')){
        Session::pull('loginId');
        return redirect('login');
      }
    }

}
