<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{

    public function index()
    {
        return view('loginpage');
    }

    public function loginproses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->with('success', 'Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registrasi()
    {
        if (Auth::check()) {
            return view('registrasi');
        }

        return redirect("login")->with('error', 'You are not allowed to access');
    }

    public function registrasiproses(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect()->route('dashboard')->with('sucess', 'You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('welcome');
        }

        return redirect()->route('halaman.login')->with('error', 'You are not allowed to access');
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
