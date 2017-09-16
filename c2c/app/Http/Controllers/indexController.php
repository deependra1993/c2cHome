<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
   public function index(){
   	$prD= $this->fetchProduct();
   	$arrPname = array();
	$arrPprice= array();
	$arrPdetail= array();
		foreach ($prD as $prod) {
			$arrPname[]= $prod->pname;
		 	$arrPprice[]=$prod->price;
		   	$arrPdetail[]=$prod->details;

		}  
		   

   	return view('welcome',compact("arrPname","arrPprice","arrPdetail"));
   }
   /*fetching product data from database */ 
   private function fetchProduct(){
   	$product=DB::table('products')->get();
   	return $product;
		    	
  }



}