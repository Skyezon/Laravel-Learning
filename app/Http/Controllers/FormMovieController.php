<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class FormMovieController extends Controller
{
    public function store(MovieRequest $request)
    {
        $file = $request->file('pic');
        $filename = Carbon::now()->toIso8601String() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $dir = 'movies/thumbnails';
        // dd($request->file('pic')->storeAs('public/'.$dir, $filename));
        // $path = $request->file('pic')->storeAs('public/'.$dir, $filename);
        // dd($path);
        // dd($file);
        // dd($request->file('pic')->storeAs('public/tempatfoto',$filename));
        Storage::put('public/'.$dir, $file);
        // dd(Storage::disk('local')->put($filename,$file));
        
        Movie::create([
            'title' => $request->title,
            'sinopsis' => $request->sinopsis,
            'director' => $request->director,
            'date' => $request->date,
            'image' => 'public/'.$dir.'/'.$filename
        ]);
        return redirect('/movie')->with('success','Image succesfully stored');
    }

    public function index()
    {
        return view('form-movie');
    }

}
