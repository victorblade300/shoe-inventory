<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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


Auth::routes();
Route::get('/contacts-list', [HomeController::class, 'index']);
Route::get('index', [HomeController::class, 'index']);
Route::get('admins/user', [UserController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);