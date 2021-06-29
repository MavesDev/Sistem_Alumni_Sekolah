<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Beranda;
use App\Models\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    
    public function home(Beranda $beranda)
    {
        $users = User::orderBy('created_at', 'desc')->paginate(3);
        $galeris = Galeri::orderBy('created_at', 'desc')->paginate(3);
        $berandas = Beranda::paginate(1);


        return view('beranda', compact('users','galeris','berandas'));
    }

    public function editHeadMaster(Beranda $beranda)
    {
        return view('Beranda.updateMaster', compact('beranda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function updateHeadMaster(Request $request, Beranda $beranda)
    {
        $request->validate([
            'headMaster_name' => 'required',
            'headMaster_image' => 'required',
            'headMaster_desc' => 'required'
        ]);

        $imgName = $request->headMaster_image->getClientOriginalName() . '-' . time() . '.' . $request->headMaster_image->extension();

        $request->headMaster_image->move(public_path('img/Postingan/Beranda'), $imgName);


        Beranda::where('id', $beranda->id)
            ->update([
            'headMaster_name' => $request->headMaster_name,
            'headMaster_image' => $imgName,
            'headMaster_desc' => $request->headMaster_desc,
            'event_Name' => $beranda->event_name,
            'event_image' => $beranda->event_image,
            'event_desc' => $beranda->event_desc
            ]);

        return redirect('/home')->with('toast_success', 'Informasi Kepala Sekolah Diubah!');
    }

    public function editEvent(Beranda $beranda)
    {
        return view('Beranda.updateEvent', compact('beranda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function updateEvent(Request $request, Beranda $beranda)
    {
        $request->validate([
            'event_name' => 'required',
            'event_image' => 'required',
            'event_desc' => 'required'
        ]);

        $imgName = $request->event_image->getClientOriginalName() . '-' . time() . '.' . $request->event_image->extension();

        $request->event_image->move(public_path('img/Postingan/Beranda'), $imgName);

        Beranda::where('id', $beranda->id)
            ->update([
                'headMaster_name' => $beranda->headMaster_name,
                'headMaster_image' => $beranda->headMaster_image,
                'headMaster_desc' => $beranda->headMaster_desc,
                'event_Name' => $request->event_name,
                'event_image' => $imgName,
                'event_desc' => $request->event_desc
            ]);

        return redirect('/home')->with('toast_success', 'Informasi Acara Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beranda $beranda)
    {
        //
    }
}
