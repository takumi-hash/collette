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
}
