<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Validator;
use App\Http\Requests\PostRequest;


class FormController extends Controller
{
    //
    public function index(){
        return view('form');
    }

    public function store(PostRequest $request){
        // $validator = Validator::make($request->all(),[
        //     'title' => 'required|min:5',
        //     'description' => 'required|max:100',
        //     'author' => 'required'
        // ]);


        // if($validator -> fails()){
        //     return back()->withErrors($validator)->withInput();
        //     //withErrors generate variable $errors
        // }
        
        //2. validate
        // $request->validate([
        //     'title' => 'required|min:5',
        //     'description' => 'required',
        //     'author' => 'required'
        // ]);

        //3. validate
        //  pake PostRequest

        //1. cara biasa
        // $post = new Post;
        // $post->title = $request ->title;
        // $post->description = $request ->description;
        // $post->author = $request->author;
        // $post->save();
        // echo "Success with eloquent";
        //2. cara query builder
        // DB::table('posts')->insert([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'author' => $request->author
        // ]);
        //3. cara elonquent
        

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author
        ]);

            return redirect('/posts')->with('success','Success input Movie Data') ;
    }
}
