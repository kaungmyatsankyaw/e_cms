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

Route::get('/', 'Auth\LoginController@loginUi');


Route::post('/login', 'Auth\LoginController@login');

Route::get('/role/test', 'Auth\RoleController@index');

Route::get('/dashboard', 'Page\IndexController@index')->middleware(['checkAuth', 'checkRole']);

Route::group(['middleware' => ['checkAuth', 'checkRole', 'checkPermission']], function () {
    Route::get('/shops', 'Shop\IndexController@index');
});

Route::get('/logout', function () {
    \Auth::logout();
    return redirect('/');
})->name('logout');