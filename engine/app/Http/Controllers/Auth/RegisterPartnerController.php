<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterPartnerController extends Controller
{
    public function index()
    {
        return view('auth.register.partner');
    }

    public function store(Request $request) 
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'password' => 'required|string|min:6|confirmed',
            'ktp_foto' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'ktp_selfie' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);

        $ktp_foto = $input['ktp_foto'];
        $ktp_selfie = $input['ktp_selfie'];
        unset($input['ktp_foto']);
        unset($input['ktp_selfie']);
        unset($input['password_confirmation']);
        $input['filename'] = '';
        // dd($input);

        $this->post('users', $input);

        return redirect('/login')->with('info', 'Registrasi berhasil! Silahkan login');
    }
}
