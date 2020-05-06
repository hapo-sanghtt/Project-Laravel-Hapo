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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('members', 'MemberController')->middleware('auth');
Route::resource('customers', 'CustomerController');
Route::resource('projects', 'ProjectController');
Route::resource('tasks', 'TaskController');

//Route::get('/members/{id}/edit', 'MemberController@edit');
//Route::patch('/members/{id}', 'MemberController@update');
//Route::patch('/customers/index', 'MemberController@index');

Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::get('/auth/register', 'Auth\RegisterController@showRegisterForm');

Route::post('/auth/login', 'Auth\LoginController@login');
Route::post('/auth/register', 'Auth\RegisterController@register');
