<?php

Route::get('/', 'HomeController@getIndex');

Route::get('/admin/post/create', 'PostController@getCreate');

Route::post('/admin/post/create', 'PostController@postCreate');

