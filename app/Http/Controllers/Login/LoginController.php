<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
  
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function save_register(Request $request)
    {
        $data = User::Where('email', $request->email)->count();
        if($data > 0 ) {
            return redirect('/register')->with('danger', 'email yang anda daftarkan sudah terdaftar.');
        }

        User::create([
            'uuid'=>Str::uuid(),
            'name'=>$request->name,
            'wa'=>$request->nohp,
            'email'=>$request->email,
            'username'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>'pelanggan',
            'alamat'=>$request->alamat,
        ]);

        return redirect('/login')->with('success', 'berhasil register, silahkan login dengan email dan password yang anda daftarkan.');
    }
   
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]); 

        if (Auth::attempt($credentials)){

            $request->session()->regenerate();

            if(auth()->user()->role == 'admin')
            {
                return redirect()->intended('/dashboard-admin')->with('success', 'selamat datang di alesha catering');
            }

            if(auth()->user()->role == 'pelanggan')
            {
                return redirect()->intended('/dashboard-pelanggan')->with('success', 'selamat datang di alesha catering');
            }

        }

        return back()->with('login_error', "Failed Login");
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
