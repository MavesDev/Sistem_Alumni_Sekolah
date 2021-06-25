<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;

class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->has('post_course')) 
        {
            $posts = Postingan::where('post_course', 'like', '%' . request('post_course') . '%')->paginate(8);
        }
        else 
        {
            $posts = Postingan::paginate(8);
        }

        return view('Postingan.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Postingan.create');
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
            'post_name' => 'required',
            'post_image' => 'required',
            'post_course' => 'required',
            'post_desc' => 'required'
        ]);

        $imgName = $request->post_image->getClientOriginalName() . '-' . time() . '.' . $request->post_image->extension();

        $request->post_image->move(public_path('img/Postingan/post'), $imgName);

        // Book::create($request->all());


        Postingan::create([
            'post_name' => $request->post_name,
            'post_image' => $imgName,
            'post_course' => $request->post_course,
            'post_desc' => $request->post_desc
        ]);

        return redirect('/posts')->with('status', 'Postingan Diunggah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function show(Postingan $postingan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function edit(Postingan $postingan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postingan $postingan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postingan $postingan)
    {
        Postingan::destroy($postingan->id);

        return redirect('/posts')->with('status', 'Postingan Dihapus!');
    }
}
