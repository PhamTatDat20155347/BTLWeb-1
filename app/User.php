<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function cv(){
        return $this->hasOne('App\Cv','users_id','id');
    }
    public function recruitment(){
        return $this->hasManyThrough('App\Recruitment','App\Cv','users_id','cv_id','id');
    }
    public function post(){
        return $this->hasMany('App\Post','users_id','id');
    }
    public function recruitmentNTD(){
        return $this->hasManyThrough('app\Recruitment','App\Post','users_id','post_id','id');
    }
}
