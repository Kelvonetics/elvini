<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    //
    protected $table='roles';

    protected $fillable=['role_name', 'description', 'created_by'];
    

    public function dwp_assign_to()
    {
    	return $this->hasMany('App\dwp_assign_to', 'assign_to_role');
    }

    public function users()
    {
    	return $this->hasMany('App\User', 'role');
    }

    public function sub_role()
    {
        return $this->hasMany('App\role_sub', 'role_id');
    }

    public function permission()
    {
    	return $this->belongsToMany('App\Permission', 'permission_role', 'role_id', 'permission_id');
    }

   
}
