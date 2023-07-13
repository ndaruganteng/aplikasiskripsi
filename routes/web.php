<?php

use Illuminate\Support\Facades\Route;


// auth
use App\http\Controllers\auth\LoginController;
use App\http\Controllers\auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

// user
use App\http\Controllers\user\UserController;
use App\http\Controllers\user\EdituserprofileController;
use App\http\Controllers\user\UserprofileController;

// landing
use App\http\Controllers\landing\HomeController;
use App\http\Controllers\landing\TourController;
use App\http\Controllers\landing\DetailtourController;
use App\http\Controllers\landing\ContactController;
use App\http\Controllers\landing\CartController;
use App\http\Controllers\landing\TransaksiController;
use App\http\Controllers\landing\PesananController;
use App\http\Controllers\landing\WelcomeController;
use App\http\Controllers\landing\DetailpesananController;
use App\http\Controllers\landing\RatingController;
use App\http\Controllers\landing\DatapemesananController;


// dashboard biro
use App\http\Controllers\dashboard\DashboardController;
use App\http\Controllers\dashboard\DatatourController;
use App\http\Controllers\dashboard\ManajemenorderController;
use App\http\Controllers\dashboard\ManajemenuserController;
use App\http\Controllers\dashboard\DetaildatatourController;
use App\http\Controllers\dashboard\ProfileController;
use App\http\Controllers\dashboard\EditprofileController;
use App\http\Controllers\dashboard\DetailorderController;
use App\http\Controllers\dashboard\DatarekeningController;
use App\http\Controllers\dashboard\KategoriTourController;
use App\http\Controllers\dashboard\RiquestmitraController;
use App\http\Controllers\dashboard\StatusperjalananController;





//  ==================================================================================================

//auth
// Route::get('/login', [LoginController::class, 'index'])->name('login.index');
// Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

//landing
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/tour', [TourController::class, 'index'])->name('tour.index');
Route::get('/mitra', [MitraController::class, 'index'])->name('mitra.index');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/detail-tour', [DetailtourController::class, 'index'])->name('detail-tour.index');
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
Route::get('/rating', [RatingController::class, 'index'])->name('rating.index');
Route::get('/detail-pesanan', [DetailpesananController::class, 'index'])->name('detail-pesanan.index');

// search 
Route::get('/search',[HomeController::class, 'search'])->name('home.search');
Route::get('/cari',[TourController::class, 'cari'])->name('tour.cari');

// profile User
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/userprofile', [UserprofileController::class, 'index'])->name('userprofile.index');
Route::get('/edituserprofile', [EdituserprofileController::class, 'index'])->name('edituserprofile.index');

// dashboard biro
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/editprofile', [EditprofileController::class, 'index'])->name('editprofile.index');
Route::get('/manajemenorder', [ManajemenorderController::class, 'index'])->name('manajemenorder.index');
Route::get('/manajementour', [DatatourController::class, 'manajementour'])->name('manajementour.index');
Route::get('/manajemenorder', [DetailtourController::class, 'manajemenorder'])->name('manajemenorder.index');
Route::get('/manajemenuser', [ManajemenuserController::class, 'index'])->name('manajemenuser.index');
Route::get('/detail-datatour', [DetaildatatourController::class, 'index'])->name('detail-datatour.index');
Route::get('/detail-order', [DetailorderController::class, 'index'])->name('detail-order.index');
Route::get('/status-perjalanan', [StatusperjalananController::class, 'index'])->name('status-perjalanan.index');



// kategori tour
Route::get('/kategoritour', [KategoriTourController::class, 'index'])->name('kategoritour.index');
Route::get('/tambahkategori', [KategoriTourController::class, 'tambah'])->name('tambahkategori.index');
Route::post('/tambahblog', [KategoriTourController::class, 'store'])->name('Kategori.index');
Route::get('/kategoritour/edit/{id}', [KategoriTourController::class, 'edit'])->name('editkategori.index');
Route::put('/kategoritour/update/{id}', [KategoriTourController::class, 'update'])->name('updateKategori.index');
Route::get('/kategoritour/hapus/{id}', [KategoriTourController::class, 'hapus'])->name('hapus.index');


// data tour
Route::get('/datatour', [DatatourController::class, 'index'])->name('datatour.index');
Route::get('/tambahtour', [DatatourController::class, 'tambah'])->name('tambahtour.index');
Route::post('/tambahtour', [DatatourController::class, 'store'])->name('Tour.index');
Route::get('/datatour/edit/{id_tour}', [DatatourController::class, 'edit'])->name('edittour.index');
Route::put('/datatour/update/{id_tour}', [DatatourController::class, 'update'])->name('updateTour.index');
Route::get('/datatour/hapus/{id_tour}', [DatatourController::class, 'hapus'])->name('hapus.index');
Route::pattern('id', '[0-9]+');
Route::get('/{id}', [DetailtourController::class,'show']);
Route::put('/approve/{id_tour}', [DatatourController::class, 'approve'])->name('approve');


// data rekening
Route::get('/datarekening', [DatarekeningController::class, 'index'])->name('datarekening.index');
Route::get('/tambahrekening', [DatarekeningController::class, 'tambah'])->name('tambahrekening.index');
Route::post('/tambahrekening', [DatarekeningController::class, 'store'])->name('Rekening.index');
Route::get('/datarekening/edit/{id}', [DatarekeningController::class, 'edit'])->name('editrekening.index');
Route::put('/datarekening/update/{id}', [DatarekeningController::class, 'update'])->name('updateRekening.index');
Route::get('/datarekening/hapus/{id}', [DatarekeningController::class, 'hapus'])->name('hapus.index');


//Login
Route::group(['middleware' => ['guest']], function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'login'])->name('login.store');
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//Mitra
Route::get('/requestmitra', [RiquestmitraController::class, 'index'])->name('requestmitra.index');
Route::get('/tambahmitra', [RiquestmitraController::class, 'tambah'])->name('tambahmitra.index');
Route::post('/tambahmitra', [RiquestmitraController::class, 'store'])->name('Mitra.index');
Route::get('/requestmitra/hapus/{id}', [RiquestmitraController::class, 'hapus'])->name('hapus.index');

// pemesanan
Route::post('/boking', [DetailtourController::class, 'store']);
Route::put('/konfirmasi/{id_pemesanan}', [DetailtourController::class, 'konfirmasi'])->name('konfirmasi');
Route::get('/manajemenorder/hapus/{id}', [DetailtourController::class, 'hapus'])->name('hapus.index');


Route::group(['middleware' => ['auth','ceklevel:user']], function(){
    Route::post('/upload-buktitf/{id}', [DetailtourController::class, 'update'])->name('upload-buktitf');
});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    Route::get('/tour', [TourController::class, 'index'])->name('tour.index');
    Route::get('/tambahmitra', [RiquestmitraController::class, 'tambah'])->name('tambahmitra.index');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/detail-tour', [DetailtourController::class, 'index'])->name('detail-tour.index');
    Route::get('/pesanan', [DetailtourController::class, 'histori'])->name('pesanan.index');
    Route::get('/rating', [RatingController::class, 'index'])->name('rating.index');
    Route::get('/detail-pesanan', [DetailpesananController::class, 'index'])->name('detail-pesanan.index');
   
});



Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');