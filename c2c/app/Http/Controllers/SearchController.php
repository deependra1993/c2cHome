<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

/*use DB;*/
use App\User;
use Illuminate\Support\Facades\Input;
Class SearchController extends Controller
{
	public function index()
	{
		return view('search.search');
	}
	public function search(Request $q)
	{
		/*Fetching the keyword from search blade page and querying it in the database for it*/

			$q = Input::get ( 'q' );
                  $products = DB::table('products')-> where('pname','LIKE','%'.$q.'%')->get() ;
                  	echo "<div><h1>Your searched Product:</h1><div>"."<br>";
					/*Storing each matching product name in an array*/

   					$arrPname = array();
					$arrPprice= array();
					$arrPdetail= array();
   					$arrPimage= array();
					foreach ($products as $prod) {
					/*	$line = "Your Product ";
					echo '<style = "font-color: #ff0000"> $line </style>';*/
					$arrPname[]= $prod->pname;
					echo "<h4>Product info</h4>".$prod->pname."<br>";
					
		 			$arrPprice[]=$prod->price;
		 			echo $prod->price."<br>";
		 			
		   			$arrPdetail[]=$prod->details;
		   			echo $prod->details."<br>";
		   		
		   	        $arrPimage[] = $prod->image;

                    echo '<img src="\ . $prod->image. ">'."<br>";
                    //echo '<img src="{"image/{{ $arrPimage[] }">';*/
                   
                   return view ('Search.search',compact("arrPname","arrPprice","arrPdetail","arrPimage"));          		

}

/*
                  if(count($products) > 0)*/
                  	
                  
                  /*else return view ('home')->withMessage('No Details found. Try to search again !');*/

		}

	}