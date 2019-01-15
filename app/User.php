<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function role_users(){
        return $this->belongsToMany('Modules\Permission\Entities\Role','user_roles', 'user_id','role_id');
    }
    public function user_projet(){
        return $this->belongsToMany('Modules\Factory\Entities\Projet','projet_user', 'user_id','projet_id');
    }


   
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function isAdmin(){
    //     $this->role_users()->first()->cat->nom === 'Admin';
    // }
}
