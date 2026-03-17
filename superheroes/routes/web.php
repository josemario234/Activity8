<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('superheroes', 'SuperheroeController');
Route::get('superheroes', 'SuperheroeController@index')->name('superheroes.index');
Route::post('superheroes', 'SuperheroeController@store')->name('superheroes.store');
Route::post('superheroes/create', 'SuperheroeController@create')->name('superheroes.create');
Route::get('superheroes/{id}', 'SuperheroeController@show')->name('superheroes.show');
Route::get('superheroes/{id}/edit', 'SuperheroeController@edit')->name('superheroes.edit');
Route::patch('superheroes/{id}', 'SuperheroeController@update')->name('superheroes.update');
Route::delete('superheroes/{id}', 'SuperheroeController@destroy')->name('superheroes.destroy');