<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{

    public function index()
    {
        return view('Login.Login', ['result' => null]);
    }

    public function Confirmacion(Request $request)
    {
        $user = $request->input('user');
        $password = $request->input('password');

        return view('Login.Login', ['result' => 'Login Exitoso']);
        /* if ($user == 'admin' && $password == 'admin') {
        return redirect()->intended('dashboard');
        }else{
            return redirect()->intended('login');
        } */
    }
}
