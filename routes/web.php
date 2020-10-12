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

// Route::get('/', function () {
//     return view('home');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', 'HomeController@index')->name('home');

Route::post('/search-offices', 'Backend\APIController@searchOfficesAction')->name('search_offices');

Route::middleware(['auth:sanctum', 'verified', 'is_admin'])->get('/admin', 'Backend\MainController@index')->name('admin');

//Route::post('/logged_in', [LoginController::class, 'authenticate'])->name('log-in');

//Route::post('/login', 'LoginController@authenticate')->name('signin');


Route::middleware(['is_admin'])->post('/clear-db','Backend\APIController@clearDBAction')->name('clear_db');
Route::middleware(['is_admin'])->post('/upload-regions','Backend\APIController@uploadReqionsAction')->name('upload_regions');
Route::middleware(['is_admin'])->post('/upload-offices','Backend\APIController@uploadOfficesAction')->name('upload_offices');