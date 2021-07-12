<?php

Route::get('/', 'PostController@index')->name('home');
Route::get('/article/{slag}', 'PostController@show')->name('posts.single');
Route::get('/category/{slag}', 'CategoryController@show')->name('categories.single');
Route::get('/tags/{slag}', 'TagsController@show')->name('tags.single');
Route::get('/search', 'SearchController@index')->name('search');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function(){
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', 'TagController');
    Route::resource('/posts', 'PostController');
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');
});

Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');



