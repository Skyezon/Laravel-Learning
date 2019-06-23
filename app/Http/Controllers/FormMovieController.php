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
        dd($request->file('pic')->storeAs('public/'.$dir, $filename));
        $path = $request->file('pic')->storeAs('public/'.$dir, $filename);
        dd($path);

        Movie::create([
            'title' => $request->title,
            'sinopsis' => $request->sinopsis,
            'director' => $request->director,
            'date' => $request->date,
            'image' => $request->pic,
        ]);
        return redirect('/movie')->with('success', 'Success input Post Data');
    }

    public function index()
    {
        return view('form-movie');
    }

}
