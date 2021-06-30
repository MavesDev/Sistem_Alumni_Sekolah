<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AlumnisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (request()->has('alumni_course')) 
        {
            $users = User::where('alumni_course', 'like', '%'.request('alumni_course').'%')->orderby('created_at', 'desc')->simplePaginate(3);
        }
        else if (request()->has('alumni_last_year')) 
        {
            $users = User::where('alumni_last_year', 'like', '%'.request('alumni_last_year').'%')->orderby('created_at', 'desc')->simplePaginate(3);
        } 
        else if (request()->has('alumni_generation')) 
        {
            $users = User::where('alumni_generation', 'like', '%' . request('alumni_generation') . '%')->orderby('created_at', 'desc')->simplePaginate(3);
        }
        else if (request()->has('search')) {
            $users = User::where('name', 'like', '%' . request('search') . '%')->orderby('created_at', 'desc')->simplePaginate(3);
        }
        else 
        {
            $users = User::orderby('created_at', 'desc')->simplePaginate(3);
        }

        return view('Alumni.daftar-alumni', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(User $user)
    {
        $dataUser = [
            'id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'password' => Auth::user()->password,
            'alumni_email' => Auth::user()->alumni_email,
            'alumni_code' => Auth::user()->alumni_code,
            'alumni_course' => Auth::user()->alumni_course,
            'alumni_generation' => Auth::user()->alumni_generation,
            'alumni_job' => Auth::user()->alumni_job,
            'alumni_job_desc' => Auth::user()->alumni_job_desc,
            'alumni_image' => Auth::user()->alumni_image,
            'alumni_desc' => Auth::user()->alumni_desc,
            'whatsapp' => Auth::user()->whatsapp,
            'instagram' => Auth::user()->instagram,
            'twitter' => Auth::user()->twitter,
        ];

        return view('Alumni.User.index', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('Alumni.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('Alumni.update', compact('user'));
    }

    public function editUser(User $user)
    {
        return view('Alumni.User.update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'alumni_job' => 'required',
            'alumni_last_year' => 'required|size:4',
            'alumni_generation' => 'required',
            'alumni_course' => 'required',
            'alumni_domisil' => 'required',
        ]);

        if ($request->alumni_image == null) {
            User::where('id', $user->id)
                ->update([
                    'name' => $request->name,
                    'email' => $user->email,
                    'password' => bcrypt($user->password),
                    'alumni_code' => $user->alumni_code,
                    'alumni_course' => $request->alumni_course,
                    'alumni_last_year' => $request->alumni_last_year,
                    'alumni_generation' => $request->alumni_generation,
                    'alumni_image' => $user->alumni_image,
                    'alumni_domisil' => $request->alumni_domisil,
                    'alumni_job_desc' => $request->alumni_job_desc,
                    'alumni_desc' => $request->alumni_desc,
                    'alumni_job' => $request->alumni_job,
                    'whatsapp' => $request->whatsapp,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter
                ]);



            return redirect('/alumnis')->with('toast_success', 'Alumni Sukses Diubah!');
        } else {
            $imgName = $request->alumni_image->getClientOriginalName() . '-' . time() . '.' . $request->alumni_image->extension();

            $request->alumni_image->move(public_path('img/User/Profil'), $imgName);


            User::where('id', $user->id)
                ->update([
                    'name' => $request->name,
                    'email' => $user->email,
                    'password' => bcrypt($user->password),
                    'alumni_code' => $user->alumni_code,
                    'alumni_course' => $request->alumni_course,
                    'alumni_last_year' => $request->alumni_last_year,
                    'alumni_generation' => $request->alumni_generation,
                    'alumni_image' => $imgName,
                    'alumni_domisil' => $request->alumni_domisil,
                    'alumni_job_desc' => $request->alumni_job_desc,
                    'alumni_desc' => $request->alumni_desc,
                    'alumni_job' => $request->alumni_job,
                    'whatsapp' => $request->whatsapp,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter
                ]);



            return redirect('/alumnis')->with('toast_success', 'Alumni Sukses Diubah!');
        }
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'alumni_job' => 'required',
            'alumni_last_year' => 'required|size:4',
            'alumni_generation' => 'required',
            'alumni_course' => 'required',
            'alumni_domisil' => 'required',
        ]);

        if ($request->alumni_image == null) 
        {
            User::where('id', $user->id)
            ->update([
                'name' => $request->name,
                'email' => $user->email,
                'password' => bcrypt($user->password),
                'alumni_code' => $user->alumni_code,
                'alumni_course' => $request->alumni_course,
                'alumni_last_year' => $request->alumni_last_year,
                'alumni_generation' => $request->alumni_generation,
                'alumni_image' => $user->alumni_image,
                'alumni_domisil' => $request->alumni_domisil,
                'alumni_job_desc' => $request->alumni_job_desc,
                'alumni_desc' => $request->alumni_desc,
                'alumni_job' => $request->alumni_job,
                'whatsapp' => $request->whatsapp,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter
            ]);



            return redirect('/alumnis')->with('toast_success', 'Alumni Sukses Diubah!');
        }
        else 
        {
            $imgName = $request->alumni_image->getClientOriginalName() . '-' . time() . '.' . $request->alumni_image->extension();

            $request->alumni_image->move(public_path('img/User/Profil'), $imgName);


            User::where('id', $user->id)
                ->update([
                    'name' => $request->name,
                    'email' => $user->email,
                    'password' => bcrypt($user->password),
                    'alumni_code' => $user->alumni_code,
                    'alumni_course' => $request->alumni_course,
                    'alumni_last_year' => $request->alumni_last_year,
                    'alumni_generation' => $request->alumni_generation,
                    'alumni_image' => $imgName,
                    'alumni_domisil' => $request->alumni_domisil,
                    'alumni_job_desc' => $request->alumni_job_desc,
                    'alumni_desc' => $request->alumni_desc,
                    'alumni_job' => $request->alumni_job,
                    'whatsapp' => $request->whatsapp,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter
                ]);



            return redirect('/alumnis')->with('toast_success', 'Alumni Sukses Diubah!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/alumnis')->with('toast_warning', 'Alumni Dihapus!');
    }

    public function report()
    {

        if (request()->has('alumni_course')) {
            $users = User::where('alumni_course', 'like', '%' . request('alumni_course') . '%')->orderby('created_at', 'desc')->get();
            $userss = User::where('alumni_course', 'like', '%' . request('alumni_course') . '%')->orderby('created_at', 'desc')->simplePaginate(1);
        } else if (request()->has('alumni_last_year')) {
            $users = User::where('alumni_last_year', 'like', '%' . request('alumni_last_year') . '%')->orderby('created_at', 'desc')->get();
            $userss = User::where('alumni_last_year', 'like', '%' . request('alumni_last_year') . '%')->orderby('created_at', 'desc')->simplePaginate(1);
        } else if (request()->has('alumni_generation')) {
            $users = User::where('alumni_generation', 'like', '%' . request('alumni_generation') . '%')->orderby('created_at', 'desc')->get();
            $userss = User::where('alumni_generation', 'like', '%' . request('alumni_generation') . '%')->orderby('created_at', 'desc')->simplePaginate(1);
        } else if (request()->has('level')) {
            $users = User::where('level', 'like', '%' . request('level') . '%')->orderby('created_at', 'desc')->get();
        } else {
            $users = User::orderby('created_at', 'desc')->get();
        }

        return view('Alumni.report', compact('users','userss'));
    }

    public function print(User $user)
    {
        return view('Alumni.User.report', compact('user'));
    }

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

