<?php
/**
*This file handles all operation related to category
*/
namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
     

    /**
     * Show the form for creating a product category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.category.create');
    }

    /**
     * Store a newly created category in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new category;
        $category->cname=$request->cname;       
        $category->save();
        //return redirect()->route('createCategory');
        return view('layouts.category.create');
      
    }

    
}
