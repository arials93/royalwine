<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model product.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'size', 'abv', 'vintage', 'image', 'discount', 'insock', 'slug',
        'isFeatured', 'prodcategory_id', 'origin_id',
    ];

    /**
     * Get the order_products for the product.
     */
    public function order_products()
    {
        return $this->hasMany('App\Models\OrderProduct');
    }

    /**
     * Get the product_category that owns the product.
     */
    public function product_category()
    {
        return $this->belongsTo('App\Models\ProductCategory');
    }

    /**
     * Get the origin that owns the product.
     */
    public function origin()
    {
        return $this->belongsTo('App\Models\Origin');
    }

    /**
     * The orders that belong to the product.
     */
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }

}
