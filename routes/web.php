<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;


use Illuminate\Support\Facades\Route;
header('Access-Control-Allow-Origin: *');

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

Route::get("users/list", [UserController::class, "index"])->middleware('auth');
Route::delete("teams/{id}", [TeamController::class, "destroy"])->middleware('auth');
Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create')->middleware('auth');
Route::post('/teams', [TeamController::class, 'store'])->name('teams.store')->middleware('auth');
Route::get('/teams/edit/{team}', [TeamController::class, 'edit'])->name('teams.edit')->middleware('auth');
Route::post('/teams/{team}', [TeamController::class, 'update'])->name('teams.update')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/team', [App\Http\Controllers\TeamController::class, 'index'])->name('team');
Route::get('/table', [App\Http\Controllers\TableController::class, 'index'])->name('table');
Route::get('/schedule', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule');
Route::get('/info', [App\Http\Controllers\InfoController::class, 'index'])->name('info');
Route::get("teams/list", [TeamController::class, "index"]);
