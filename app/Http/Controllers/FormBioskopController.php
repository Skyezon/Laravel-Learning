<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BioskopRequest;
use App\Models\Bioskop;

class FormBioskopController extends Controller
{
    public function show(){
        return view('form-bioskop');
    }

    public function store(BioskopRequest $request){
        Bioskop::create([
            'nama'=>$request->nama,
            'lokasi'=>$request->lokasi
        ]);
    }

    public function update($id, BioskopRequest $request){
        Movie::findOrFail($id)->update([
            'nama' => $request->nama,
            'lokasi' => $request->lokasi 
        ]);
        return redirect('/bioskop')->with('success','bioskop successfully updated');
    }
}
