<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
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
Route::get('/', [FrontController::class, 'index']);
Route::get('/store', [FrontController::class, 'store'])->name('store');
Route::get('/store/{slug}', [FrontController::class, 'single_store'])->name('store.single');
Route::get('/about', [FrontController::class, 'about'])->name('about');


Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'validates']);
Route::get('/register', [AdminController::class, 'register'])->name('register');
Route::post('/register', [AdminController::class, 'store_user']);


Route::get('/contact', [ContactController::class, 'contact'])->name('front-contact');
Route::post('/contact', [ContactController::class, 'sendContactEmail'])->name('contact.send');


Route::middleware(['auth'])->group(function () {

Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/product', [AdminController::class, 'show'])->name('product');
Route::get('/products/{slug}', [AdminController::class, 'edit'])->name('product.edit');
Route::post('/products/{slug}', [AdminController::class, 'update'])->name('product.update');
Route::get('/product/create', [AdminController::class, 'create'])->name('product.create');
Route::post('/product/create', [AdminController::class, 'store'])->name('product.store');
Route::delete('/Products/{product}', [AdminController::class, 'destroy'])->name('product.delete');

Route::get('/admin/contact', [AdminController::class, 'show_contact'])->name('contact');
Route::post('/admin/contact', [AdminController::class, 'update_contact'])->name('contact.update');

Route::get('/testimony', [AdminController::class, 'testimony'])->name('testimony');
Route::get('/admin/testimony', [AdminController::class, 'create_testimony'])->name('testimony.create');
Route::post('/admin/testimony', [AdminController::class, 'store_testimony'])->name('testimony.store');
Route::delete('/Testimony/{testimony}', [AdminController::class, 'destroy_testimony'])->name('testimony.delete');


});

