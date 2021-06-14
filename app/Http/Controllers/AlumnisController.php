<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
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
        $alumnis = Alumni::paginate(10);

        return view('Alumni.daftar-alumni', compact('alumnis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'alumni_name' => 'required',
            'alumni_code' => 'required|size:8|unique:alumnis,alumni_code',
            'alumni_email' => 'required',
            'alumni_job' => 'required',
            'alumni_last_year' => 'required|size:4',
            'alumni_image' => 'required',
            'alumni_desc' => 'max:500'
        ]);

        // $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();

        // $request->image->move(public_path('image/Book'), $imgName);

        // Book::create($request->all());


        Alumni::create([
            'alumni_name' => $request->alumni_name,
            'alumni_code' => $request->alumni_code,
            'alumni_email' => $request->alumni_email,
            'alumni_job' => $request->alumni_job,
            'alumni_last_year' => $request->alumni_last_year,
            'alumni_image' => $request->alumni_image,
            'alumni_desc' => $request->alumni_desc
        ]);

        return redirect('/alumnis')->with('status', 'Alumni ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni)
    {
        return view('Alumni.update', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        $request->validate([
            'alumni_name' => 'required',
            'alumni_code' => 'required|size:8',
            'alumni_email' => 'required',
            'alumni_job' => 'required',
            'alumni_last_year' => 'required|size:4',
            'alumni_image' => 'required',
            'alumni_desc' => 'max:500'
            ]);

        Alumni::where('id', $alumni->id)
            ->update([
                'alumni_name' => $request->alumni_name,
                'alumni_code' => $alumni->alumni_code,
                'alumni_email' => $request->alumni_email,
                'alumni_job' => $request->alumni_job,
                'alumni_last_year' => $request->alumni_last_year,
                'alumni_image' => $request->alumni_image,
                'alumni_desc' => $request->alumni_desc,
            ]);

            
        return redirect('/alumnis')->with('status', 'Alumni diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni)
    {
        Alumni::destroy($alumni->id);

        return redirect('/alumnis')->with('status', 'Alumni Dihapus!');
    }
}
