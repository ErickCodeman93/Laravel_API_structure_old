<?php

Route::get('/', function () {
	return view('post.index'); 
} );

Route::resource('post', 'PostsController');

Route::get('/dashboard', function () { 
	return view('post.dashboard');
} );