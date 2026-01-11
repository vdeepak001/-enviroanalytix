<?php

use Illuminate\Support\Facades\Route;

// Main Pages
Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Contact Form Submission (Placeholder - add controller logic later)
Route::post('/contact', function () {
    // Add contact form processing logic here
    return redirect()->route('contact')->with('success', 'Thank you for contacting us!');
})->name('contact.submit');

// Service Detail Pages
Route::get('/services/water-and-wastewater-engineering', function () {
    return view('pages.services.water-wastewater');
})->name('services.water');

Route::get('/services/buildings-engineering', function () {
    return view('pages.services.buildings-engineering');
})->name('services.buildings');

Route::get('/services/infrastructure-transportation-engineering', function () {
    return view('pages.services.infrastructure-transportation');
})->name('services.infrastructure');

Route::get('/services/architectural-design-bim', function () {
    return view('pages.services.architectural-design-bim');
})->name('services.architectural');

Route::get('/services/structural-engineering-bim', function () {
    return view('pages.services.structural-engineering-bim');
})->name('services.structural');

Route::get('/services/scan-bim', function () {
    return view('pages.services.scan-bim');
})->name('services.scan');

Route::get('/services/mep-civil-engineering', function () {
    return view('pages.services.mep-civil-engineering');
})->name('services.mep');

Route::get('/services/industrial-oil-gas-sector-engineering', function () {
    return view('pages.services.industrial-oil-gas');
})->name('services.industrial');

// Legal Pages
Route::get('/privacy-policy', function () {
    return view('legal.privacy-policy');
})->name('privacy');

Route::get('/terms-conditions', function () {
    return view('legal.terms-conditions');
})->name('terms');
