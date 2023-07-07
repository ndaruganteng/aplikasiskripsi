<?php

namespace App\Http\Controllers\Landing;

use App\Models\tour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $tour = DB::table('tour')->get();
        return view('landing.home',['tour' => $tour]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        
        // Query untuk pencarian tour berdasarkan keyword
        $tour = tour::where('namatour', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('tanggalberangkat', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('kategori', 'LIKE', '%' . $keyword . '%')
                    ->get();
        
                    return view('landing.home',compact('tour'));
    }
}
