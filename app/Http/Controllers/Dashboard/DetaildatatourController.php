<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tour;

class DetaildatatourController extends Controller
{
    public function index()
    {
        return view('dashboard.detail-datatour');
    }

    // public function show($id)
    // {      
    //     $datatour_detail = tour::findOrFail($id);
    //     return view('dashboard.detail-datatour', compact('datatour_detail'));
    // }

}
