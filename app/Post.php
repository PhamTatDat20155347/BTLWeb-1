<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
	protected $table = "post";

	public function user(){
		return $this->belongsTo('App\User','users_id','id');
	}
	public function recruitment(){
		return $this->hasMany('App\Recruitment','post_id','id');
	}
	public function category(){
		return $this->belongsTo('App\Category','category_id','id');
	}
}
