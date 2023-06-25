<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManajementourController extends Controller
{
    public function index()
    {
        return view('admin.manajementour');
    }
}
