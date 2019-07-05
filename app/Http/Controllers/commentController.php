<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Movie;

class CommentController extends Controller
{
    //
    public function index(){
        return view('comment');
    }

    public function getComments(){
        $movies = Movie::all();
        $comments = Comment::paginate(6);
        // dd($comments);
        return view('comment',compact('comments','movies'));
    }

    public function store(Request $request){
        Comment::Create([
            'title'=>$request->title, 
            'isi'=>$request->comment, 
            'angka'=>$request->like,
            'movie_id' => $request->cat
        ]);
    }

}
