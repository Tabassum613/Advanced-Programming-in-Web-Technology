<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function Home(){
        return view('home');
    }

    public function Teams(){
        return view('teams');
    }

    public function About(){
        return view('aboutus');
    }

    public function Contact(){
        return view('contact');
    }

    public function Product(){
        $pro=array("XYZ","ABC","DEF","MNO");
        return view('product')->with('pro',$pro);
    }
}
