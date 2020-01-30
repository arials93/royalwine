<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The table associated with the model product category.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'delivery_address', 'delivery_date', 'total', 'status', 'user_id',
    ];

    /**
     * Get the user that owns the order.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the order_products for the order.
     */
    public function order_products()
    {
        return $this->hasMany('App\Models\OrderProduct');
    }

    /**
     * The products that belong to the order.
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

}
