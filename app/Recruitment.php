<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    //
	protected $table = 'recruitment';
	public function cv(){
		return $this->belongsTo('App\Cv','cv_id','id');
	}
	public function post(){
		return $this->belongsTo('App\Post','post_id','id');
	}
}
