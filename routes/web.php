<?php

use App\Http\Controllers\CarBrandController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Vendor Homepage
Route::get('/', function () {
    return view('welcome');
});

// Dashboard - protected with auth and email verification
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Permission Routes
Route::resource('permissions', PermissionController::class);

// Role Routes
Route::resource('roles', RoleController::class);

// Route for adding/editing permissions for a specific role
Route::get('roles-permissions/{id}', [RoleController::class, 'addPermissionToRole'])->name('roles-permissions');

// Route for updating the role's permissions
Route::put('roles-permissions/{id}', [RoleController::class, 'updateRolePermissions'])->name('roles-permissions.update');

// Login/Authenticated User Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Car Brands Routes - Only for logged-in users
    Route::get('/carbrands/{brand}/create', [CarBrandController::class, 'create'])->name('carbrands.create');
    Route::post('/carbrands/{brand}', [CarBrandController::class, 'store'])->name('carbrands.store');
    Route::get('/carbrands/{brand}/{model}/edit', [CarBrandController::class, 'edit'])->name('carbrands.edit');
    Route::put('/carbrands/{brand}/{model}', [CarBrandController::class, 'update'])->name('carbrands.update');
    Route::delete('/carbrands/{brand}/{model}', [CarBrandController::class, 'destroy'])->name('carbrands.destroy');

    // Admin Panel Route
    Route::get('/admin', function () {
        return view('admin.admin-panel');
    })->name('admin');
});

// Public Routes
Route::get('/carbrands/{brand}', [CarBrandController::class, 'show'])->name('carbrands.show');

Route::get('/home', function () {
    return view('Homepage');
})->name('home');

Route::get('/carbrands', function () {
    return view('carbrands');
})->name('carbrands');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route for submitting the contact form
Route::post('/contact', [FormController::class, 'store'])->name('contact.send');

// Include authentication routes
require __DIR__ . '/auth.php';
