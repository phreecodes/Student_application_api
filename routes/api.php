<?php

use Illuminate\Http\Request;

Use App\Student;
Use App\Articles;
 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('articles', 'ArticleController@index');
Route::get('articles/{id}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{id}', 'ArticleController@update');
Route::delete('articles/{id}', 'ArticleController@delete');
Route::post('register', 'Auth\RegisterController@registered');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::get('students', 'StudentsController@index');
Route::get('students/{id}', 'StudentsController@show');
Route::put('students/{id}', 'StudentsController@update');
Route::post('students', 'StudentsController@store');
Route::delete('students/{id}', 'StudentsController@delete');