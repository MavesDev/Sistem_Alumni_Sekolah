<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GalerisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (request()->has('galeri_course') && request()->has('galeri_last_year') && request()->has('galeri_generation')) 
        {
            $users = Galeri::where('galeri_course', 'like', '%' . request('galeri_course') . '%')
            ->where('galeri_last_year', 'like', '%' . request('galeri_last_year') . '%')
            ->where('galeri_generation', 'like', '%' . request('galeri_generation') . '%')
            ->where('name', 'like', '%' . request('search') . '%')
            ->orderby('created_at', 'desc')
            ->simplePaginate(3);
        }
        else if (request()->has('search')) 
        {
            $galeris = Galeri::where('galeri_name', 'like', '%' . request('search') . '%')->orderby('created_at', 'desc')->simplePaginate(10);
        } else 
        {
            $galeris = Galeri::simplePaginate(10);
        }

        return view('Galeri.index', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Galeri.create');
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
            'galeri_name' => 'required',
            'galeri_image' => 'required|mimes:jpeg,jpg,png',
            'galeri_course' => 'required',
            'galeri_last_year' => 'required'
        ]);

        $imgName = $request->galeri_image->getClientOriginalName() . '-' . time() . '.' . $request->galeri_image->extension();

        $request->galeri_image->move(public_path('img/Postingan/Galeri'), $imgName);

        // Book::create($request->all());


        Galeri::create([
            'galeri_name' => $request->galeri_name,
            'galeri_image' => $imgName,
            'galeri_course' => $request->galeri_course,
            'galeri_last_year' => $request->galeri_last_year
        ]);

        return redirect('/galeris')->with('toast_success', 'Foto Sukses Diunggah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        Galeri::destroy($galeri->id);

        return redirect('/galeris')->with('toast_warning', 'Foto Dihapus!');
    }
}
