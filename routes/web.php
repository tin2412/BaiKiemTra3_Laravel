<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\quanlynhansuController;
use App\Http\Controllers\nhansuController;
use App\Http\Controllers\TeamController;
use App\Models\quanlynhansu;
use App\Models\nhansu;
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

Route::get('/nhansu', function () {
    $nhansu = nhansu::all();
    return view('nhansu.index', compact('nhansu'));
});
Route::get('/', [quanlynhansuController::class, 'index']);
// Route::get('/nhansu', [nhansuController::class, 'getnhansu']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nhansu/{id}',[nhansuController::class, 'show'])->name('team.show');