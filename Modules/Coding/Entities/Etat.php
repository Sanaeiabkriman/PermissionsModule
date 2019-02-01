<?php

namespace Modules\Coding\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etat extends Model
{
    use SoftDeletes;
    protected $fillable = [];
}
