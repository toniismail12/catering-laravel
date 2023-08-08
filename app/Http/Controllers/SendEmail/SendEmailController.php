<?php

namespace App\Http\Controllers\SendEmail;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SendEmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = User::Where('email', $request->email)->count();

        if ($data < 1) {
            return redirect('/lupa-password')->with('success', 'Berhasil mengirim request password baru. Cek email anda untuk konfirmasi update password.');
        }

        $np = Str::random(8);

        User::Where('email', $request->email)->update([
            'password'=>bcrypt($np),
        ]);

        $details = [
            'new_password' => $np,
        ];

        Mail::to($request->email)->send(new SendEmail($details));

        return redirect('/lupa-password')->with('success', 'Berhasil mengirim request password baru. Cek email anda untuk konfirmasi update password.');
    }
}
