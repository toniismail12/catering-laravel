<?php

namespace App\Http\Controllers\PaketCatering;

use App\Http\Controllers\Controller;
use App\Models\PaketCatering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PaketCateringController extends Controller
{
    public function index(){
        return view('admin.paket-catering.index',[
            'data' => PaketCatering::orderBy('id', 'desc')->get(),
        ]);
    }

    public function tambah_paket_catering(){
        return view('admin.paket-catering.tambah-data');
    }

    public function simpan_menu_catering(Request $request){

        $img = $request->file('image')->store('img-menu');

        PaketCatering::create([
            'uuid' => Str::uuid(),
            'nama' => $request->nama,
            'harga' => $request->harga,
            'paket' => $request->paket,
            'kategori' => $request->kategori,
            'descripsi' => $request->descripsi,
            'image' => $img,
        ]);

        return redirect('/paket-catering')->with('success', 'Berhasil Tambah Data !!');

    }

    public function update_menu_catering($uuid){

        return view('admin.paket-catering.update-menu-catering',[
            'data' => PaketCatering::Where('uuid', $uuid)->get(),
        ]);

    }

    public function simpan_update_menu_catering(Request $request, $uuid){

        $img = $request->file('image');
        
        $img_name = '';

        if($img){
            $img_name = $request->file('image')->store('img-menu');
        }
        if($img == null){
            $img_name = $request->old_image;
        }

        PaketCatering::where('uuid', $uuid)->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'paket' => $request->paket,
            'kategori' => $request->kategori,
            'descripsi' => $request->descripsi,
            'image' => $img_name,
        ]);

        return redirect('/paket-catering')->with('success', 'Berhasil update Data !!');

    }

    public function hapus_paket_menu($uuid){

        PaketCatering::Where('uuid', $uuid)->delete();

        return redirect('/paket-catering')->with('success', 'Berhasil Hapus Data !!');

    }
}
