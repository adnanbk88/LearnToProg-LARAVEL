<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'CourseController@home');
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/privacy-policy', function () {
    return view('privacy');
});
Route::get('/course/{slug}', 'CourseController@index');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/create', 'AdminController@create');
Route::post('/create', 'AdminController@store');
Route::get('/admin/{id}/edite', 'AdminController@edite');
Route::put('/admin/edite/{id}', 'AdminController@update');
Route::get('/admin/delete', 'AdminController@delete');
Route::delete('/admin/course/{id}', 'AdminController@destroy');


Route::get('/admin/logout', 'AdminController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
