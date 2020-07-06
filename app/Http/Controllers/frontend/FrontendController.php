<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Township;
use App\Cinema;
use App\Movie;

class FrontendController extends Controller
{
    public function index($value='')
    {
    	$townships = Township::all();
    	$cinemas = Cinema::all();
    	return view('frontend.index', compact('townships','cinemas'));
    }

}
