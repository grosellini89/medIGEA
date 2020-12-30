<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'homepage'] )->name('homepage');

Route::get('/servizi', [HomeController::class, 'services'])->name('services');
Route::get('/servizi/dettaglio/{name}', [HomeController::class, 'detail'])->name('detail');

Route::get('/chi-siamo', [HomeController::class, 'team'])->name('team');
Route::get('/contatti', [HomeController::class, 'contact'])->name('contact');

route::post('contatti/submit', [HomeController::class, 'submit'])->name('contacts.submit');
Route::get('/grazie/{name}/{email}/{message}', [HomeController::class, 'thankyou'])->name('thankyou');
