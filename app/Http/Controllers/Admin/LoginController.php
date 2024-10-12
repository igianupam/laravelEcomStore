<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request){
        // return $request->all();

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        Toastr::error('WRONG USERNAME OR PASSWORD ','Error');
        return back();
    }

    public function logout(){

        Auth::logout();
        Toastr::success('Logout successfully :)','Success');
        return redirect()->route('admin.login');
    }
}
