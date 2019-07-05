<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\Bioskop;

class FormMovieController extends Controller
{
    public function store(MovieRequest $request)
    {
        $file = $request->file('pic');
        $filename = (strtotime(Carbon::now()) * 1000). '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $dir = 'movies/thumbnails';
        $file->storeAs('public/'.$dir, $filename);

        Movie::create([
            'title' => $request->title,
            'sinopsis' => $request->sinopsis,
            'director' => $request->director,
            'date' => Carbon::parse($request->date),
            'image' => $dir.'/'.$filename
        ]);
        return redirect('/movie')->with('success','Image succesfully stored');
    }

    public function index()
    {
        $bioskops = Bioskop::all();
        return view('form-movie','bioskops');
    }

}
