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
// ajouter la ligne suivante pour utiliser le soft delete
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
