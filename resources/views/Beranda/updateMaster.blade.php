@extends('layout.main')

@section('title', 'Edit Kepala Sekolah')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-5 mb-4 fs-1"> Edit Kepala Sekolah </h1>
        </div>
    </div>

    <form method="post" enctype="multipart/form-data" action="/home/{{ $beranda->id }}/editHeadMaster" style="margin-bottom: 100px;">
        @csrf

        <div class="mb-3 col-6">
            <label for="headMaster_name" class="form-label">Nama Kepala Sekolah</label>
            <input type="text" class="form-control @error('headMaster_name') is-invalid @enderror" id="headMaster_name" name="headMaster_name" aria-describedby="emailHelp" placeholder="Masukan nama kepala sekolah" value="{{ $beranda->headMaster_name }}">
            @error('headMaster_name')
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="headMaster_image" class="form-label">Gambar Kepala Sekolah</label>
            <input type="file" class="form-control" id="headMaster_image" name="headMaster_image" aria-describedby="emailHelp" placeholder="Masukan gambar kepala sekolah" value="{{ $beranda->headMaster_image }}">
            @error('headMaster_image')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <div class=" mb-3 col-8">
                <label for="headMaster_desc" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('headMaster_desc') is-invalid @enderror" placeholder="Tambahkan deskripsi kepala sekolah" name="headMaster_desc" id="headMaster_desc" value="{{ old('headMaster_desc') }}">{{ $beranda->headMaster_desc }}</textarea>
                @error('headMaster_desc')
                <div id=" invalidCheck3Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-dark mt-2"> Edit Kepala Sekolah! </button>
            <a href="/alumnis" class="btn btn-dark mt-2">Kembali</a>
    </form>

</div>

@endsection