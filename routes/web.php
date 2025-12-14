<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Group routes dengan middleware role
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    //Galery
    Route::get('/admin/galery', [GaleryController::class, 'index'])->name('admin.galery');
    Route::get('/admin/galery/tambah', [GaleryController::class, 'create'])->name('admin.galery.create');
    Route::post('/admin/galery/tambah', [GaleryController::class, 'store'])->name('admin.galery.store');
    Route::get('/admin/galery/{id}/edit', [GaleryController::class, 'edit'])->name('admin.galery.edit');
    Route::put('/admin/galery/{id}', [GaleryController::class, 'update'])->name('admin.galery.update');
    Route::delete('/admin/galery/{id}/hapus',[GaleryController::class, 'destroy'])->name('admin.galery.destroy');

    //Article
    Route::get('/admin/article', [ArticleController::class, 'index'])->name('admin.article');
    Route::get('/admin/article/tambah', [ArticleController::class, 'create'])->name('admin.article.create');
    Route::post('/admin/article/tambah', [ArticleController::class, 'store'])->name('admin.article.store');
    Route::get('/admin/article/{id}/edit', [ArticleController::class, 'edit'])->name('admin.article.edit');
    Route::put('/admin/article/{id}', [ArticleController::class, 'update'])->name('admin.article.update');
    Route::delete('/admin/article/{id}/hapus',[ArticleController::class, 'destroy'])->name('admin.article.destroy');

    //product
    Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('/admin/product/tambah', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/admin/product/tambah', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('/admin/product/{id}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/admin/product/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('/admin/product/{id}/hapus',[ProductController::class, 'destroy'])->name('admin.product.destroy');
});

Route::get('/', [UserController::class, 'index'])->name('home');
Route::post('/contact', [UserController::class, 'sendEmail'])->name('contact.send');


