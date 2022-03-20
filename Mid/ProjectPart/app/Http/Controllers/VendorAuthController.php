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
        $vendor->save();

        // if($res){
        //   return back()->with('Success','You have registered successfully');
        // }
        // else{
        //   return back()->with('Fail','Something Wrong');
        // }
        return redirect()->route('login');

    }



    public function LoginVendor(Request $request){
      $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:4|max:15',
      ]);


      $vendor = VendorAuth::where('email',$request->email)
                            ->where('password',$request->password)
                            ->first();

      if($vendor){
        $request->session()->put('user',$vendor->name);
        return redirect()->route('VendorDashboard');
      }
      else{
        return back();
      }

    }

    public function VendorDashboard()
    {
        return \view('VendorDashboard');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }

    public function Help(){
      return view("help");
    }


    public function Dashboard(){
    return "welcome";

  }
   
    }

