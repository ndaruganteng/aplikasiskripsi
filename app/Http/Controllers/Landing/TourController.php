<?php

namespace App\Http\Controllers\Landing;

use App\Models\tour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    public function index()
    {
        $tour = DB::table('tour')->get();
        return view('landing.tour',['tour' => $tour]);
    }

    public function cari(Request $request)
    {
        $keyword = $request->input('cari');
        
        // Query untuk pencarian tour berdasarkan keyword
        $tour = tour::where('namatour', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('tanggalberangkat','LIKE', '%' . $keyword . '%')
                    ->orWhere('kategori', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('harga', 'LIKE', '%' . $keyword . '%')
                    ->get();
        
                    return view('landing.tour',compact('tour'));
    }
}
