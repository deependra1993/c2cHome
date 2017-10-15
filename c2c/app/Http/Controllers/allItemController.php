<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\message;
use Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class allItemController extends Controller
{
	public function index(){
		$newArrayItems = $this->items();
		return view('layouts.product.allItems',compact("newArrayItems"));
		 
	}
	
	private function items(){
		$allItem = DB::table('products')->get();
   			return $allItem ;
	}
 	 public function message($id){
  		 $newId=$id;
  		 $email=$this->userEmail($newId);
  		 
 		 Mail::to($email)->send(new message());
  	
 	 }
 	 private function userEmail($id){
 	 	$feild=User::findorFail($id);
 	 	$email=$feild->email;
 	 	return $email;

 	 }
}
