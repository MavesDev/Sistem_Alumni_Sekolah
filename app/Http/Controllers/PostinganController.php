<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->has('search')) 
        {
            $posts = Postingan::where('post_name', 'like', '%' . request('search') . '%')->orderby('created_at', 'desc')->simplePaginate(10);
        }
        else if (request()->has('post_course') && request()->has('post_category')) 
        {
            $posts = Postingan::where('post_course', 'like', '%' . request('post_course') . '%')
            ->where('post_category', 'like', '%' . request('post_category') . '%')
            ->orderby('created_at', 'desc')
            ->simplePaginate(10);
        }
        else 
        {
            $posts = Postingan::orderby('created_at','desc')->simplePaginate(10);
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
            'post_course' => 'required',
            'post_category' => 'required',
        ]);
        // Book::create($request->all());
        
        if ($request->post_image == null) 
        {
            Postingan::create([
                'post_name' => $request->post_name,
                'post_author' => Auth::user()->name,
                'post_author_id' => Auth::user()->id,
                'post_author_job' => Auth::user()->alumni_job,
                'post_author_image' => Auth::user()->alumni_image,
                'post_course' => $request->post_course,
                'post_category' => $request->post_category,
                'post_desc' => $request->post_desc,
                'post_image' => null
            ]);
        }
        else 
        {
            $imgName = $request->post_image->getClientOriginalName() . '-' . time() . '.' . $request->post_image->extension();
        
            $request->post_image->move(public_path('img/Postingan/post'), $imgName);

            Postingan::create([
                'post_name' => $request->post_name,
                'post_author' => Auth::user()->name,
                'post_author_id' => Auth::user()->id,
                'post_author_job' => Auth::user()->alumni_job,
                'post_author_image' => Auth::user()->alumni_image,
                'post_image' => $imgName,
                'post_course' => $request->post_course,
                'post_category' => $request->post_category,
                'post_desc' => $request->post_desc
            ]);
        }

        return redirect('/posts')->with('toast_success', 'Postingan Sukses Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function show(Postingan $postingan)
    {
        return view('Postingan.show', compact('postingan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Request $request)
    {
        //
    }

    /**
     * Update the sp
     * ecified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postingan $postingan)
    {
        $request->validate([
            'post_name' => 'required',
            'post_course' => 'required',
            'post_category' => 'required',
            'post_desc' => 'required'
        ]);

        if ($request->post_image == null) 
        {
        Postingan::where('id', $postingan->id)
            ->update([
                'post_name' => $request->post_name,
                'post_course' => $request->post_course,
                'post_category' => $request->post_category,
                'post_image' => $postingan->post_image,
                'post_desc' => $request->post_desc
            ]);
        }

        else 
        {
            $imgName = $request->post_image->getClientOriginalName() . '-' . time() . '.' . $request->post_image->extension();

            $request->post_image->move(public_path('img/Postingan/post'), $imgName);
            
            Postingan::where('id', $postingan->id)
            ->update([
                'post_name' => $request->post_name,
                'post_course' => $request->post_course,
                'post_category' => $request->post_category,
                'post_image' => $imgName,
                'post_desc' => $request->post_desc
            ]);
        }

        return redirect('/posts')->with('toast_success', 'Postingan Sukses Diubah!');
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

        return redirect('/posts')->with('toast_warning', 'Postingan Dihapus!');
    }

    public function search()
    {
        if (request()->has('search')) {
            $posts = Postingan::where('post_name', 'like', '%' . request('search') . '%')->paginate(8);
        } else {
            $posts = Postingan::paginate(8);
        }

        return view('Postingan.index', compact('posts'));
    }
}

