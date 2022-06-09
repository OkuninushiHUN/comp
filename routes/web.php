<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CompetitionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\GamesController;

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

Route::get('/', [PublicController::class, 'index']);

Route::prefix('competition')->group(function (){
    Route::get('Finished',[CompetitionsController::class, 'showFinished'])->name('finished');
    Route::get('NotFinished',[CompetitionsController::class,'showNotFinished'])->name('Notfinished');
    Route::get('open',[CompetitionsController::class,'open'])->name('open');
    Route::get('create',[CompetitionsController::class,'create'])->name('create');
    Route::post('create',[CompetitionsController::class,'store'])->name('store');
    Route::get('{id}',[CompetitionsController::class,'details'])->name('details');
    Route::post('{id}/join',[CompetitionsController::class,'join'])->name('join');
});

Route::get('games/{id}',[GamesController::class,'show'])->name('showGames');


Route::get('/dashboard', function () {
    return view('private.home');})->middleware(['auth'])->name('home');

Route::get('/home', [PrivateController::class, 'home'])
    ->name('private.home')->middleware('auth');






require __DIR__.'/auth.php';
