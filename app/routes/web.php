<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TicketController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/ticket/{id}', [TicketController::class, 'show'])->middleware('auth')->name('ticket.show');
Route::post('/ticket/sendThread', [TicketController::class, 'SendThread'])->middleware('auth')->name('ticket.sendThread');
Route::get('/account', [UserController::class, 'show'])->middleware('auth')->name('user.show');


require __DIR__.'/auth.php';
