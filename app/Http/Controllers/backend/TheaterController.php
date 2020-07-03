<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Theater;
use App\Cinema;

class TheaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theaters = Theater::all();
        return view('backend.theater.index',compact('theaters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cinema = Cinema::all();
        return view('backend.theater.create', compact('cinema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|max:191',
            'max'=>'required|max:191',
            'screen'=>'required|max:191',
            'cname'=>'required|max:191'
        ]);

        $theater = new Theater;
        $theater->name = $request->name;
        $theater->max_no_of_seat = $request->max;
        $theater->screen_size = $request->screen;
        $theater->cinema_id = $request->cname;
        $theater->save();

        return redirect()->route('theaters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.theater.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cinema = Cinema::all();
        $theater = Theater::find($id);
        return view('backend.theater.edit', compact('cinema','theater'));
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
        $request->validate([
            'name'=> 'required|max:191',
            'max'=>'required|max:191',
            'screen'=>'required|max:191',
            'cname'=>'required|max:191'
        ]);

        $theater = Theater::find($id);
        $theater->name = $request->name;
        $theater->max_no_of_seat = $request->max;
        $theater->screen_size = $request->screen;
        $theater->cinema_id = $request->cname;
        $theater->save();

        return redirect()->route('theaters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theater = Theater::find($id);
        $theater->delete();

        return redirect()->route('theaters.index');
    }
}
