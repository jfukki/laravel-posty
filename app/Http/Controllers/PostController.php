<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');

        return view('posts.index', ['posts'=>$posts]);
    }

    public function store(Request $req)
    {
        $this->validate($req,[
            'postBody' => 'required',
        ]);

        Post::create([
            'body' => $req->postBody,
            'user_id' => auth()->user()->id,
        ]);
        
        // return redirect()->route('dashboard');
        return back();
    }
}
