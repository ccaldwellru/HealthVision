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

Route::get('/', function () {
	return view('welcome');
});
//home page route(s)
Route::get('/home', 'HomeController@index')->name('home');
//workout page route(s)
Route::get('/absCore', 'WorkoutsController@viewAbsCore')->name('absCore');
Route::get('/arms', 'WorkoutsController@viewArms')->name('arms');
Route::get('/back', 'WorkoutsController@viewBack')->name('back');
Route::get('/cardio', 'WorkoutsController@viewCardio')->name('cardio');
Route::get('/legs', 'WorkoutsController@viewLegs')->name('legs');
Route::get('/routines', 'WorkoutsController@viewRoutines')->name('routines');
Route::get('/shoulders', 'WorkoutsController@viewShoulders')->name('shoulders');
Route::get('/workouts', 'WorkoutsController@viewWorkouts')->name('workouts');
Route::get('/yoga', 'WorkoutsController@viewYoga')->name('yoga');
//food page route(s)
Route::get('/breakfast', 'MealsController@viewBreakfast')->name('breakfast');
Route::get('/lunch', 'MealsController@viewLunch')->name('lunch');
Route::get('/dinner', 'MealsController@viewDinner')->name('dinner');
Route::get('/meals', 'MealsController@viewMeal')->name('meals');
Route::get('/diets', 'MealsController@viewDiets')->name('diets');
//user account route(s)
Auth::routes();
Route::get('/edit_account', 'AccountController@viewEditAccount')->name('edit_account');
Route::get('/progress', 'AccountController@viewProgress')->name('progress');
Route::get('/calories', 'AccountController@viewCalorieTracker')->name('calories');
//contact us route(s)
Route::get('/contact', 'HomeController@viewContactUs')->name('contact');