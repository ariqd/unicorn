<?php

namespace App\Http\Controllers\Auth;

use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect('/admin')->with('login-success', 'You are logged in!');
    }

    public function login(Request $request)
    {
        $client = new Client(['headers' => [
            'Content-Type' => 'application/json'
        ]]);
        $input = $request->all();
        unset($input["_token"]);
        try {
            $response = $client->post("http://localhost:3000/api/users_login", [
                'json' => $input
            ]);
        } catch (Exception $e) {
            return redirect()->back()->withInput($request->all())->with('warning', 'Login failed! Something Wrong');
        }
        if ($response->getStatusCode() != 200) {
            return redirect('/login')->with('warning', 'Login failed! Wrong Email/Password');
        }
        $response = json_decode($response->getBody()->getContents());
        
        $request->session()->put('token', $response->userToken);
        $request->session()->put('user', $response->data);
        
        return redirect("admin");
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/')->with('info', 'Logout success!');
    }
}
