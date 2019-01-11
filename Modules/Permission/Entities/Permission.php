<?php

namespace Modules\Permission\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;
    protected $fillable = [];
    
    public static function permipolicy(){
        return $this->role();
    }
    
    public function role(){
        return $this->belongsToMany('Modules\Permission\Entities\Role', 'permission_roles', 'permission_id','role_id');
    }
}
