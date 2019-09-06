<?php

namespace App\Http\Controllers\Auth;

use GuzzleHttp\Client;
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
    	$input = $request->all();
        unset($input["_token"]);
        $client = new Client(['headers' => [
            'Content-Type' => 'application/json'
        ]]);
        try {
            $response = $client->post("http://makayasaareca.com:50855/api/users", [
                'json' => $input
            ]);
        } catch (Exception $e) {
            return redirect()->back()->withInput($request->all())->with('warning', 'Register failed! Something Wrong');
        }
        // return "store";
    }
}
