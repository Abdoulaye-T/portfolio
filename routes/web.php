<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});


// Route pour le formulaire de contact
Route::post('/contact', [ContactController::class, 'sendContactForm'])->name('contact.send');