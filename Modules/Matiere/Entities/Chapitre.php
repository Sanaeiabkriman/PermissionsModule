<?php

namespace Modules\Matiere\Entities;

use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    protected $fillable = [];

    public function ChapParent($id){
        return $this->where($this->parent,$id);
    }

    public function type(){
        return $this->belongsToMany('Modules\Matiere\Entities\Type', 'chapitre_type', 'chapitre_id', 'type_id');
    }

}
