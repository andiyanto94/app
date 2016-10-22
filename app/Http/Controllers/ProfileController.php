<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use DB;

use App\User;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		//$posts = DB::table('posts') ->where('user_id',auth()->id())->get();

		$posts = Post::orderBy('created_at','desc')->where('user_id',auth()->id())->get();

		//return view('dashboard', [
		//	'posts' => $posts
		//]);

		return view('profile', [
			'posts' => $posts
		]);
	}
	public function show($id) {

		return view('showprofile', ['user' => User::findOrFail($id)]);
	}
}