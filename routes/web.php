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
use App\http\Controllers\landing\DetailpesananController;

// dashboard admin
use App\http\Controllers\admin\AdminController;
use App\http\Controllers\admin\ManajemenTourController;
use App\http\Controllers\admin\ManajemenuserbiroController;
use App\http\Controllers\admin\ManajemenusermemberController;
use App\http\Controllers\admin\KategoriTourController;

// dashboard biro
use App\http\Controllers\dashboard\DashboardController;
use App\http\Controllers\dashboard\DatatourController;
use App\http\Controllers\dashboard\ManajemenorderController;
use App\http\Controllers\dashboard\DetaildatatourController;
use App\http\Controllers\dashboard\ProfileController;
use App\http\Controllers\dashboard\EditprofileController;
use App\http\Controllers\dashboard\DetailorderController;





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
Route::get('/detail-pesanan', [DetailpesananController::class, 'index'])->name('detail-pesanan.index');

//dashboard Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/manajementour', [ManajemenTourController::class, 'index'])->name('manajementour.index');
Route::get('/manajemenuserbiro', [ManajemenuserbiroController::class, 'index'])->name('manajemenuserbiro.index');
Route::get('/manajemenusermember', [ManajemenusermemberController::class, 'index'])->name('manajemenusermember.index');

// dashboard biro
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/editprofile', [EditprofileController::class, 'index'])->name('editprofile.index');
Route::get('/manajemenorder', [ManajemenorderController::class, 'index'])->name('manajemenorder.index');
Route::get('/detail-datatour', [DetaildatatourController::class, 'index'])->name('detail-datatour.index');
Route::get('/detail-order', [DetailorderController::class, 'index'])->name('detail-order.index');

// kategori tour
Route::get('/kategoritour', [KategoritourController::class, 'index'])->name('kategoritour.index');
Route::get('/tambahkategori', [KategoritourController::class, 'tambah'])->name('tambahkategori.index');
Route::post('/tambahblog', [KategoritourController::class, 'store'])->name('Kategori.index');
Route::get('/kategoritour/edit/{id}', [KategoritourController::class, 'edit'])->name('editkategori.index');
Route::put('/kategoritour/update/{id}', [KategoritourController::class, 'update'])->name('updateKategori.index');
Route::get('/kategoritour/hapus/{id}', [KategoritourController::class, 'hapus'])->name('hapus.index');

// data tour
Route::get('/datatour', [DatatourController::class, 'index'])->name('datatour.index');
Route::get('/tambahtour', [DatatourController::class, 'tambah'])->name('tambahtour.index');
Route::post('/tambahtour', [DatatourController::class, 'store'])->name('Tour.index');
Route::get('/datatour/edit/{id}', [DatatourController::class, 'edit'])->name('edittour.index');
Route::put('/datatour/update/{id}', [DatatourController::class, 'update'])->name('updateTour.index');
Route::get('/datatour/hapus/{id}', [DatatourController::class, 'hapus'])->name('hapus.index');
