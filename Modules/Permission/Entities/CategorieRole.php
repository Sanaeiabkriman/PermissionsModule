<?php

namespace Modules\Permission\Entities;

use Illuminate\Database\Eloquent\Model;

class CategorieRole extends Model
{
    protected $fillable = [];

    public function role(){
        return $this->hasMany('Modules\Permission\Entities\Role');
    }
}
