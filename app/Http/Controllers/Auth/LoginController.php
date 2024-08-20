<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        if(Auth::check()) {
            return redirect('/');
        }
        return view('auth.login');
    }

    public function login(LoginFormRequest $request) {
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect('/');
        }
        return redirect()->back()->with('error', 'Email hoặc mật khẩu không chính xác');
    }
}
