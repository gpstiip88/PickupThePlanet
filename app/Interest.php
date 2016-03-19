<?php namespace App;
   
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = [
		'name',
		'description',
	];

	public function events(){
        return $this->belongsToMany('App\Event');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }
}