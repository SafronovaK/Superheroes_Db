<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HeroController@showAll');
Route::get('/hero/{id}/info', 'HeroController@showOne');
Route::get('hero/add/', 'HeroController@addNew');
Route::post('save', 'HeroController@save');
Route::get('hero/success', 'HeroController@heroAdded');
Route::get('hero/changed/', 'HeroController@heroChanged');
Route::get('hero/{id}/edit', 'HeroController@edit');
Route::put('hero/{id}/update', ['uses' => 'HeroController@update', 'as'=> 'hero.update']);

Route::delete('hero/{id}/delete', [ 'uses' => 'HeroController@delete', 'as'=> 'hero.delete' ] );

