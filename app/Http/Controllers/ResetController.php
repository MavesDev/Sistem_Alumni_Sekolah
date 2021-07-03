<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ResetController extends Controller
{
    public function ConfirmEmail()
    {

        if (request()->has('email')) 
        {
            $users = User::where('email', 'like', '%' . request('email') . '%')->orderby('created_at', 'desc')->get();
        }

        return view('Auth.confirmEmail', compact('users'));

    }


    public function edit(User $user)
    {
        return view('Auth.UpdatePassword', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);

        User::where('id', $user->id)
            ->update([
                'password' => bcrypt($request->password)
            ]);

        return redirect('/login')->with('toast_success', 'Password Diubah!');
    }
}
