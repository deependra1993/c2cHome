<?php
//ADMIN PANNEL IS THE CRUCIAL PART OF THE WEBSITE
//THIS IS WHERE THE OWNER OF THE WEBSITE CAN MAKE CRUSIAL ACTIONS
//ADMIN COUNTROLER PROVIDES THE USER WITH THE FUNCTIONS TO ACTIEVE THOSE DESIRED ACTIONS 
//
namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	 public function __construct()
    {
    	
        $this->middleware('auth');
    }


    public function index(){
    	//$userTotal=$this->count("users");
    	//$productTotal=$this->count("products");
    	$user=$this->user(); 
    	
    	$navCounts = $this->allList();
    	$productTotal = $navCounts[1];
    	$userTotal = $navCounts[0];
    	return view("admin.admin",compact("userTotal","productTotal","user"));
    } 


    public function PostedProduct(){
    	$navCounts = $this->allList();
    	$productTotal = $navCounts[1];
    	$userTotal = $navCounts[0];
    	$productDetail=$this->ProductList();
    	return view("admin.product",compact("userTotal","productTotal","productDetail"));
    }


    //this function filters all the flagged ad posts or items 
    public function flags(){
        $navCounts = $this->allList();
        $productTotal = $navCounts[1];
        $userTotal = $navCounts[0];
        $flagDetail=$this->flagedList();
        
        return view("admin.flags",compact("userTotal","productTotal","flagDetail"));
   }








    //for the nav count list 
    public function allList(){
    	$userTotal=$this->count("users");
    	$productTotal=$this->count("products");
    	$countList=array($userTotal,$productTotal);
    	return $countList;

    }




//function library
    public function user(){
    	$users = DB::table('users')->get();
    	return $users;	

    }
    //for counting the number of users 
    public function count($tableName){
    	$name=$tableName;
    	$total=DB::table($name)->get()->count();
    	return $total;

    }

    //this is for all the product list 
    public function ProductList(){
    	$productList=DB::table('products')->get();
 		  
    	return $productList;

    }
    //this is the functionn that fetches flagged items from database
        public function flagedList(){
        $flagList = DB::table('products')->where('flag', '1');
            return $flagList;
    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findorFail($id);
        $product->delete();
        session()->flash('message', 'Deleted Successfully');

        return redirect()->route('product');
    }

}
