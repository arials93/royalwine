<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
     /**
     * The table associated with the model order product.
     *
     * @var string
     */
    protected $table = 'order_product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quality', 'price', 'discount', 'total', 'product_id', 'order_id', 
    ];

    /**
     * Get the order that owns the order product.
     */
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }

    /**
     * Get the product that owns the order product.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
