<?php

namespace Modules\Permission\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}