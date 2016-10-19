<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\support\Facades\Auth;

use App\Post;

class PostController extends Controller
{
    public function postCreatePost(Request $request)
    {
	    $this->validate($request,[
		    'body'=> 'required|max:1000'
	    ]);
	    $post = new Post();
	    $post->body = $request['body'];
	    $message = 'there was an error';
	    if ($request->user()->posts()->save($post))
	    {
		    $message = 'Planning created';
	    }
	    return redirect(url('/'))->with(['message'=>$message]);
    }
}
