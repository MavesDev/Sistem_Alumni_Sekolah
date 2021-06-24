<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Beranda;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function about()
    {
        return  view('about');
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
            'password' => 'required|min:6|confirmed',
            'alumni_image' => 'required',
            'alumni_code' => 'required|size:8',
            'alumni_job' => 'required',
            'alumni_last_year' => 'required|size:4',
            'alumni_generation' => 'required',
            'alumni_course' => 'required',
            'alumni_domisil' => 'required'
        ]);

        $imgName = $request -> alumni_image -> getClientOriginalName(). '-'. time(). '.'. $request->alumni_image->extension();

        $request->alumni_image->move(public_path('img/User/Profil'), $imgName);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alumni_code' => $request->alumni_code,
            'alumni_course' => $request->alumni_course,
            'alumni_last_year' => $request->alumni_last_year,
            'alumni_generation' => $request->alumni_generation,
            'alumni_image' => $imgName,
            'alumni_domisil' => $request->alumni_domisil,
            'alumni_job' => $request->alumni_job
        ]);

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/login");
    }
}