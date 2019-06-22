<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Carbon\Carbon;

class FormMovieController extends Controller
{
    //
    public function store(MovieRequest $request){

        if (!File::isDirectory($this->path)) {
            File::makeDirectory($this->path);
        }else{

        }
        $file = $request->file('pic');

        $filename = Carbon::now()timestamp.'_'.uniqid().'.'.$file->getClientOriginalExtension();



            Movie::create([
                'title'=>$request->title,
                'sinopsis'=>$request->sinopsis,
                'director'=>$request->director,
                'date'=>$request->date,
                'image'=>$request->pic
            ]);
            return redirect('/movie')->with('success','Success input Post Data') ;
    }

    public function index(){

        return view('form-movie');
    }

}
