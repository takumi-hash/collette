<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //getPosts
    public function getPosts()
    {
      $posts = Post::all();
      return $posts;
    }

    //addPost
    public function addPost(Request $request)
    {
      $post = new Post;
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      $posts= Post::all();
      return $posts;
    }

    //delete
    public function deletePost(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        $posts = Post::all();
        return $posts;
    }
}
