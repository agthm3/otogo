<?php

use App\Http\Controllers\CarterController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TicketController;
use App\Models\home;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home.index-driver');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');

    Route::get('/ticket', [TicketController::class, 'index'])->name('ticket.index');
    Route::get('/ticket/show', [TicketController::class, 'show'])->name('ticket.show');

    Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
    Route::get('/payment/show', [PaymentController::class, 'show'])->name('payment.show');

    Route::get('/direction', [DirectionController::class, 'index'])->name('direction.index');
    Route::get('/direction/show', [DirectionController::class, 'show'])->name('direction.show');

    Route::get('/carter', [CarterController::class, 'index'])->name('carter.index');

    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index'); 
    Route::get('/panduan', [SettingController::class, 'showPanduan'])->name('panduan.index');
    Route::get('/qna', [SettingController::class, 'showQna'])->name('qna.index');
    Route::get('/account', [SettingController::class, 'showAccount'])->name('account.index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
