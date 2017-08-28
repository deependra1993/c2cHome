<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['pname','price','details','image','cid','id'];
    //
    public function Category()
    {
    	return $this->belongsTo(Category::class);
    }
}
