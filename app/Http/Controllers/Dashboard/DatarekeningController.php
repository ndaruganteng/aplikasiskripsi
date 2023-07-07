<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\rekening;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DatarekeningController extends Controller
{
    // public function index()
    // {
    //     return view('dashboard.rekening');
    // }

    public function index()
    {   
        // mengambil data dari table pegawai
    	$rekening = DB::table('rekening')->simplepaginate(5);

        return view('dashboard.datarekening',['rekening' => $rekening]);
    }

    public function tambah()
    {
	// memanggil view tambah
	return view('dashboard.tambahrekening');
    }


    public function store(Request $request)

    {
        $validator = $request -> validate([
            'namarekening' => 'required',
            'namabank' => 'required',
            'nomorrekening' => 'required',
            'imagerek' => 'image|file|max:2048,jpeg,png,jpg',  
        ], 
        [
            "namarekening.required" => "Please enter nama rekening",
            "namabank.required" => "Please enter nama bank",
            "nomorrekening.required" => "Please enter nomor rekening",
        ]);


        $rekening = new Rekening;
        $rekening->namarekening= $request->input('namarekening');
        $rekening->namabank= $request->input('namabank');
        $rekening->nomorrekening= $request->input('nomorrekening');
        if($request->hasFile('imagerek')){
            $file = $request->file('imagerek');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->namabank.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/rekening/',$filename);
            $rekening->imagerek = $filename;
        }
       
        $rekening->save();

        return redirect('/datarekening') -> with('success', "Data berhasil ditambahkan!");
    }

    // method untuk edit data rekening
    public function edit($id)
    {
         $rekening=  Rekening:: find($id);

        return view('dashboard.editrekening', [
            'method'=> "PUT",
            'action'=> "/datarekening/edit/{id}'",
            'rekening'=> $rekening
        ]);
    }

    
     // update data rekening
     public function update(Request $request,$id)
     {
         $rekening = Rekening::find($id); 
             
         $validator = $request -> validate([
            'namarekening' => 'required',
            'namabank' => 'required',
            'nomorrekening' => 'required',
            'imagerek' => 'image|file|max:2048,jpeg,png,jpg',  
        ], 
        [
            "namarekening.required" => "Please enter nama rekening",
            "namabank.required" => "Please enter nama bank",
            "nomorrekening.required" => "Please enter nomor rekening",
        ]);
 
         if($request->hasFile('imagerek')){
             $request->validate([ 'imagerek' => 'image|file|max:2048,jpeg,png,jpg',]);
             Storage::delete($rekening->imagerek);
             $file = $request->file('imagerek');
             $extention = $file->getClientOriginalExtension();
             $filename = $request->namabank.'_'.now()->timestamp.'.'.$extention;
             $file->storeAs('image/rekening/',$filename);
             $rekening->imagerek = $filename;
         }
 
 
         $rekening->namarekening = $request->namarekening;
         $rekening->namabank = $request->namabank;
         $rekening->nomorrekening = $request->nomorrekening;

         $rekening->save();
 
         return redirect('datarekening')->with('toast_success','Data Telah Diupdate');
     }

     public function hapus($id)
     {
         $rekening = Rekening::find($id);
         $path = 'storage/image/rekening/'.$rekening->imagerek;
         if(File::exists($path)){
             File::delete($path);
         }
         $rekening->delete();
         
         return back() -> with('info', "Data berhasil dihapus!");
     }
}
