<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsSuperAdmin;
use App\Http\Middleware\IsUser;
use App\Http\Controllers\BlogController;
 

 
 

Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/allblog', [FrontendController::class, 'allblog'])->name('blogs.index');
Route::get('/blog/{slug}', [FrontendController::class, 'showblog'])->name('blogs.show');
 Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::get('/',[FrontendController::class,'index'])->name('index');
  
Auth::routes();

Route::middleware(['auth', IsUser::class])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogsedit/{blog}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
  });

Route::middleware(['auth', IsSuperAdmin::class])->group(function () {
    Route::get('/super-admin/dashboard', [SuperAdminController::class, 'index'])->name('super.admin.dashboard');
    Route::post('/super-admin/add-admin', [SuperAdminController::class, 'addAdmin'])->name('super.admin.addAdmin');
    Route::post('/superadmin/give-permission', [SuperAdminController::class, 'givePermission'])->name('super.admin.givePermission');
    Route::get('/super-admin/give-permission', [SuperAdminController::class, 'showGivePermissionPage'])
    ->name('super.admin.givePermissionPage');

    Route::post('/super-admin/add-super-admin', [SuperAdminController::class, 'addSuperAdmin'])->name('super.admin.addSuperAdmin');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
