<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests\MovieRequest;
use Carbon\Carbon;

class MovieController extends Controller
{
    public function getMovies(){
        $movies = Movie::paginate(6);
        return view('movie',compact('movies'));
    }

    public function edit($id){
   
        $movie = Movie::FindOrFail($id);
        return view('edit-movie',compact('movie'));
    }

    public function update(MovieRequest $request,$id){
        $dir = 'movies/thumbnails';
        $file = $request->file('pic');
        $filename = (strtotime(Carbon::now()) * 1000). '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/'.$dir, $filename);

        Movie::FindOrFail($id)->update([
            'title' => $request->title,
            'sinopsis' => $request->sinopsis,
            'director' => $request->director,
            'date' => Carbon::parse($request->date),
            'image' => $dir.'/'.$filename
        ]);
        return redirect('/movie')->with('success','Image succesfully updated');        
    }

    public function delete($id){
        Movie::destroy($id);
        return back()->with('success','Sucess delete movie data');
    }
}
