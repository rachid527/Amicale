<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ActivityController as AdminActivityController;

// ----------------------
// 🌐 PARTIE PUBLIQUE
// ----------------------

Route::get('/', function () {
    return view('accueil');
});

Route::get('/a-propos', fn() => view('a_propos'));
Route::get('/anciens', fn() => view('anciens'));
Route::get('/vie-a-dakar', fn() => view('vie_dakar'));
Route::get('/contact', fn() => view('contact'));
Route::get('/bureau', fn() => view('bureau'));
Route::get('/page', fn() => view('page'));

Route::resource('activities', ActivityController::class)->only(['index', 'show']); // Si public peut seulement voir


// ----------------------
// 🔐 AUTHENTIFICATION ADMIN
// ----------------------

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


// ----------------------
// 🛡️ ZONE ADMIN PROTÉGÉE
// ----------------------

Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Gestion des activités
    Route::resource('activities', AdminActivityController::class);
});
