<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
    	'name','run_time','actor','description','rating'
    ];

    public function rundate(){
    	return $this->hasMany('App\Rundate');
    }
}
