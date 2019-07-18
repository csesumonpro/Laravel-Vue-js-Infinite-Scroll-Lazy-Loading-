<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class PostController extends Controller
{
    public function get_all_post(){
        $posts = Post::latest()->paginate(10);
      return response()->json($posts,200);
    }
	public function all_user(){
		  $users = User::latest()->paginate(10);
		  return view('user',compact('users'));
	}
	public function all_user_serach(Request $request){
		  $users = User::search($request->keyword)->paginate(10);
		  return view('user',compact('users'));
	}
}
