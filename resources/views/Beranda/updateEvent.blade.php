@extends('layout.main')

@section('title', 'Edit Acara')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-5 mb-4 fs-1"> Edit Acara </h1>
        </div>
    </div>

    <form method="post" enctype="multipart/form-data" action="/home/{{ $beranda->id }}/editEvent" style="margin-bottom: 100px;">
        @csrf

        <div class="mb-3 col-7">
            <label for="event_name" class="form-label">Nama Acara</label>
            <input type="text" class="form-control @error('event_name') is-invalid @enderror" id="event_name" name="event_name" aria-describedby="emailHelp" placeholder="Masukan nama acara" value="{{ $beranda->event_name }}" autocomplete="off">
            @error('event_name')
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-7">
            <label for="event_image" class="form-label">Gambar Acara</label>
            <input type="file" class="form-control" id="event_image" name="event_image" aria-describedby="emailHelp" placeholder="Masukan gambar acara" value="{{ $beranda->event_image }}" autocomplete="off">
            @error('event_image')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class=" mb-3 col-8">
            <label for="event_desc" class="form-label">Deskripsi</label>
            <textarea class="form-control @error('event_desc') is-invalid @enderror" placeholder="Tambahkan deskripsi acara" name="event_desc" id="event_desc" value="{{ old('event_desc') }}">{{ $beranda->event_desc }}</textarea>
            @error('event_desc')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-dark mt-2"> Edit Acara! </button>
        <a href="/alumnis" class="btn btn-dark mt-2">Kembali</a>
    </form>

</div>

@endsection