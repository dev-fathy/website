<?php

namespace App;
use App\Category;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $table = 'brands';
    protected $fillable = [
        'name',

    ];

    public const VALIDATION_RULES = array(
        'name' => 'required|string|max:255',
    );

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_brand', 'brand_id', 'category_id')->withTimestamps();
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }
}
