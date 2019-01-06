<?php

namespace Modules\Permission\Entities;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [];
    
    public static function permipolicy(){
        return $this->role();
    }
    
    public function role(){
        return $this->belongsToMany('Modules\Permission\Entities\Role', 'permission_roles', 'permission_id','role_id');
    }
}
