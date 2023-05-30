<?php

use App\Http\Controllers\depanController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

//Route::get('people', [PeopleController::class,'index']);
//Route::get('people/{id}', [PeopleController::class,'detail']);

Route::resource('/people', PeopleController::class);

Route::get('/', [PeopleController::class,'index']);
Route::get('/contact', [PeopleController::class,'index']);
Route::get('/about', [PeopleController::class,'index']);

Route::get('/sesi', [SessionController::class,'index']);
Route::post('/sesi/login', [SessionController::class,'login']);
Route::get('/sesi/logout', [SessionController::class,'logout']);
Route::get('/sesi/register', [SessionController::class,'register']);
Route::post('/sesi/create', [SessionController::class,'create']);
Route::resource('halaman', depanController::class);