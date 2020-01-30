<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model blog.
     *
     * @var string
     */
    protected $table = 'blogs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image', 'slug', 'short_description', 'description', 'user_id', 'blogcategory_id',
    ];

    /**
     * Get the blog_category that owns the blog.
     */
    public function blog_category()
    {
        return $this->belongsTo('App\Models\BlogCategory');
    }

    /**
     * Get the user that owns the blog.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
