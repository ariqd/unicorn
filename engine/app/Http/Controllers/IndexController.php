<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $drivers = $this->get('drivers');
        dd($drivers);

        return view('index');
    }
}
