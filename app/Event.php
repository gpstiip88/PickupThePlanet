<?php namespace App;
   
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
		'title',
		'description',
		'city',
		'date',
		'user_id',
	];

	public function users(){
        return $this->belongsToMany('App\User');
    }

    public function interests(){
        return $this->belongsToMany('App\Interest');
    }

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
}