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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//impersonation
Route::get('users/{id}/impersonate', function ($id) {
    \Auth::user()->setImpersonating($id);
    return redirect()->back();
});
Route::get('users/stop-impersonate', function () {
    \Auth::user()->stopImpersonating();
    return redirect()->back();
});
