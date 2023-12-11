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
Route::get('/stats', [App\Http\Controllers\StatsController::class, 'index'])->name('stats');
Route::get('/table', [App\Http\Controllers\TableController::class, 'index'])->name('table');
Route::get('/schedule', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule');
Route::get('/info', [App\Http\Controllers\InfoController::class, 'index'])->name('info');
Route::get('/wygrana-z-helena', [App\Http\Controllers\MatchController::class, 'index'])->name('match');
Route::get("teams/list", [TeamController::class, "index"]);
Route::get("stats/list", [StatsController::class, "index"]);

// Junior

Route::get('/juniorhome', [App\Http\Controllers\JuniorHomeController::class, 'index'])->name('juniorhome');
Route::get('/juniorteam', [App\Http\Controllers\JuniorTeamController::class, 'index'])->name('juniorteam');
Route::get('/juniorstats', [App\Http\Controllers\JuniorStatsController::class, 'index'])->name('juniorstats');
Route::get('/juniorschedule', [App\Http\Controllers\JuniorScheduleController::class, 'index'])->name('juniorschedule');
Route::get('/juniortable', [App\Http\Controllers\JuniorTableController::class, 'index'])->name('juniortable');
Route::get('/juniorinfo', [App\Http\Controllers\JuniorInfoController::class, 'index'])->name('juniorinfo');

