<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Theater extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','max_no_of_seat','screen_size','cinema_id'];

    public function cinema(){
    	return $this->belongsTo('App\Cinema');
    }

    public function showtime(){
    	return $this->hasMany('App\Showtime');
    }
}
