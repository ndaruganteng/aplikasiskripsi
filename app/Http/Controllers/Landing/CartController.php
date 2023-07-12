<?php

namespace App\Http\Controllers\Landing;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\pemesanan;

class CartController extends Controller
{
    // public function index()
    // {
    //     return view('landing.cart');
    // }

    public function index()
    {   
        // mengambil data dari table tour
    	$pemesanan = DB::table('pemesanan')->simplepaginate(5);
        return view('landing.cart',['pemesanan' => $pemesanan]);
    }
}
