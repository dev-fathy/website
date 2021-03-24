<?php

namespace App;
use App\Category;
use App\Brand;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
    	'name',
    	'image',
        'SKE',
        'price',
        'brand_id',

];

public const VALIDATION_RULES = array(
    'name' => 'required|string|max:255',
    'SKE' => 'required',
    'price' => 'required',
    'image'=>'image|mimes:png,jpg,jpeg'
);

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id')->withTimestamps();
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

}
