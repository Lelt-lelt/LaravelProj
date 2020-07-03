<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cinema;
use App\Township;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cinemas = Cinema::all();
        return view('backend.cinema.index', compact('cinemas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $township = Township::all();
        return view('backend.cinema.create', compact('township'));
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
            'address'=>'required|max:191',
            'phone'=>'required|max:191',
            'tname'=>'required|max:191'
        ]);

        $cinema = new Cinema;
        $cinema->name = $request->name;
        $cinema->phone = $request->phone;
        $cinema->address = $request->address;
        $cinema->township_id = $request->tname;
        $cinema->save();

        return redirect()->route('cinemas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.cinema.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $township = Township::all();
        $cinema = Cinema::find($id);
        return view('backend.cinema.edit', compact('township','cinema'));
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
        // validation
        $request->validate([
            'name'=> 'required|max:191',
            'address'=>'required|max:191',
            'phone'=>'required|max:191',
            'tname'=>'required|max:191'
        ]);

        $cinema = Cinema::find($id);
        $cinema->name = $request->name;
        $cinema->phone = $request->phone;
        $cinema->address = $request->address;
        $cinema->township_id = $request->tname;
        $cinema->save();

        return redirect()->route('cinemas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cinema = Cinema::find($id);
        $cinema->delete();

        return redirect()->route('cinemas.index');
    }
}
