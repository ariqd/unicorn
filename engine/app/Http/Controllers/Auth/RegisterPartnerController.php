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
        dd($request->all());

        $this->post('partner', $request->all());

        return redirect('login')->with('info', 'Pendaftaran Partner Berhasil!');
    }
}
