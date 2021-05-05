<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //getPosts
    public function getPosts()
    {
        $posts= Post::with('user')->orderBy('created_at', 'desc')->get();
        return $posts;
    }

    //addPost
    public function addPost(Request $request)
    {
        $post = new Post;
        $post->user_id = $request->user()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        $posts= Post::with('user')->orderBy('created_at', 'desc')->get();
        return $posts;
    }

    //delete
    public function deletePost(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        $posts= Post::with('user')->orderBy('created_at', 'desc')->get();
        return $posts;
    }
}
