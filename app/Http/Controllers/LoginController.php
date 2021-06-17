<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('username','password'))) {
            return redirect()
                    ->route('dashboard')
                    ->with('message', 'Berhasil login!');
        }

        return redirect()
                ->route('login')
                ->with('error', 'Gagal login!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register()
    {
        return view('auths.register');
    }

    public function postregist(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'min:6|required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'alamat' => $request['alamat'],
            'telepon' => $request['telepon'],
        ]);

        return redirect()
                ->route('login')
                ->with('message', 'Berhasil Daftar dan Silahkan Login');
    }
}
