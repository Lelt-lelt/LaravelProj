<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Run_date;
use App\Cinema;
use App\Movie;

class Run_dateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rundates =Run_date::all();
        return view('backend.rundate.index',compact('rundates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cinema = Cinema::all();
        $movie = Movie::all();
        return view('backend.rundate.create',compact('cinema','movie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'startingdate'=> 'required',
            'enddate' => 'required',   
        ]);
       
        $rundate = new Run_date;
        $rundate->starting_date = $request->startingdate;
        $rundate->end_date = $request->enddate;
        $rundate->cinema_id = $request->cinema;
        $rundate->movie_id = $request->movie; 
        $rundate->save();

        //return
        return redirect()->route('rundates.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cinema = Cinema::all();
        $movie = Movie::all();
        $rundate = Run_date::find($id);
        return view('backend.rundate.edit',compact('rundate','cinema','movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'startingdate'=> 'required',
            'enddate' => 'required',  
        ]);

         $rundate = Run_date::find($id);
        $rundate->starting_date = $request->startingdate;
        $rundate->end_date = $request->enddate;
        $rundate->cinema_id = $request->cinema;
        $rundate->movie_id = $request->movie; 
        $rundate->save();
        return redirect()->route('rundates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $rundate = Run_date::find($id);
        $rundate->delete();

        return redirect()->route('rundate.index');
    }
}
