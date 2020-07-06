<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Township extends Model
{

    use SoftDeletes;
    protected $fillable=[
    	'name'
    ];
    public function city(){
    	return $this->belongsTo('App\City');
    }

    public function cinema(){
    	return $this->hasMany('App\Cinema');
    }
}
