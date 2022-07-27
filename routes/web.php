<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\UserController;
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
    return view('landing');
})->name('landing');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('user');

    Route::get('/users/{userId}/folders', [FolderController::class, 'index'])->name('folders');

    Route::get('/users/{userId}/folders/{folderId}', [ContentController::class, 'index'])->name('contents');
});
