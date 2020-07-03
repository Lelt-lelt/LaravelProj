<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Township;
use App\City;

class TownshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $township = Township::all();
        return view('backend.township.index',compact('township'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $city = City::all();
        return view('backend.township.create',compact('city'));

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
            'name'=> 'required|min:5|max:191',
            
        ]);
       
        $township = new Township;
        $township->name = $request->name;
        $township->city_id =$request->city;
        $township->save();

        //return
        return redirect()->route('townships.index');
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
        $city = City::all();
         $township = Township::find($id);
        return view('backend.township.edit',compact('township','city'));
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
            'name' => 'required|max:191',
            'city' => 'required|max:191'
        ]);

        $township = Township::find($id);
        $township->name = $request->name;
        $township->city_id = $request->city;

        $township->save();
        return redirect()->route('townships.index');
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
        $township = Township::find($id);
        $township->delete();

        return redirect()->route('townships.index');
    }
}
