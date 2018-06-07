<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
	public function index() {

		$post_ = Post::orderBy('id', 'DESC')->paginate();

		return view('post.show', compact('post_'));
	}

	public function show($id) {
		$post = Post::find($id);
		return view('post.item',compact('post'));
	} 

	public function destroy($id) {
		$post = Post::find($id);
		$post -> delete();
		return back()->with('info','El producto fue eliminado'); 
	}

	public function edit($id) {
		$post = Post::find($id);
		return view('post.edit',compact('post'));
	}

	public function create() {
	
		return view('post.create');
	}
}
