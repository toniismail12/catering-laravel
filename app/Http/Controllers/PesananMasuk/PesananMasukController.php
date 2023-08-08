<?php

namespace App\Http\Controllers\PesananMasuk;

use App\Http\Controllers\Controller;
use App\Models\PesananMasuk;
use Illuminate\Http\Request;

class PesananMasukController extends Controller
{
   
    public function pesanan_masuk(){

        return view('admin.pesanan-masuk.index',[
            'data' => PesananMasuk::orderBy('id', 'desc')->get(),
        ]);
        
    }

    public function bukti_bayar(Request $request){

        $detail = PesananMasuk::Where('uuid', $request->uuid)->first();

        return view('admin.pesanan-masuk.bukti-bayar',[
            'bukti_bayar' => $detail->bukti_bayar,
        ]);
        
    }

    public function terima_pesanan(Request $request){

        PesananMasuk::where('uuid', $request->uuid)->update([
            'status' => 'dikonfirmasi, pesanan sedang disiapkan admin',
        ]);
        
        return redirect('/pesanan-masuk')->with('success', 'pesanan berhasil dikonfirmasi.');
    }

    public function tolak_pesanan(Request $request){

        PesananMasuk::where('uuid', $request->uuid)->update([
            'status' => 'ditolak, pesanan ditolak admin',
        ]);
        
        return redirect('/pesanan-masuk')->with('danger', 'pesanan ditolak.');
    }

    public function sedang_diantar(Request $request){

        PesananMasuk::where('uuid', $request->uuid)->update([
            'status' => 'pesanan sedang diantar',
        ]);
        
        return redirect('/pesanan-masuk')->with('success', 'pesanan berhasil di update sedang diantar.');
    }

    public function pesanan_selesai(Request $request){

        PesananMasuk::where('uuid', $request->uuid)->update([
            'status' => 'pesanan-selesai',
        ]);
        
        return redirect('/pesanan-masuk')->with('success', 'pesanan selesai.');
    }
}
