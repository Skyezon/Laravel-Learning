<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    public function getMovies(){
        $movies = Movie::paginate(6);
        return view('movie',compact('movies'));
    }
}
