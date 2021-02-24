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

Route::get('/hello', function () {
    return 'hello world!';
})->name('hello');

Route::get('/home', function () {
    return view('home');
})->name('homep');

Route::prefix('admin')->name('admin.')->group( function (){
    Route::get('/posts/{id}/edit', function ($id) {
        return 'Post #'.$id;
    });
    Route::get('/home', function () {
        return 'home test page';
    })->name('homep');
});

Route::fallback(function () {
   return redirect()->route('homep');
});
