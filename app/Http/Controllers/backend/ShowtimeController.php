<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Showtime;
use App\Theater;
use App\Run_date;

class ShowtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $showtime = Showtime::all();
        return view('backend.showtime.index',compact('showtime'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $theater = Theater::all();
        $rundate = Run_date::all();
        return view('backend.showtime.create',compact('theater','rundate'));

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
            'showtime'=> 'required',
            'noofseat' => 'required',

        ]);
        $showtime = new Showtime;
        $showtime->showtime = $request->showtime;
        $showtime->no_of_seat = $request->noofseat;
        $showtime->theater_id = $request->theater;
        $showtime->run_date_id = $request->rundate;

        $showtime->save();
        return redirect()->route('showtimes.index');
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
        $theater = Theater::all();
        $rundate = Run_date::all();
        $showtime = Showtime::find($id);

        return view('backend.showtime.edit',compact('showtime','theater','rundate'));
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
            'showtime'=> 'required',
            'noofseat' => 'required',

        ]);
        $showtime = Showtime::find($id);
        $showtime->showtime = $request->showtime;
        $showtime->no_of_seat = $request->noofseat;
        $showtime->theater_id = $request->theater;
        $showtime->run_date_id = $request->rundate;

        $showtime->save();
        return redirect()->route('showtimes.index');
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
        $showtime = Showtime::find($id);
        $showtime->delete();

        return redirect()->round('showtimes.index');
    }
}
