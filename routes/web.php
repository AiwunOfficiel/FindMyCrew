<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

// TODO: Ajouter une redirection pour le / vers le /home
Route::get('/home', 'HomeController@index')->name('home');

// Route ADMIN
Route::group(['prefix' => 'admin'], function() {
    Route::get('/');
});

// Message Route 
Route::group(['prefix' => 'messages'], function() {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'message.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});

// Logout système de base
Route::get('logout', 'Auth\LoginController@logout')->name('logout');