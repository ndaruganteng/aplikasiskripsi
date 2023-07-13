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



}
