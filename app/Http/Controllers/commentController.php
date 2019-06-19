<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class commentController extends Controller
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
}
