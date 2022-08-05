<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JanuaryController;
use App\Http\Controllers\FebruaryController;
use App\Http\Controllers\MarchController;
use App\Http\Controllers\AprilController;
use App\Http\Controllers\MeiController;
use App\Http\Controllers\JuneController;
use App\Http\Controllers\JulyController;
use App\Http\Controllers\AugustController;
use App\Http\Controllers\SeptemberController;
use App\Http\Controllers\OctoberController;
use App\Http\Controllers\NovemberController;
use App\Http\Controllers\DecemberController;
use GuzzleHttp\Middleware;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('januarys', JanuaryController::class)->middleware('auth');
Route::resource('februarys', FebruaryController::class)->middleware('auth');
Route::resource('marchs', MarchController::class)->middleware('auth');
Route::resource('aprils', AprilController::class)->middleware('auth');
Route::resource('meis', MeiController::class)->middleware('auth');
Route::resource('junes', JuneController::class)->middleware('auth');
Route::resource('julys', JulyController::class)->middleware('auth');
Route::resource('augusts', AugustController::class)->middleware('auth');
Route::resource('septembers', SeptemberController::class)->middleware('auth');
Route::resource('octobers', OctoberController::class)->middleware('auth');
Route::resource('novembers', NovemberController::class)->middleware('auth');
Route::resource('decembers', DecemberController::class)->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');
