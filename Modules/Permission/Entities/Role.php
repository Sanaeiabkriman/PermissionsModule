<?php
/*-----------------------------------------------
* @package Module Permissions
* @author  Sanae
* @copyright   Copyright (c) 2018 - MolenGeek (https://molengeek.com/)
* @license http://opensource.org/licenses/MIT  MIT License
* @since   Version 1.0.0
* @TODO (??)
* @param type
* @param2 type
* @return TypeObjet
-----------------------------------------------*/

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
