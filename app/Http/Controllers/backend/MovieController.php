<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movie::all();
        return view('backend.movie.index',compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.movie.create');
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
            'name'=> 'required|max:191',
            //'photo'=> 'required|mimes:jpeg,bmp,png,jpg'
            'actor'=> 'required|max:191',
            'runtime'=>'required|max:191',
            'description' => 'required|min:5',
            'rating' => 'required'
        ]);
        //file upload
        //$imageName = time().'.'.$request->photo->extension();

        //$request->photo->move(public_path('images'),$imageName);

        //$filepath = 'images/'.$imageName;

        //data insert
        $movie = new Movie;
        $movie->name = $request->name;
        //$movie->photo = $filepath;
        $movie->actor =$request->actor;
        $movie->description = $request->description;
        $movie->rating = $request->rating;
        $movie->runtime = $request->runtime;
        $movie->save();

        //return
        return redirect()->route('movies.index');
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
        $movie = Movie::find($id);
        return view('backend.movie.edit',compact('movie'));
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
            'name'=> 'required|min:5|max:191',
            //'photo'=> 'sometimes|mimes:jpeg,bmp,png,jpg'
             'actor'=> 'required|max:191',
            'runtime'=>'required|max:191',
            'description' => 'required|min:5',
            'rating' => 'required'
        ]);
        //file upload
        //if($request->hasFile('photo')){
            //File::delete($request->oldphoto);
        //$imageName = time().'.'.$request->photo->extension();

        //$request->photo->move(public_path('images'),$imageName);

       // $filepath = 'images/'.$imageName;
   // }else{
       // $filepath = $request->oldphoto;
    //}

        //data update

        $movie = movie::find($id);
        //$movie->photo = $filepath;

        //data insert
        $movie->name = $request->name;
        $movie->actor =$request->actor;
        $movie->description = $request->description;
        $movie->rating = $request->rating;
        $movie->runtime = $request->runtime;
        $movie->save();

        //return
        return redirect()->route('movies.index');
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
        $movie = Movie::find($id);
        $movie->delete();

        return redirect()->route('movies.index');
    }
}
