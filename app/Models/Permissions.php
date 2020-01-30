<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    /**
     * The table associated with the model permission
     *
     * @var string
     */
    protected $table = 'permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the permission_users for the permission.
     */
    public function permission_users()
    {
        return $this->hasMany('App\Models\PermissionUser');
    }

    /**
     * The users that belong to the permission.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
