<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
        
    //Contact.............................
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
            'required'=> 'Please fill out this field',
            'name.min'=> 'Minimum 5 Character',
            'string'=> 'Name Should Be String',
            'numeric'=> 'The contact must be Numeric',
        ];

          $this->validate($request,$rules,$messages);
           $output ="<h1>Submited</h1>";
            return $output;

    }

    //Home........................................

    public function Home(){
        return view('home');
    }

      //Profile...................................

      public function Profile(){
        return view('profile');
    }



      //Help................................

    
    public function Help(){
        return view('help');
    }




}
