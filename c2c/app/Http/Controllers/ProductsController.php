<?php

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all(); 

        return view('layouts.product.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::pluck('cname', 'cid');
       

        return view('layouts.product.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //
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

        product::create($formInput);
        session()->flash('message', 'Created Successfully');

        return redirect()->route('productlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Responses
     */
    public function show($id)
    {
        //
        $product = Product::find($id);

        
        return view('layouts.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findorFail($id);
        $categories = Category::pluck('cname', 'cid');

        
        return view('layouts.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        $product = Product::findorFail($id);
        $product -> fill($formInput);
        $product->save();

        session()->flash('message', 'updated Successfully');

        return redirect()->route('productlist');
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

        return redirect()->route('productlist');
    }

}
