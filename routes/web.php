<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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
//Route::get('/Index', 'Api\PagesController@registerIndex');
Route::get('/Main',[PagesController::class, 'Main']);
Route::get('/Home',[PagesController::class, 'Home']);
Route::get('/Service',[PagesController::class, 'Service']);
Route::get('/About',[PagesController::class, 'About']);
Route::get('/Contact',[PagesController::class, 'Contact']);
Route::get('/index',[PostsController::class, 'index']);
?>
