<?php

namespace Modules\Factory\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projet extends Model
{
    use SoftDeletes;

    protected $fillable = [];

    public function statut(){
        return $this->belongsTo('Modules\Factory\Entities\Statut','statut_id','id'); 
    }
    public function client(){
        return $this->belongsTo('Modules\Factory\Entities\Client','client_id','id'); 
    }
    public function projet_users(){
        return $this->belongsToMany('App\User');
    }
}
