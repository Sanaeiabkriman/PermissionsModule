<?php

namespace Modules\Permission\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = [];
    public function permission(){
        return $this->belongsToMany('Modules\Permission\Entities\Permission', 'permission_roles','role_id', 'permission_id');   
    }
    public function categorie(){
        return $this->belongsTo('Modules\Permission\Entities\CategorieRole','categorie_role_id','id'); 
    }
    public function role_users(){
        return $this->belongsToMany('App\User');
    }
    
}
