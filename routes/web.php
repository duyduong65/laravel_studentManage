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
Route::prefix('students')->group(function () {
    Route::get("show-list", "StudentController@getAll")->name("student.getAll");
    Route::get("create", "StudentController@create")->name("student.formCreate");
    Route::post("create", "StudentController@store")->name("student.create");
    Route::get("delete/{id}", "StudentController@delete")->name("student.delete");
    Route::get("edit/{id}", "StudentController@edit")->name("student.edit");
    Route::post("edit/{id}", "StudentController@update")->name("student.edit");
});

