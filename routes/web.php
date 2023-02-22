<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//controller index
Route::get('/', [PageController::class, 'index']);

//controller about
Route::get('/about', [PageController::class, 'about']);

//controller id
Route::get('/articles/{id}', [PageController::class, 'articles']);