<?php

use App\Http\Controllers\StoriesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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




Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/stories', [StoriesController::class, 'index'])->name('story.list');
    Route::get('/story/add', [StoriesController::class, 'create'])->name('story.add');
    Route::post('/story/save',[StoriesController::class, 'store'])->name('story.save');
});

