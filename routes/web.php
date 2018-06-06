<?php

Route::get('/', 'PostsController@index');

Route::get('/post/show', 'PostsController@show');