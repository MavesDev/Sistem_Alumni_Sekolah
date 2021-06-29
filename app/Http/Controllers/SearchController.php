<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {


        if (request()->has('search')) {
            $user = User::where('name', 'like', '%' . request('search') . '%')->paginate(8);
        } else {
            $user = User::paginate(8);
        }

        $users = $user;

        return view('Alumni.daftar-alumni', compact('users'));
    }
}
