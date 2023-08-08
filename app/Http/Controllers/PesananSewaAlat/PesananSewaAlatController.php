<?php

namespace App\Http\Controllers\PesananSewaAlat;

use App\Http\Controllers\Controller;
use App\Models\PesananALat;
use Illuminate\Http\Request;

class PesananSewaAlatController extends Controller
{
    public function pesanan_masuk_alat(){

        return view('admin.pesanan-masuk-alat.index',[
            'data' => PesananALat::orderBy('id', 'desc')->get(),
        ]);
        
    }

    public function bukti_bayar_alat(Request $request){

        $detail = PesananALat::Where('uuid', $request->uuid)->first();

        return view('admin.pesanan-masuk-alat.bukti-bayar',[
            'bukti_bayar' => $detail->bukti_bayar,
        ]);
        
    }

    public function terima_pesanan_alat(Request $request){

        PesananALat::where('uuid', $request->uuid)->update([
            'status' => 'dikonfirmasi, pesanan sedang disiapkan',
        ]);
        
        return redirect('/pesanan-masuk-alat')->with('success', 'pesanan berhasil dikonfirmasi.');
    }

    public function tolak_pesanan_alat(Request $request){

        PesananALat::where('uuid', $request->uuid)->update([
            'status' => 'ditolak, pesanan ditolak admin',
        ]);
        
        return redirect('/pesanan-masuk-alat')->with('danger', 'pesanan ditolak.');
    }

    public function sedang_diantar_alat(Request $request){

        PesananALat::where('uuid', $request->uuid)->update([
            'status' => 'pesanan sedang diantar',
        ]);
        
        return redirect('/pesanan-masuk-alat')->with('success', 'pesanan berhasil di update sedang diantar.');
    }

    public function pesanan_selesai_alat(Request $request){

        PesananALat::where('uuid', $request->uuid)->update([
            'status' => 'pesanan-selesai',
        ]);
        
        return redirect('/pesanan-masuk-alat')->with('success', 'pesanan selesai.');
    }

}
