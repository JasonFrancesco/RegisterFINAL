<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register' , $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 
            'required',
            [   'string',
                'min:8',      // Minimal panjang password 8 karakter
                'regex:/[A-Z]/',  // Harus ada huruf besar
                'regex:/[a-z]/',  // Harus ada huruf kecil
                'regex:/[0-9]/',  // Harus ada angka
                'regex:/[!@#$%^&*(),.?":{}|<>]/'  // Harus ada tanda
            ],
            'password_confirm' => 'required|same:password',   
        ]);
        $user = new User([
            'name' => $request->name,
            'username' => $request-> username,
            'password' => Hash::make( $request->username),
        ]);

        $user->save();
        return redirect()->route('login')->with('success', 'Registration Sucess. Please Login!');
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login' , $data);
    }
}
