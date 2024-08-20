<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        if(Auth::check()) {
            return redirect('/');
        }
        return view('auth.register');
    }

    public function create(RegisterFormRequest $request) {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['role'] = config('roles.customer');
        $user = User::create($data);
        Auth::login($user);
        return redirect('/');
    }
}
