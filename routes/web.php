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

Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/search', 'HomeController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/breakfast', 'HomeController@breakfast')->name('Breakfast');
Route::get('/meat', 'HomeController@meat')->name('Meat');
Route::get('/seafood', 'HomeController@seafood')->name('Seafood');
Route::get('/snackst', 'HomeController@snacks')->name('Snacks');
Route::get('/desserts', 'HomeController@desserts')->name('Desserts');
Route::get('/vegetarian', 'HomeController@vegetarian')->name('Vegetarian');

Route::get('/categories', 'CategoryController@index')->name('all.categories');
Route::get('/categories/create', 'CategoryController@create')->name('create.category');
Route::delete('/categories/{category}', 'CategoryController@destroy')->name('category.delete');
Route::post('/categories', 'CategoryController@store')->name('store.category');

Route::get('/recipe/{id}', 'RecipeController@show')->name('one.recipe');
Route::get('/recipes', 'RecipeController@index')->name('all.recipes');
Route::get('/recipes/create', 'RecipeController@create')->name('create.recipe');
