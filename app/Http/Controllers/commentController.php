<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //
    public function index(){
        return view('comment');
    }

    public function getComments(){
        $comments = Comment::paginate(6);
        // dd($comments);
        return view('comment',compact('comments'));
    }

    public function add(Request $request){
        
    }
}
