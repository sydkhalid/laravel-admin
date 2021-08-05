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
Route::get('/clear-cache', function () {
    $commands = Artisan::call('cache:clear');
    $commands = Artisan::call('config:clear');
    $commands = Artisan::call('view:clear');
    $commands = Artisan::call('config:cache');
});

Route::group(['middleware' => ['installer']], function () {
    Route::group(['prefix' => 'admin' , 'namespace' => 'Admin' ], function () {
        Route::get('/login', 'LoginController@login');
        Route::post('verifylogin', 'LoginController@verifyLogin');
        Route::get('/dashboard', 'LoginController@dashboard');
        Route::get('/logout', 'LoginController@logout');
        //administration
        Route::get('/admins', 'AdminController@index');
        Route::get('/addadmins', 'AdminController@addAdmin');
        Route::resource('menus', MenuController::class);
        //consent
        Route::resource('settings', SettingController::class);
    });
});

