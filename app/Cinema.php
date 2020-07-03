<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cinema extends Model
{
	use SoftDeletes;

	protected $fillable = ['name','address','phone','township_id'];

	// public function township()
	// {
	// 	return $this->belongsTo('App\Township');
	// }
}
