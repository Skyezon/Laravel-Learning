<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class WelcomeController extends Controller
{
    public function index(){
        // dd($request->testing);
        return view('welcome');
    }

    public function getPosts(){
        $posts = Post::paginate(6);
        // dd($posts);
        return view('post', compact('posts'));
    }
}
