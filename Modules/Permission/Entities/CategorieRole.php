<?php

namespace Modules\Permission\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategorieRole extends Model
{
    use SoftDeletes;
    protected $fillable = [];

    public function role(){
        return $this->hasMany('Modules\Permission\Entities\Role');
    }
}
