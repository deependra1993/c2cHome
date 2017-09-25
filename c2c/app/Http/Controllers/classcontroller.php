<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class classcontroller extends Controller
{
    public function index(){
    	return view('class.api');
    }
}
