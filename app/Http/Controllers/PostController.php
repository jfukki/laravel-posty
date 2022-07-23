<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
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
