<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Notes\NotesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/notes/{slug}', [NotesController::class, 'show'])->name('notes.slug');
Route::get('/note/create', [NotesController::class, 'create'])->name('note.create');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/profile', function () {
    return view('profile.index');
});



