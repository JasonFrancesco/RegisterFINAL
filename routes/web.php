<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');

Route::get('team', [TeamController::class, 'viewTeam'])->name('viewTeam');
Route::post('team', [TeamController::class, 'createTeam'])->name('createTeam');
Route::patch('team', [TeamController::class, 'updateTeam'])->name('updateTeam');
Route::delete('team', [TeamController::class, 'deleteTeam'])->name('deleteTeam');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');