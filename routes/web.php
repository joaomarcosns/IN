<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UsuarioController;
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

Route::controller(UsuarioController::class)->name('usuario.')->prefix('usuario')->group(function () {
    Route::get('/', 'index')->name('index');    
    Route::get('/create', 'create')->name('create');    
    Route::post('/store', 'store')->name('store');   
    Route::get('/edit/{id}', 'edit')->name('edit');    
    Route::put('/update/{id}', 'update')->name('update');
});

Route::controller(PostController::class)->name('post.')->prefix('post')->group(function () {
    Route::get('/', 'index')->name('index');    
    Route::get('/create', 'create')->name('create');    
    Route::post('/store', 'store')->name('store');    
});
