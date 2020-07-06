<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Showtime extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
    	'showtime','no_of_seat',
    ];

    public function theater(){
    	return $this->belongsTo('App\Theater');
    }

    public function run_date(){
    	return $this->belongsTo('App\Run_date');
    }
}
