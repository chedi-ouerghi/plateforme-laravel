<?php
// routes/web.php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', [App\Http\Controllers\Admin\CourseController::class, 'index'])->name("cours"); // Utiliser le contrôleur pour afficher la liste des cours

Route::get('/courses/{id}', [App\Http\Controllers\Admin\CourseController::class, 'show'])->name("cours.show"); // Afficher un cours spécifique en fonction de son ID

Route::get('/blog', function () {
    return view('cours.blog');
})->name("blog");

Route::get('/faq', function () {
    return view('cours.faq');
})->name("faq");

Route::get('/feedback', function () {
    return view('cours.feedback');
})->name("feedback");

Route::get('/register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('/register', [CustomAuthController::class, 'customRegistration']);

Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

Route::post('/logout', [CustomAuthController::class, 'signOut'])->name('logout');

// Ajouter la route pour la page de profil
Route::get('/profile', [CustomAuthController::class, 'profile'])->name('profile');
