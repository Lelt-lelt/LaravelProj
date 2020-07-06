<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;
use App\Township;
use App\Movie;
use App\Cinema;
use App\Run_date;
use App\Theater;


class FrontendController extends Controller
{
    //
    public function index(){
    	$city = City::all();
    	$township = Township::all();
    	$cinema = Cinema::all();
    	$movie = Movie::all();
    	$rundate = Run_date::all();

    	return view('frontend.index',compact('city','township','cinema','movie','rundate'));
    }

    public function booking($id){

    	$rundate = Run_date::find($id);
    	return view('frontend.booking',compact('rundate'));
    }

    public function cinema(){
    	$cinemas= Cinema::all();
    	//dd($cinema);
    	return view('frontend.cinema',compact('cinemas'));
    }

    public function theater($id){
    	$theater = Theater::where('cinema_id','=',$id)->get();
    	return view('frontend.theater',compact('theater'));

    }
}
