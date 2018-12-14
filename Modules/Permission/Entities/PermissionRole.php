<?php

namespace Modules\Permission\Entities;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    protected $fillable = [];

    public function permission(){
        return $this->hasMany('App\Permission');
    }
    public function role(){
        return $this->hasMany('App\Role');
    }
}
