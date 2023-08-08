<?php

namespace App\Http\Controllers\RiwayatTransaksi;

use App\Http\Controllers\Controller;
use App\Models\PesananALat;
use App\Models\PesananMasuk;
use Illuminate\Http\Request;

class RiwayatTransaksiController extends Controller
{
    public function riwayat_pesan_catering(){

        if(auth()->user()->role == 'admin'){
            return view('admin.riwayat.pesan-catering',[
                'data' => PesananMasuk::Where('status', 'pesanan-selesai')->orderBy('id', 'desc')->get(),
            ]);
            
        }

        if(auth()->user()->role == 'pelanggan'){
            return view('admin.riwayat.pesan-catering',[
                'data' => PesananMasuk::Where('email', auth()->user()->email)->orderBy('id', 'desc')->get(),
            ]);
            
        }
       
    }

    public function riwayat_sewa_alat(){

        if(auth()->user()->role == 'admin'){
            return view('admin.riwayat.sewa-alat',[
                'data' => PesananALat::Where('status', 'pesanan-selesai')->orderBy('id', 'desc')->get(),
            ]);
            
        }

        if(auth()->user()->role == 'pelanggan'){
            return view('admin.riwayat.sewa-alat',[
                'data' => PesananALat::Where('email', auth()->user()->email)->orderBy('id', 'desc')->get(),
            ]);
            
        }
        
    }
}
