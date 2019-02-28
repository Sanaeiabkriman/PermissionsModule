<?php

namespace Modules\Matiere\Entities;

use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    protected $fillable = [];

    public function ChapParent(){
        return $this->where("parent",$id)->get();
    }

    public function type(){
        return $this->belongsToMany('Modules\Matiere\Entities\Chapitre', 'chapitre_type', 'chapitre_id', 'type_id');
    }


}
