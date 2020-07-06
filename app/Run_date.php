<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Run_date extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
    	'starting_date','end_date'
    ];

    public function cinema(){
    	return $this->belongsTo('App\Cinema');
    }

    public function showtime(){
    	return $this->hasMany('App\Showtime');
    }

    public function movie(){
    	return $this->belongsTo('App\Movie');
    }
}
