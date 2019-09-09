<?php

namespace App\Http\Controllers\Auth;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('auth.register.user');
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

        $ktp_foto['ktp'] = $input['ktp_foto'];
        $ktp_selfie['selfie'] = $input['ktp_selfie'];
        unset($input['ktp_foto']);
        unset($input['ktp_selfie']);
        unset($input['password_confirmation']);

        $user = $this->post('usersNoPhoto', $input);

        // $this->put('usersktp/' . $user->_id, $ktp_foto);
        // $this->put('usersselfie/' . $user->_id, $ktp_selfie);

        return redirect('/login')->with('info', 'Registrasi berhasil! Silahkan login');
    }
}
