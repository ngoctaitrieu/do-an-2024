<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginAdminController extends Controller
{
    public function index()
    {
//        User::create([
//            'name' => 'Super admin',
//            'phone' => '0978373633',
//            'email' => 'admin@gmail.com',
//            'password' => Hash::make('admin'),
//            'role' => 2
//        ]);
        return view('admin.login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role' => config('roles.admin')])) {
            return redirect()->route('admin.index');
        }
        return redirect()->back()->with('error', 'Email hoặc mật khẩu không chính xác');
    }
}
