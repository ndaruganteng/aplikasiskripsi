<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tour;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\pemesanan;
use App\Models\rekening;


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

    public function store(Request $request)

    {
        $pemesanan = new Pemesanan;
        $pemesanan->namauser= $request->input('namauser');
        $pemesanan->namatour= $request->input('namatour');
        $pemesanan->durasi= $request->input('durasi');
        $pemesanan->hargasatuan= $request->input('hargasatuan');
        $pemesanan->hargatotal= $request->input('hargatotal');
        $pemesanan->jumlahorang= $request->input('jumlahorang');
        $pemesanan->tanggalberangkat= $request->input('tanggalberangkat');
        $pemesanan->status = null;
        if($request->hasFile('buktitf')){
            $file = $request->file('buktitf');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->namauser.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/bukti-transfer/',$filename);
            $pemesanan->buktitf = $filename;
        }
       
        $pemesanan->save();

        return redirect('/cart') -> with('success', "Data berhasil ditambahkan!");
    }

     //  approve tampilan pemesanan
     public function manajemenorder()
     
     {  $pemesanan = DB::table('pemesanan')->simplepaginate(5);
         return view('dashboard.manajemenorder',['pemesanan' => $pemesanan]);
     }

      //  fungsi approve
    public function konfirmasi (Request $request, $id){
        $konfirmasi = DB::table('pemesanan')
                    -> where('id_pemesanan',$id)
                    ->update([
                        'status'=> 2
                    ]);

        return redirect('manajemenorder')->with('toast_success','Data Telah Diupdate');
    }


    public function update(Request $request, $id)
    {
        $pemesanan = Pemesanan::where('id_pemesanan', $id)->first(); 
    
        if ($request->hasFile('buktitf')) {
            $file = $request->file('buktitf');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->storeAs('image/bukti-transfer/', $filename);
            $pemesanan->buktitf = $filename;
        }
    
        $pemesanan->save(); 
        alert()->success('Berhasil','Bukti TF Berhasil diupload');
        return redirect()->back()->with('success', 'Bukti Transfer berhasil diupload');
    }


     // method untuk hapus data tour
     public function hapus($id)
     {
         $pemesanan = Pemesanan::find($id);
        //  $path = 'storage/image/bukti-transfer/'.$pemesanan->buktitf;
        //  if(File::exists($path)){
        //      File::delete($path);
        //  }
         $pemesanan->delete();
         
         return back() -> with('toast_info', "Data berhasil dihapus!");
     }

    
     public function histori()
     
     {  
        $pemesanan = DB::table('pemesanan')->simplepaginate(5);
         return view('landing.pesanan',['pemesanan' => $pemesanan]);
     }


    //  public function bank()
     
    //  {  $rekening = DB::table('rekening')->simplepaginate(5);
    //      return view('landing.cart',['rekening' => $rekening]);
    //  }
    

}
