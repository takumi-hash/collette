<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Post;
use App\User;

class PostController extends Controller
{
    public function getAllPosts()
    {
        $posts = Post::with('user')->orderBy('created_at', 'desc')->get();
        return $posts;
    }

    public function getFollowingPosts()
    {
        $posts = Auth::user()->feed_posts()->with('user')->orderBy('created_at', 'desc')->get();
        return $posts;
    }

    public function getPost($id)
    {
        $post = Post::find($id);
        $user = User::find($post->user_id);

        $data = [
            'user' => $user,
            'post' => $post,
        ];
        return view('post.show', $data);
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
        //$posts= Post::with('user')->orderBy('created_at', 'desc')->get();
        //return $posts;
        return redirect()->back();
    }
}
