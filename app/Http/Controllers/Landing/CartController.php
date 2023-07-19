<?php

namespace App\Http\Controllers\Landing;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\pemesanan;
use App\Models\tour;
use PDF;
use FPDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class CartController extends Controller
{
    public function index()
    {   
        // mengambil data dari table tour
    	$pemesanan = DB::table('pemesanan')->simplepaginate(5);
        $rekening = DB::table('rekening')->get();
        return view('landing.cart',['pemesanan' => $pemesanan, 'rekening' => $rekening]);
    }


    public function kwitansi()
{
    ini_set('max_execution_time', 120);

    $pemesanan = Pemesanan::find(1); // Replace 1 with the appropriate ID

    if (!$pemesanan) {
        return "Pemesanan not found";
    }

    $data = [
        'hargasatuan' => $pemesanan->hargasatuan,
        'namatour' => $pemesanan->namatour,
        'namauser' => $pemesanan->namauser,
        'durasi' => $pemesanan->durasi,
        'hargatotal' => $pemesanan->hargatotal,
        'jumlahorang' => $pemesanan->jumlahorang,
        'tanggalberangkat' => $pemesanan->tanggalberangkat,
    ];

    try {
        $pdf = PDF::loadView('landing.kwitansipdf', $data);
        return $pdf->download('cetak.pdf');
    } catch (\Exception $e) {
        return $e->getMessage();
    }
}
    

}
