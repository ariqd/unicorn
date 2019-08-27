<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function coba()
    {
        dd($this->get("drivers"));
    }

    public function connect() {
    	$data = [
    		"username"=>"james",
    		"password"=>"12345678"
    	];
    	dd($this->post("users_login",$data));
    }

    
    
}
