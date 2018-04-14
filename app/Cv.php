<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    //
	protected $table = 'cv';
	public  function user(){
		return $this->belongsTo('App\User','users_id','id');
	}
	public function recruitment(){
		return $this->hasMany('App\Recruitment','cv_id','id');
	}
}
