<?php

namespace App;

use App\Brand;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    protected $fillable = [
        'id',
        'title',

    ];

    public  function brands()
    {
        return $this->belongsToMany(Brand::class, 'category_brand', 'category_id', 'brand_id')->withTimestamps();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category', 'category_id', 'product_id')->withTimestamps();
    }


    public const VALIDATION_RULES = array(
        'title' => 'required|string|max:255',
    );

}
