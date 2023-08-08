<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PesananALat;
use App\Models\PesananMasuk;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   
    public function index()
    {
        return view('admin.index',[
            'jumlah_pesanan_catering' => PesananMasuk::count(),
            'jumlah_sewa_alat' => PesananALat::count(),
            'jumlah_pelanggan' => User::Where('role', 'pelanggan')->count(),
        ]);
    }

    public function data_pelanggan()
    {
        return view('admin.pelanggan.index',[
            'data' => User::Where('role', 'pelanggan')->get(),
        ]);
    }

}
