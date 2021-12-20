<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MovieController;

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

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies.create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies.{id}.edit', [MovieController::class, 'edit']);
Route::post('/movies.edit', [MovieController::class, 'update']);
Route::get('/delete.{id}', [MovieController::class, 'destroy']);
