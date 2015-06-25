<?php

Route::get('/', ['as' => 'home_path', 'uses' => 'PagesController@index']);

Route::get('kolding', ['as' => 'kolding_path', 'uses' => 'PagesController@getKolding']);
Route::get('horsens', ['as' => 'horsens_path', 'uses' => 'PagesController@getHorsens']);
Route::get('kontakt',  ['as' => 'kontakt_path', 'uses' => 'PagesController@getKontakt']);

Route::get('nyheder', ['as' => 'nyheder_path', 'uses' => 'PagesController@index']);


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('admin/nyheder', ['as' => 'admin_post_index', 'uses' => 'PostController@index']);
Route::get('admin/nyheder/opret', ['as' => 'admin_post_create', 'uses' => 'PostController@create']);
Route::post('admin/nyheder/save', ['as' => 'admin_post_store', 'uses' => 'PostController@store']);






