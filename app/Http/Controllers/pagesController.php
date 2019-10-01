<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function getHome(){
        return view('home1');
    }
    public function getAbout(){
        return view('about');
    }
    public function getContact(){
        return view('contact');
    }
    public function getCheck(){
        return view('check');
    }
  
}
