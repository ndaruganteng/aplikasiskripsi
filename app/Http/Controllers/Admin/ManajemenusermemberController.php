<?php

namespace App\Http\Controllers\Admin;

use App\Models\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ManajemenusermemberController extends Controller
{
    // public function index()
    // {
    //     return view('admin.manajemenusermember');
    // }
    public function index()
    {   
        // mengambil data dari table tour
    	$users = DB::table('users')->simplepaginate(5);
        return view('admin.manajemenusermember',['users' => $users]);
    }
}
