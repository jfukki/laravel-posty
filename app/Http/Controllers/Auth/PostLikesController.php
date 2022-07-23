<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Like;
use App\Models\User;


class PostLikesController extends Controller
{
    public function __construct()
    {
    $this->middleware(['auth']);
    }

    public function store(Post $post, Request $req)
    {
            
        if($post->likedBy($req->user())){

        }

        $post->likes()->create([
            'user_id' => $req->user()->id,
        ]);

        return back();

    }


    public function destroy(Post $post, Request $req)
    {
        
        $req->user()->likes()->where('post_id', $post->id)->delete();

        return back();
    }
}
