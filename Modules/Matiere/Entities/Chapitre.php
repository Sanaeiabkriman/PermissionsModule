<?php

namespace Modules\Matiere\Entities;

use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    protected $fillable = ['nom','description','parent','enfant','image','competences','prerequis'];

    public function ChapParent($id){
        return $this->where($this->parent,$id);
    }

    public function type(){
        return $this->belongsToMany('Modules\Matiere\Entities\Type', 'chapitre_type', 'chapitre_id', 'type_id');
    }

}
