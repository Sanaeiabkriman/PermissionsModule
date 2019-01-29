<?php
/*-----------------------------------------------
* @package Module Permissions
* @author  Sanae
* @copyright   Copyright (c) 2018 - MolenGeek (https://molengeek.com/)
* @license http://opensource.org/licenses/MIT  MIT License
* @since   Version 1.0.0
* @TODO (??)
* @param Ajout du softDelete
* @param2 Lien entre la table categorie_role et roles
* @return TypeObjet
-----------------------------------------------*/
namespace Modules\Permission\Entities;

use Illuminate\Database\Eloquent\Model;
// utilisation du soft delete
use Illuminate\Database\Eloquent\SoftDeletes;

class CategorieRole extends Model
{
    use SoftDeletes;
    protected $fillable = [];
    
// lien avec la table Role
    public function role(){
        return $this->hasMany('Modules\Permission\Entities\Role');
    }
}
