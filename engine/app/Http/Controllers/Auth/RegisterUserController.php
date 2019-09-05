<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('auth.register.user');
    }

    public function store(Request $request) 
    {
        $request->all()->dd();

        // return "store";
    }
}
