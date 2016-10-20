<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        return view('dashboard', [
            'posts' => $posts
        ]);
    }
    public function pending()
    {
	    $pendings = DB::table('posts') ->whereColumn(
	    	[
	    		['status', '=', 'pending'],
			    ['confirmed', '=', 'unconfirmed']
		    ])->get();
    	return view('includes/pending');
    }
}