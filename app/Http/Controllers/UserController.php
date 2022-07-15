<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function tambah_user(){
       return view('admin.tambah_user');
    }
    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return view('admin.home');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }
    public function tambah_berita(){
        return view('admin.tambah_berita');
     }

}
