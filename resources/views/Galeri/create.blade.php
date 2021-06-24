@extends('layout.main')

@section('title', 'Tambah Alumni')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mb-4 fs-1"> Tambahkan Foto </h1>
        </div>
    </div>

    @if (session('status'))
    <div class="alert alert-success mb-4">
        {{ session('status') }}
    </div>
    @endif

    <form method="post" action="/galeris" style="margin-bottom: 100px;" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 col-6">
            <label for="galeri_name" class="form-">Judul Foto</label>
            <input type="text" class="form-control @error('galeri_name') is-invalid @enderror" id="galeri_name" name="galeri_name" aria-describedby="emailHelp" placeholder="Masukan nama alumni" value="{{ old('galeri_name') }}">
            @error('galeri_name')
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="galeri_course" class="form-label">Jurusan</label>
            <input type="text" class="form-control @error('galeri_course') is-invalid @enderror" id="galeri_course" name="galeri_course" aria-describedby="emailHelp" placeholder="Masukan kode galeri (Tidak bisa diubah)" value="{{ old('galeri_course') }}">
            @error('galeri_course')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="galeri_last_year" class="form-label">Tahun</label>
            <input type="text" class="form-control" id="galeri_last_year" name="galeri_last_year" aria-describedby="emailHelp" placeholder="Masukan pekerjaan galeri" value="{{ old('galeri_last_year') }}">
            @error('galeri_last_year')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="galeri_image" class="form-label">Foto</label>
            <input type="file" class="form-control" id="galeri_image" name="galeri_image" aria-describedby="emailHelp" placeholder="Masukan gambar galeri" value="{{ old('galeri_image') }}">
            @error('galeri_image')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-dark mt-2"> Tambah Foto </button>
        <a href="/galeris" class="btn btn-dark mt-2">Kembali</a>
    </form>

</div>

@endsection