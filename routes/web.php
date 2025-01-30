<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;

Route::get('/page_not_found', function () {
    return view('error');
});

Route::resource('posts', PostController::class);

Route::redirect('/', 'posts')->name('posts');

// POSTS PAGE INFO
Route::get('/{user}/posts', [DashboardController::class, 'userPosts'])->name('posts.user');
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

// CONTACT PAGE INFO
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// SKETCHUP CONTACT
Route::get('/contact3d', [ContactController::class, 'contact3d'])->name('contact3d');

// WEBDEV CONTACT
Route::get('/contactwebdev', [ContactController::class, 'contactwebdev'])->name('contactwebdev');

Route::middleware('guest')->group(function() {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    // login
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});

Route::middleware(['auth', 'user'])->group(function() {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/home', [DashboardController::class, 'index'])->name('home');
});

Route::get('/portfolio', [DashboardController::class, 'portfolio'])->name('portfolio');
Route::get('/aboutme', [DashboardController::class, 'aboutme'])->name('aboutme');
Route::get('/createpost', [DashboardController::class, 'create'])->name('createPosts');

Route::middleware('auth')->group(function() {
    Route::get('/profile', [DashboardController::class, 'show'])->name('profile');
    Route::get('/profile/edit', [DashboardController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile/delete-image', [DashboardController::class, 'deleteProfileImage'])->name('profile.delete-image');
    Route::put('/profile/update', [DashboardController::class, 'update'])->name('profile.update');
    Route::post('/signout', [AuthController::class, 'signout'])->name('signout');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('adminaccess/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('adminaccess/dashboard/manage', [AdminController::class, 'showUsers'])->name('admin.manageUsers');
    Route::get('adminaccess/dashboard/{user}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('adminaccess/dashboard/{user}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('adminaccess/dashboard/{user}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
