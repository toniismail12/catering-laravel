<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        return view('pelanggan.index');
    }

    public function update_password()
    {
        return view('update-password.index');
    }

    public function update_password_post(Request $request)
    {
        if($request->password !== $request->password_retype) {

            return redirect('/update-password')->with('danger', 'Password dan Retype Password tidak sama !');
        }

        User::Where('email', auth()->user()->email)->update([
            'password'=>bcrypt($request->password),
        ]);

        return redirect('/update-password')->with('success', 'Berhasil Update Password.');
    }
}
