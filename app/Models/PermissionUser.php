<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionUser extends Model
{
    /**
     * The table associated with the model permission user
     *
     * @var string
     */
    protected $table = 'permission_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'permission_id', 
    ];

    /**
     * Get the user that owns the permission user.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the permission that owns the permission user.
     */
    public function permission()
    {
        return $this->belongsTo('App\Models\Permission');
    }
}
