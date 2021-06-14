<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function home()
    {
        return view('beranda');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back();
        }

        return redirect("/home");
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/login");
    }
}