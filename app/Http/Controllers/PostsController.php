<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;


class PostsController extends Controller
{
	public function index() {
/*
		$post_ = Post::orderBy('id', 'DESC')->paginate();

		return view('post.show', compact('post_'));*/

		return [
			"code"		=>	200,
			"data"		=>	Post::orderBy('id', 'DESC')->get(),
			"message"	=>	"Successful operation.",
			"status"	=>	"success",
		];
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

	public function store(PostRequest $request) {

		$post = new Post;

		$post -> name 	= $request-> name;
		$post -> short 	= $request-> short;
		$post -> body 	= $request-> body;

		$post -> save();

		return redirect()	->route('post.index')
							->with('info','El producto fue guardado'); 
	}

	public function update(PostRequest $request, $id) {

		$post = Post::find($id);

		$post -> name 	= $request-> name;
		$post -> short 	= $request-> short;
		$post -> body 	= $request-> body;

		$post -> save();

		return redirect()	->route('post.index')
							->with('info','El producto fue actualizado'); 
	}
}
