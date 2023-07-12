<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\mitra;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class RiquestmitraController extends Controller
{
    public function index()
    {   
        // mengambil data dari table pegawai
    	$mitra = DB::table('mitra')->simplepaginate(5);

        return view('dashboard.requestmitra',['mitra' => $mitra]);
    }

    public function tambah()
    {
 
	// memanggil view tambah
	return view('landing.tambahmitra');
    }


    public function store(Request $request)

    {
        $validator = $request -> validate([
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'image' => 'image|file|max:2048,jpeg,png,jpg',  
        ], 
        [
            "nama.required" => "Please enter nama",
            "email.required" => "Please enter email",
            "hp.required" => "Please enter hp",
            "alamat.required" => "Please enter alamat",
        ]);


        $mitra = new Mitra;
        $mitra->nama= $request->input('nama');
        $mitra->email= $request->input('email');
        $mitra->nohp= $request->input('nohp');
        $mitra->alamat= $request->input('alamat');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->nama.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/mitra/',$filename);
            $mitra->image = $filename;
        }
       
        $mitra->save();

        return redirect('/tambahmitra') -> with('success', "Data berhasil ditambahkan!");
    }

    // method untuk edit data team
    // public function edit($id)
    // {
    //      $mitra =  Mitra:: find($id);

    //     return view('landing.editteam', [
    //         'method'=> "PUT",
    //         'action'=> "/updateteam/edit/{id}'",
    //         'team'=> $team
    //     ]);
    // }


    // method untuk hapus data pegawai
    public function hapus($id)
    {
        $mitra = Mitra::find($id);
        $path = 'storage/image/mitra/'.$mitra->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $mitra->delete();
        
        return back() -> with('info', "Data berhasil dihapus!");
    }

}
