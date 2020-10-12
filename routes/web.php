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

Route::get('/', 'HomeController@index')->name('home');
Route::post('/search-offices', 'Backend\APIController@searchOfficesAction')->name('search_offices');

Route::middleware(['auth:sanctum', 'verified', 'is_admin'])->get('/admin', 'Backend\MainController@index')->name('admin');

Route::middleware(['is_admin'])->post('/clear-db','Backend\APIController@clearDBAction')->name('clear_db');
Route::middleware(['is_admin'])->post('/upload-regions','Backend\APIController@uploadReqionsAction')->name('upload_regions');
Route::middleware(['is_admin'])->post('/upload-offices','Backend\APIController@uploadOfficesAction')->name('upload_offices');