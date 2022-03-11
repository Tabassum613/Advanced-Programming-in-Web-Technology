<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{

    public function Contact(){
        return view('contact');
    }

    public function contactUs(Request $request){

        $rules= [
            'name'=> 'required|min:5|string:A-Z,a-z',
            'email' => 'required|Email',
            'number'=> 'required|numeric',
            'message'=> 'required'
        ];
        $messages= [
            'required'=> 'Please Fill-Up the Field',
            'name.min'=> 'Minimum 5 Character',
            'string'=> 'Name Should Be String',
            'numeric'=> 'The contact must be Numeric',
        ];

          $this->validate($request,$rules,$messages);
           $output ="<h1>Submited</h1>";
            return $output;
     
    }

    public function Registration(){
        return view('registration');
    }


    public function register(Request $request){
        $rules= [
            'name'=> 'required|min:5|string:A-Z,a-z',
            'email' => 'required|Email',
            'number'=> 'required|numeric',
            'password'=> 'required|min:6'
        ];
        $messages= [
            'required'=> 'Please Fill-Up the Field',
            'name.min'=> 'Minimum 5 Character',
            'string'=> 'Name Should Be String',
            'numeric'=> 'The contact must be Numeric',
            'password.min' => 'Minimum 6 Character'
        ];

    $this->validate($request,$rules,$messages);
    $output ="<h3>Submited</h3>";
    $output.="<br>Name: ".$request->name;
    $output.="<br>Email: ".$request->email;
    $output.="<br>Password: ".$request->password;
    $output.="<br>Phone Number: ".$request->number;
        return $output;
    }


    public function Login(){
        return view('login');
    }

    public function loginData(Request $request)
    {
        $rules= [
            'email' => 'required|email',
            'password'=> 'required|min:6'
        ];
        $messages= [
            'required'=> 'Please Fill-Up the Field',
            'password.min' => 'Minimum 6 Character'
        ];

    $this->validate($request,$rules,$messages);
    $output ="<h3>Login Successfull</h3>";
    if($request->email=="binti26@gmail.com" && $request->password=="112233")
    {
        return $output;
    }
    else
    {
        return \view('login');
    } 
    }
}
