<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    
    public function home(){
    	return view('home');
    }

    public function about(){
    	return view('about');
    }
    public function portfolio(){
    	return view('portfolio');
    }
    public function service(){
    	return view('service');
    }
}
