<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\SetupController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $settings = \App\Models\Setting::first();

    if (!$settings || !$settings->is_configured) {
        return redirect()->route('setup');
    }

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->prefix('administracion')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/settings', [SettingController::class, 'edit'])
        ->name('admin.settings.edit');

    Route::put('/settings', [SettingController::class, 'update'])
        ->name('admin.settings.update');

});



Route::middleware(['auth'])->prefix('administracion')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');

});




Route::middleware(['auth'])->group(function () {

    Route::get('/setup', [SetupController::class, 'index'])->name('setup');

    Route::post('/setup', [SetupController::class, 'store'])->name('setup.store');
});
require __DIR__.'/auth.php';
