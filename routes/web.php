<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\MasyarakatController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/masyarakat/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/masyarakat/form', [App\Http\Controllers\HomeController::class, 'create']);
