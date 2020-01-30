<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    /**
     * The table associated with the model origin.
     *
     * @var string
     */
    protected $table = 'origins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 
    ];

    /**
     * Get the products for the origin.
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }


}
