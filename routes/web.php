<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/services/buildings-engineering', function () {
    return view('pages.services.buildings-engineering');
})->name('services.buildings');

Route::get('/services/water-wastewater', function () {
    return view('pages.services.water-wastewater');
})->name('services.water');

Route::get('/services/industrial-oil-gas', function () {
    return view('pages.services.industrial-oil-gas');
})->name('services.industrial');

Route::get('/services/infrastructure-transportation', function () {
    return view('pages.services.infrastructure-transportation');
})->name('services.infrastructure');

Route::get('/services/scan-bim', function () {
    return view('pages.services.scan-bim');
})->name('services.scan-bim');

Route::get('/services/architectural-design-bim', function () {
    return view('pages.services.architectural-design-bim');
})->name('services.architectural');

Route::get('/services/structural-engineering-bim', function () {
    return view('pages.services.structural-engineering-bim');
})->name('services.structural');

Route::get('/services/mep-civil-engineering', function () {
    return view('pages.services.mep-civil-engineering');
})->name('services.mep');

Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});
