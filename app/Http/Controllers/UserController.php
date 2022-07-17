<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index_login(){
        return view('admin.index');
     }
    public function tambah_user(){
       return view('admin.tambah_user');
    }
    public function proses_tambah_user(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
            'konfirm_password' => 'required|same:password',
        ]);

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('tambah_user')->with('success', 'Registration success. Please login!');
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

    public function lihat_user(){
        $user=User::orderBy('user_id','desc')->paginate(10);
        return view('admin.lihat_user',compact('user'));

    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit_user', ['user' => $user]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'konfirm_password' => 'required|same:password',
        ]);

        $userData = $request->only(["name","username","password"]);
        $userData['password'] = Hash::make($userData['password']);
        User::find($id)->update($userData);
        return redirect()->route('admin.lihat_user')
                        ->with('success','user has been update successfully.');
    }
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('admin.lihat_user')
                        ->with('success','User deleted successfully');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('admin');
    }




}
