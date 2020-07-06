<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;

	protected $fillable = ['name'];

	public function township(){
		return $this->hasMany('App\Township');
	}
}
