<?php

namespace App\Http\Controllers\SewaAlat;

use App\Http\Controllers\Controller;
use App\Models\SewaAlat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SewaAlatController extends Controller
{
    public function index(Request $request){
       
        return view('admin.sewa-alat.index',[
            'data' => SewaAlat::Where('kategory', $request->kategori)->orderBy('id', 'asc')->get(),
            'kategori' => $request->kategori,
        ]);
    }

    public function tambah_alat(Request $request){
       
        return view('admin.sewa-alat.tambah-data',[
            'kategori' => $request->kategori,
        ]);
    }

    public function simpan_tambah_alat(Request $request){

        SewaAlat::create([
            "uuid"=>Str::uuid(),
            "nama_alat"=>$request->nama_alat,
            "biaya"=>$request->biaya,
            "kategory"=>$request->kategori, 
        ]);
       
        return redirect("sewa-alat?kategori=".$request->kategori)->with('success', "berhasil manmbahkan data alat");
    }

    public function update_alat($uuid, Request $request){
       
        return view('admin.sewa-alat.update-data',[
            'data' => SewaAlat::Where('uuid', $uuid)->get(),
            "kategori"=>$request->kategori, 
        ]);
    }

    public function simpan_update_alat(Request $request, $uuid){
       
        SewaAlat::Where('uuid', $uuid)->update([
            "nama_alat"=>$request->nama_alat,
            "biaya"=>$request->biaya,
            "kategory"=>$request->kategori, 
        ]);
       
        return redirect("sewa-alat?kategori=".$request->kategori)->with('success', "berhasil update data alat");
    }

    public function hapus_alat($uuid, Request $request){

        SewaAlat::Where('uuid', $uuid)->delete();

        return redirect('/sewa-alat?kategori='.$request->kategori)->with('success', 'Berhasil Hapus Data !!');

    }
}
