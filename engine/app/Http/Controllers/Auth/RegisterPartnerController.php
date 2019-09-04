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
        $request->all()->dd();

        // return "store";
    }
}
