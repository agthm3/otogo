<?php

use App\Http\Controllers\CarterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
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
    return view('pages.home.index');
});
Route::get('/search-routes', [DirectionController::class, 'searchRoutes'])->name('search.routes');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// Route::get('/jalur', [DashboardController::class, 'showJalur'])->name('jalur.index');
// Route::get('/jalur/create', [DashboardController::class,'createJalur'])->name('jalur.create')
Route::get('/jalur', [RouteController::class, 'index'])->name('jalur.index');
Route::get('/jalur/create', [RouteController::class, 'create'])->name('jalur.create');
Route::post('/jalur', [RouteController::class, 'store'])->name('jalur.store');
Route::get('/jalur/{id}', [RouteController::class, 'show'])->name('jalur.show');
Route::get('/jalur/{id}/edit', [RouteController::class, 'edit'])->name('jalur.edit');
Route::put('/jalur/{id}', [RouteController::class, 'update'])->name('jalur.update');
Route::delete('/jalur/{id}', [RouteController::class, 'destroy'])->name('jalur.destroy');

Route::get('/pending-driver',[DashboardController::class, 'showPendingDriver'])->name('pending.index');
Route::get('/all-driver', [DashboardController::class,'showAllDriver'])->name('allDriver.index');
Route::get('/report-driver',[DashboardController::class, 'showReportDriver'])->name('reportDriver.index');

Route::get('/driver', [DriverController::class, 'index'])->name('driver.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');

    Route::get('/ticket', [TicketController::class, 'index'])->name('ticket.index');
    Route::get('/ticket/show', [TicketController::class, 'show'])->name('ticket.show');

    Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
    Route::get('/payment/show/{id}', [PaymentController::class, 'show'])->name('payment.show');
    Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');


    Route::get('/direction', [DirectionController::class, 'index'])->name('direction.index');
    Route::get('/direction/{id}', [DirectionController::class, 'show'])->name('direction.show');

    Route::get('/carter', [CarterController::class, 'index'])->name('carter.index');

    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index'); 
    Route::get('/panduan', [SettingController::class, 'showPanduan'])->name('panduan.index');
    Route::get('/qna', [SettingController::class, 'showQna'])->name('qna.index');
    Route::get('/account', [SettingController::class, 'showAccount'])->name('account.index');

    
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
