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
        // dd($this->get('users'));
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

        // TODO: Upload KTP foto & KTP selfie
        $ktp_foto = $input['ktp_foto'];
        $ktp_selfie = $input['ktp_selfie'];
        unset($input['ktp_foto']);
        unset($input['ktp_selfie']);
        unset($input['password_confirmation']);
        $input['filename'] = '';
        // dd($input);

        $this->post('usersNoPhoto', $input);

        return redirect('/login')->with('info', 'Registrasi berhasil! Silahkan login');
        // $client = new Client(['headers' => [
        //     'Content-Type' => 'application/json'
        // ]]);
        // try {
        //     $response = $client->post("http://makayasaareca.com:50855/api/users", [
        //         'json' => $input
        //     ]);
        // } catch (Exception $e) {
        //     return redirect()->back()->withInput($request->all())->with('warning', 'Register failed! Something Wrong');
        // }
        // return "store";
    }
}
