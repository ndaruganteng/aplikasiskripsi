<?php

use Illuminate\Support\Facades\Route;


// auth
use App\http\Controllers\auth\LoginController;
use App\http\Controllers\auth\RegisterController;

// landing
use App\http\Controllers\landing\HomeController;
use App\http\Controllers\landing\TourController;
use App\http\Controllers\landing\DetailtourController;
use App\http\Controllers\landing\ContactController;
use App\http\Controllers\landing\MitraController;
use App\http\Controllers\landing\CartController;
use App\http\Controllers\landing\TransaksiController;
use App\http\Controllers\landing\PesananController;
use App\http\Controllers\landing\WelcomeController;

// dashboard admin
use App\http\Controllers\admin\AdminController;
use App\http\Controllers\admin\ManajemenTourController;
use App\http\Controllers\admin\ManajemenuserbiroController;
use App\http\Controllers\admin\ManajemenusermemberController;
use App\http\Controllers\admin\KategoriTourController;

// dashboard biro
use App\http\Controllers\dashboard\DashboardController;
use App\http\Controllers\dashboard\UpdatetourController;
use App\http\Controllers\dashboard\TambahtourController;
use App\http\Controllers\dashboard\EdittourController;





//  ==================================================================================================

// auth
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

// landing
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/tour', [TourController::class, 'index'])->name('tour.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/mitra', [MitraController::class, 'index'])->name('mitra.index');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/detail-tour', [DetailtourController::class, 'index'])->name('detail-tour.index');
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

//dashboard Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/manajementour', [ManajemenTourController::class, 'index'])->name('manajementour.index');
Route::get('/manajemenuserbiro', [ManajemenuserbiroController::class, 'index'])->name('manajemenuserbiro.index');
Route::get('/manajemenusermember', [ManajemenusermemberController::class, 'index'])->name('manajemenusermember.index');
Route::get('/kategoritour', [KategoriTourController::class, 'index'])->name('kategoritour.index');

// dashboard biro
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/updatetour', [UpdatetourController::class, 'index'])->name('updatetour.index');
Route::get('/tambahtour', [TambahtourController::class, 'index'])->name('tambahtour.index');
Route::get('/edittour', [EdittourController::class, 'index'])->name('edittour.index');

