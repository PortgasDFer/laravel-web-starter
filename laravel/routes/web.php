<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\RobotsController;

use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/acerca-de-nosotros', [SiteController::class, 'about'])->name('about');
Route::get('/contacto', [SiteController::class, 'contact'])->name('contact');
Route::get('/desarrollo-web', [SiteController::class, 'web'])->name('web');
Route::get('/desarrollo-web-inversion', [SiteController::class, 'pricingWeb'])->name('pricingWeb');
Route::get('/branding', [SiteController::class, 'branding'])->name('branding');
Route::get('/branding-inversion', [SiteController::class, 'pricingBranding'])->name('pricingBranding');
Route::get('/soluciones-empresariales', [SiteController::class, 'enterpriseSolutions'])->name('enterprise-solutions');
Route::get('/soluciones-empresariales-inversion', [SiteController::class, 'pricingEnterpriseSolutions'])->name('pricingEnterpriseSolutions');
Route::get('/software-apps', [SiteController::class, 'softwareApps'])->name('software-apps');
Route::get('/software-apps-inversion', [SiteController::class, 'pricingSoftwareApps'])->name('pricingSoftwareApps');
Route::get('/proyectos', [SiteController::class, 'projects'])->name('projects');
Route::get('/desarrollo-a-medida', [SiteController::class, 'customDevelopment'])->name('custom-development');
Route::get('/tecnologias', [SiteController::class, 'technologia'])->name('technologia');
Route::get('/alto-rendimiento', [SiteController::class, 'highPerformance'])->name('high-performance');
Route::get('/diseno-responsivo', [SiteController::class, 'responsive'])->name('responsive');
Route::get('/optimizacion-seo', [SiteController::class, 'seoOptimization'])->name('seo-optimization');
Route::get('/soporte-continuo', [SiteController::class, 'support'])->name('support');
Route::get('/atencion-personalizada', [SiteController::class, 'personalizedService'])->name('personalized-service');
Route::get('/preguntas-frecuentes', [SiteController::class, 'faq'])->name('faq');
Route::get('/programa-de-recomendaciones', [SiteController::class, 'money'])->name('money');
Route::get('/robots.txt', [RobotsController::class, 'index'])->name('robots');


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

    Route::resource('pages', PageController::class);
});
require __DIR__.'/auth.php';
