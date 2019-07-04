<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function get_all_post(){
        $posts = Post::latest()->paginate(10);
      return response()->json($posts,200);
    }
}
