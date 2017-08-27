<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable=['cname'];
    //
    public function Products()
    {
    	return $this->hasMany(Product::class);

    }
}
