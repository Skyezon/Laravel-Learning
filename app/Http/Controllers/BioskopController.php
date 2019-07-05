<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bioskop;

use App\Models\Movie;

class BioskopController extends Controller
{
    public function getBioskop(){
        $bioskops = Bioskop::paginate(6);
        $movies = Movie::all();
        return view('bioskop',compact('bioskops','movies'));
    }

    public function delete($id){
        Bioskop::destroy($id);
        return back()->with('success','Sucess delete bioskop data');
    }

    public function edit($id){
        $bioskop= Bioskop::findOrFail($id);
        return view('edit-bioskop',compact('bioskop'));
    }
}
