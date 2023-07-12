<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\tour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatatourController extends Controller
{

    public function index()
    {   
        // mengambil data dari table tour
    	$tour = DB::table('tour')->simplepaginate(5);
        return view('dashboard.datatour',['tour' => $tour]);
    }

    public function tambah()
    {
	// memanggil view tambah tour
	return view('dashboard.tambahtour');
    }

    public function store(Request $request)
    {
        $validator = $request -> validate([
            'namabiro' => 'required',
            'namatour' => 'required',
            'kategori' => 'required',
            'highlight' => 'required',
            'durasi' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'fasilitas' => 'required',
            'lokasi' => 'required',
            'image' => 'image|file|max:2048,jpeg,png,jpg',  
        ], 
        [
            "namabiro.required" => "Please enter nama biro",
            "namatour.required" => "Please enter nama tour",
            "kategori.required" => "Please enter kategori",
            "highlight.required" => "Please enter highlight",
            "durasi.required" => "Please enter Durasi",
            "harga.required" => "Please enter harga",
            "deskripsi.required" => "Please enter deskripsi",
            "fasilitas.required" => "Please enter fasilitas",
            "lokasi.required" => "Please enter lokasi",
        ]);


        $tour = new Tour;
        $tour->namabiro= $request->input('namabiro');
        $tour->namatour= $request->input('namatour');
        $tour->kategori= $request->input('kategori');
        $tour->highlight= $request->input('highlight');
        $tour->durasi= $request->input('durasi');
        $tour->harga= $request->input('harga');
        $tour->deskripsi= $request->input('deskripsi');
        $tour->fasilitas= $request->input('fasilitas');
        $tour->lokasi= $request->input('lokasi');
        $tour->status= null;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->namatour.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/tour/',$filename);
            $tour->image = $filename;
        }

        $tour->save();

        return redirect('/datatour') -> with('success', "Data berhasil ditambahkan!");
    }

    // method untuk edit data tour
    public function edit($id)
    {
        $tour =  Tour:: find($id);

        return view('dashboard.edittour', [
            'method'=> "PUT",
            'action'=> "/datatour/edit/{id}'",
            'tour'=> $tour
        ]);
        
    }


    // edit data tour
    public function update(Request $request,$id)
    {
        $tour = Tour ::find($id); 
                
        $validator = $request -> validate([
            'namabiro' => 'required',
            'namatour' => 'required',
            'kategori' => 'required',
            'highlight' => 'required',
            'durasi' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'fasilitas' => 'required',
            'lokasi' => 'required',
            'image' => 'image|file|max:2048,jpeg,png,jpg',  
        ], 
        [
            "namabiro.required" => "Please enter nama biro",
            "namatour.required" => "Please enter nama tour",
            "kategori.required" => "Please enter kategori",
            "highlight.required" => "Please enter highlight",
            "durasi.required" => "Please enter durasi",
            "harga.required" => "Please enter harga",
            "deskripsi.required" => "Please enter deskripsi",
            "fasilitas.required" => "Please enter fasilitas",
            "lokasi.required" => "Please enter lokasi",
        ]);

        if($request->hasFile('image')){
            $request->validate(['image' => 'image|file|max:2048,jpeg,png,jpg', ]);
            Storage::delete($tour->image);
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->namatour.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/tour/',$filename);
            $tour->image = $filename;
        }

        $tour->namabiro = $request->namabiro;
        $tour->namatour = $request->namatour;
        $tour->kategori = $request->kategori;
        $tour->highlight = $request->highlight;
        $tour->durasi = $request->durasi;
        $tour->harga = $request->harga;
        $tour->deskripsi = $request->deskripsi;
        $tour->fasilitas = $request->fasilitas;
        $tour->lokasi = $request->lokasi;
        $tour->save();

        return redirect('datatour')->with('toast_success','Data Telah Diupdate');
        
    }

     // method untuk hapus data tour
     public function hapus($id)
     {
         $tour = Tour::find($id);
         $path = 'storage/image/tour/'.$tour->image;
         if(File::exists($path)){
             File::delete($path);
         }
         $tour->delete();
         
         return back() -> with('toast_info', "Data berhasil dihapus!");
     }
 
     public function show($id){
 
         return $id;
     }

    //  approve tampilan tour
     public function manajementour()
     {  $tour = DB::table('tour')->simplepaginate(5);
         return view('dashboard.manajementour',['tour' => $tour]);
     }

    //  fungsi approve
    public function approve (Request $request, $id){
        $approve = DB::table('tour')
                    -> where('id_tour',$id)
                    ->update([
                        'status'=> 2
                    ]);

        return redirect('manajementour')->with('toast_success','Data Telah Diupdate');
    }


}
