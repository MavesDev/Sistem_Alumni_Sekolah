@extends('layout.main')

@section('title', 'Tambah Alumni')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mb-4 fs-1"> Tambahkan Alumni </h1>
        </div>
    </div>

    <form method="post" action="/alumnis" style="margin-bottom: 100px;">
        @csrf

        <div class="mb-3 col-6">
            <label for="alumni_name" class="form-label">Nama Alumni</label>
            <input type="text" class="form-control @error('alumni_name') is-invalid @enderror" id="alumni_name" name="alumni_name" aria-describedby="emailHelp" placeholder="Masukan nama alumni" value="{{ old('alumni_name') }}">
            @error('alumni_name')
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_code" class="form-label">Kode Alumni</label>
            <input type="text" class="form-control @error('alumni_code') is-invalid @enderror" id="alumni_code" name="alumni_code" aria-describedby="emailHelp" placeholder="Masukan kode alumni (Tidak bisa diubah)" value="{{ old('alumni_code') }}">
            @error('alumni_code')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_email" class="form-label">Email Alumni</label>
            <input type="text" class="form-control" id="alumni_email" name="alumni_email" aria-describedby="emailHelp" placeholder="Masukan email alumni" value="{{ old('alumni_email') }}">
            @error('alumni_email')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_job" class="form-label">Pekerjaan Alumni</label>
            <input type="text" class="form-control" id="alumni_job" name="alumni_job" aria-describedby="emailHelp" placeholder="Masukan pekerjaan alumni" value="{{ old('alumni_job') }}">
            @error('alumni_job')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_last_year" class="form-label">Tahun Lulus</label>
            <input type="text" class="form-control" id="alumni_last_year" name="alumni_last_year" aria-describedby="emailHelp" placeholder="Masukan pekerjaan alumni" value="{{ old('alumni_last_year') }}">
            @error('alumni_last_year')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_image" class="form-label">Gambar Alumni</label>
            <input type="text" class="form-control" id="alumni_image" name="alumni_image" aria-describedby="emailHelp" placeholder="Masukan gambar alumni" value="{{ old('alumni_image') }}">
            @error('alumni_image')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class=" mb-3 col-8">
            <label for="alumni_desc" class="form-label">Deskripsi Alumni</label>
            <textarea class="form-control @error('alumni_desc') is-invalid @enderror" placeholder="Deskripsi (Maksimal 500 Karakter)" name="alumni_desc" id="alumni_desc" value="{{ old('alumni_desc') }}">{{ old('alumni_desc') }}</textarea>
            @error('alumni_desc')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-dark mt-2"> Tambah Alumni </button>
        <a href="/alumnis" class="btn btn-dark mt-2">Kembali</a>
    </form>

</div>

@endsection