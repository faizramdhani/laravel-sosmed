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

Route::get(uri: '/dashboard', action: \App\Http\Controllers\TimelineController::class)
    ->middleware(['auth'])->name(name: 'dashboard');


Route::post(uri: 'post', action: \App\Http\Controllers\Post\SosmedPostController::class)->name(name: 'post.sosmed');
Route::get(uri: 'post/{post}', action: \App\Http\Controllers\Post\ShowPostController::class)->name(name: 'post.show');

require __DIR__ . '/auth.php';
