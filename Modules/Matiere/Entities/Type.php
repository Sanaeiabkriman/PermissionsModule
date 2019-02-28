<?php

namespace Modules\Matiere\Entities;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [];

    public function chapitre(){
        return $this->belongsToMany('Modules\Matiere\Entities\Chapitre');
    }
}
