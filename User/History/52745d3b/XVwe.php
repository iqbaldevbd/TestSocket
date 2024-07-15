<?php

use App\Events\HelloWorld;
use App\Events\TransactionEvent;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Transaction\TestTransactionController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    HelloWorld::dispatch();
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//TestApiTransaction
Route::get('insertData',[TestTransactionController::class,'index'])->name('transaction.index');
Route::post('/transactions', [TestTransactionController::class, 'store'])->name('transactions.store');

require __DIR__.'/auth.php';
