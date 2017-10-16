<?php

/**
*This file performs all the operation related to product.
*/

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\User;

use Illuminate\Support\Facades;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\RedirectResponse;


class ProductsController extends Controller
{
    /**
     * Display a listing of the products
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Catches all the products from database
        $products = Product::all(); 

        return view('layouts.product.index',compact('products'));

    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Gets the product category from database
        $categories = Category::pluck('cname', 'cid');
       

        return view('layouts.product.create',compact('categories'));

    }

    /**
     * Store a newly created product in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //Validates the field from product creation page
        $this -> validate($request,[

            'pname' => 'required|max:255',
            'price' => 'required|numeric',
            'details' => 'required|max:1048',
            'image' => 'required|image',
        ]);

        //Following batch of code deals with handling the image
        $formInput = $request->except('image');
        $formInput['flag'] = 0;         
        $image = $request->file('image');
        $rand = rand(2,100);       
        $name =$image->getClientOriginalName();
        $newName=$rand.$name;
        $destinationPath = public_path('/image');
        $image->move($destinationPath, $newName);   
        

        if($image)
        {
            
            $formInput['image'] = $newName;
        }


        product::create($formInput);
        session()->flash('message', 'Created Successfully');

        return redirect()->route('productlist');
    }

    /**
     * Display the specified product.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Responses
     */
    public function show($id)
    {
        //Catches the details about choosen product
        $product = Product::find($id);

        
        return view('layouts.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified prouct.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Catches the chosen product
        $product = Product::findorFail($id);
        $categories = Category::pluck('cname', 'cid');

        
        return view('layouts.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified product in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validates the field from product editing page
        $this -> validate($request,[

            'pname' => 'required|max:255',
            'price' => 'required|numeric',
            'details' => 'required|max:1048',
            'image' => 'required|image',
        ]);



        //It handes the image and stores the image as a string in database
        $formInput=$request->except('image');        
        $image = $request->file('image');
        $rand = rand(2,100);       
        $name =$image->getClientOriginalName();
        $newName=$rand.$name;
        $destinationPath = public_path('/image');
        $image->move($destinationPath, $newName);   
        


        if($image)
        {
            
            $formInput['image'] = $newName;
        }

        //Updates the product
        $product = Product::findorFail($id);
        $product -> fill($formInput);
        $product->save();

        session()->flash('message', 'updated Successfully');

        return redirect()->route('productlist');
    }

    //handles if any product is reported
    public function flagUpdate($id)
    {
        $product = Product::findorFail($id);
        $flag = $product->flag;
        $flag = $flag + 1 ;
        $product->flag = $flag;
        $product->save();
        
        session()->flash('message', 'Content reported');
        return redirect()->route('productlist');
    }
    




    /**
     * Remove the specified product from database.
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

        return redirect()->route('productlist');
    }

}
