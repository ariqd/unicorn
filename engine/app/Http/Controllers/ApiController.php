<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllDriver()
    {
        return view("admin.driver.index",$this->get("drivers"));
    }

    public function login(Request $request)
    {
        $data = [
            "username" => $request["username"],
            "password" => $request["password"]
        ];
        dd($this->post("users_login", $data));
    }

    public function getUserDetail(Request $request)
    {
        $data = $request["id"];
        dd($this->get("users/$data"));
    }

    public function userRegis(Request $request)
    {

        $data = [
            "name"=>$request["name"],
            "username"=>$request["username"],
            "password"=>$request["password"],
            "telephone"=>$request["telephone"],
            "profilePic"=>$request->file('profile')
        ];
        dd($this->post("users",$data));
    }

    public function userUpdateKTP(Request $request)
    {
        $id = $request["id"];
        $foto = $request->file("ktp");

        dd($this->put("usersktp/$id", $foto));
    }




}
