<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    /**
     * The table associated with the model product category.
     *
     * @var string
     */
    protected $table = 'product_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image', 'slug',
    ];

    /**
     * Get the products for the product category.
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }




}
