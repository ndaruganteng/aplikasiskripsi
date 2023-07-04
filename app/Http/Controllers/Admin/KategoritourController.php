<?php

namespace App\Http\Controllers\Admin;

use App\Models\kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Carbon\Carbon;

class KategoritourController extends Controller
{
    // public function index()
    // {
    //     return view('admin.kategoritour');
    // }

    public function index()
    {   
        // mengambil data dari table kategori
    	$kategori = DB::table('kategori')->simplepaginate(5);

        return view('admin.kategoritour',['kategori' => $kategori]);
    }

    public function tambah()
    {
	// memanggil view tambah kategori
	    return view('admin.tambahkategori');
    }

    public function store(Request $request)
    {
        $validator = $request -> validate([
            'namakategori' => 'required',
            'image' => 'image|file|max:2048,jpeg,png,jpg',  
        ], 
        [
            "namakategori.required" => "Please enter nama kategori",
        ]);


        $kategori = new Kategori;
        $kategori->namakategori= $request->input('namakategori');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->namakategori.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/kategori/',$filename);
            $kategori->image = $filename;
        }
       
        $kategori->save();

        return redirect('/kategoritour')-> with('success', "Data berhasil ditambahkan!");
    }


        // method untuk edit kategoritour
        public function edit($id)
        {
    
            $kategori = Kategori:: find($id);
    
            return view('admin.editkategori', [
                'method'=> "PUT",
                'action'=> "/kategoritour/edit/{id}'",
                'kategori'=> $kategori
            ]);  
        }
        
        
         // update data kategoritour
    public function update(Request $request,$id)
    {
        $kategori = Kategori::find($id); 
               
        $validator = $request -> validate([
            'namakategori' => 'required',
            'image' => 'image|file|max:2048,jpeg,png,jpg',  
        ], 
        [
            "namakategori.required" => "Please enter activity nama kategori",
        ]);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'image|file|max:2048,jpeg,png,jpg',
              ]);
            Storage::delete($kategori->image);
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->namakategori.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/kategori/',$filename);
            $kategori->image = $filename;
        }

        $kategori->namakategori = $request->namakategori;
        $kategori->save();

        return redirect('kategoritour')->with('toast_success','Data Telah Diupdate');
        
    }

            // method untuk hapus data kategoritour
            public function hapus($id)
            {
                $kategori = Kategori::find($id);
                $path = 'storage/image/kategori/'.$kategori->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $kategori->delete();
                
                return back() -> with('error', "Data berhasil dihapus!");
            }
        
            public function show($id){
        
                return $id;
            }
}
