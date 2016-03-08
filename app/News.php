<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

	protected $table = 'news';
	protected $fillable = ['id', 'name','user_id'];	
	// public $timestamps = false;
	public function images(){
		return $this->hasMany('App\Images','new_id');
	}
	public function test($id){
		return News::findOrFail($id)->toArray();
	}

}
