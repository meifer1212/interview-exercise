<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/create',[HomeController::class,'create'])->name('score.create');
Route::get('/edit/{id}',[HomeController::class,'edit'])->name('score.edit');
Route::post('/store',[HomeController::class,'store'])->name('score.store');
Route::delete('/destroy/{id}',[HomeController::class,'destroy'])->name('score.destroy');
