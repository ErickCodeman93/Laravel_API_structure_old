<?php

Route::get('/', function () {
	return view('post.login'); 
} );

Route::resource('post', 'PostsController');

Route::get('/dashboard', function () { 
	return view('post.dashboard');
} );