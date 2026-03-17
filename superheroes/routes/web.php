<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('superheroes', 'SuperheroController');
Route::get('superheroes', 'SuperheroController@index')->name('superheroes.index');
Route::post('superheroes', 'SuperheroController@store')->name('superheroes.store');
Route::post('superheroes/create', 'SuperheroController@create')->name('superheroes.create');
Route::get('superheroes/{id}', 'SuperheroController@show')->name('superheroes.show');
Route::get('superheroes/{id}/edit', 'SuperheroController@edit')->name('superheroes.edit');
Route::patch('superheroes/{id}', 'SuperheroController@update')->name('superheroes.update');
Route::delete('superheroes/{id}', 'SuperheroController@destroy')->name('superheroes.destroy');