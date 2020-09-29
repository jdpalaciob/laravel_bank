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

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/clients', 'ClientController');

// Route::resource('/accounts', 'AccountController')->middleware('auth');

Auth::routes();

// Route::get('/logout', function() {
//     Auth::logout();
//     return Redirect::route('login');
//     })->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
    Route::resource('/clients', 'ClientController');
    Route::resource('/accounts', 'AccountController');
});
