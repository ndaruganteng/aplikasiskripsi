<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahtourController extends Controller
{
    public function index()
    {
        return view('dashboard.tambahtour');
    }
}
