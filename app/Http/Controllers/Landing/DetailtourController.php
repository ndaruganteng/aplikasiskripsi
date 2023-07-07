<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tour;

class DetailtourController extends Controller
{
    // public function index()
    // {
    //     return view('landing.detail-tour');
    // }

    public function show($id)
    {      
        $detail_tour = tour::findOrFail($id);
        return view('landing.detail-tour', compact('detail_tour'));
    }

}
