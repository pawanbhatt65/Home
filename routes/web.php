<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'home']);
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/home-style-one', [MainController::class, 'homeStyeOne'])->name('homeStyeOne');
Route::get('/connect-us', [MainController::class, 'connectUs'])->name('connectUs');
Route::post('/connect-us/store', [MainController::class, 'contactDataStore'])->name('connectUs.store');
