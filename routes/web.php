<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Helper\helpers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::get('/participation', [PostController::class, 'participation'])->name('participation');
    Route::get('/posts', [PostController::class, 'participation'])->name('participation.index');
    Route::get('/posts/event/{group}', [PostController::class, 'event']);
    Route::get('/posts/{group}', [PostController::class ,'show']);
    Route::get('/posts/{event}/show', [PostController::class ,'event_show']);
    Route::get('/posts/{event}/event_detail', [PostController::class, 'event_detail_show'])->name('events_detail.show');
    Route::post('/groups', [PostController::class, 'store']);
    Route::post('/posts/event/{group}/save', [PostController::class, 'save']);
    Route::post('/posts', [PostController::class, 'join'])->name('participation.join');
    Route::delete('/posts/show/{event}/delete', [PostController::class, 'delete'])->name('posts.delete');
});


//消さない！
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    