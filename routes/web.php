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

//  laravel 7x
//Route::get('/', 'MainController@index'); // MainController - название контроллера, index - его метод

//после laravel 8x
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/search', [MainController::class, 'search'])->name('search');


Route::get('/about', function () {
    return view('about');
});
