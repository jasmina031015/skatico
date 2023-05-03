<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DobavkiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KonservController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MaslaController;
use App\Http\Controllers\OrekhiController;
use App\Http\Controllers\SemenaController;
use App\Http\Controllers\SiropyController;
use App\Http\Controllers\SpetsiiController;
use App\Http\Controllers\SukhofruktyController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/o-nas', [AboutController::class, 'index'])->name('o-nas');

Route::get('/orekhi', [OrekhiController::class, 'index'])->name('orekhi');

Route::get('/masla', [MaslaController::class, 'index'])->name('masla');

Route::get('/sukhofrukty', [SukhofruktyController::class, 'index'])->name('sukhofrukty');

Route::get('/siropy', [SiropyController::class, 'index'])->name('siropy');

Route::get('/konservatsiya', [KonservController::class, 'index'])->name('konservatsiya');

Route::get('/dobavki', [DobavkiController::class, 'index'])->name('dobavki');

Route::get('/spetsii', [SpetsiiController::class, 'index'])->name('spetsii');

Route::get('/semena', [SemenaController::class, 'index'])->name('semena');

Route::post('/send-email', [MailController::class, 'sendEmail'])->name('send');


