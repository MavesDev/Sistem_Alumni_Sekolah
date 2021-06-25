@extends('layout.main')

@section('title', 'Edit Alumni')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-5 mb-4 fs-1"> Edit Alumni </h1>
        </div>
    </div>

    <form method="post" action="/alumnis/{{ $user->id }}" style="margin-bottom: 100px;" enctype="multipart/form-data">
        @method('patch')
        @csrf

        <div class="mb-3 col-6">
            <label for="name" class="form-label">Nama Alumni</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="emailHelp" placeholder="Masukan nama alumni" value="{{ $user->name }}">
            @error('name')
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_domisil" class="form-label">Domisli Alumni</label>
            <input type="text" class="form-control @error('alumni_domisil') is-invalid @enderror" id="alumni_domisil" name="alumni_domisil" aria-describedby="emailHelp" placeholder="Masukan nama alumni" value="{{ $user->alumni_domisil }}">
            @error('alumni_domisil')
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_code" class="form-label">NIS Alumni</label>
            <input type="text" class="form-control @error('alumni_code') is-invalid @enderror" id="alumni_code" name="alumni_code" aria-describedby="emailHelp" placeholder="Masukan kode alumni (Tidak bisa diubah)" value="{{ $user->alumni_code }}">
            @error('alumni_code')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_course" class="form-label">Jurusan Alumni</label>
            <input type="text" class="form-control @error('alumni_course') is-invalid @enderror" id="alumni_course" name="alumni_course" aria-describedby="emailHelp" placeholder="Masukan kode alumni (Tidak bisa diubah)" value="{{ $user->alumni_course }}">
            @error('alumni_course')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_job" class="form-label">Pekerjaan Alumni</label>
            <input type="text" class="form-control" id="alumni_job" name="alumni_job" aria-describedby="emailHelp" placeholder="Masukan pekerjaan alumni" value="{{ $user->alumni_job }}">
            @error('alumni_job')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_generation" class="form-label">Angkatan Alumni</label>
            <input type="text" class="form-control" id="alumni_generation" name="alumni_generation" aria-describedby="emailHelp" placeholder="Masukan pekerjaan alumni" value="{{ $user->alumni_generation }}">
            @error('alumni_generation')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_last_year" class="form-label">Tahun Lulus</label>
            <input type="text" class="form-control" id="alumni_last_year" name="alumni_last_year" aria-describedby="emailHelp" placeholder="Masukan pekerjaan alumni" value="{{ $user->alumni_last_year }}">
            @error('alumni_last_year')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_image" class="form-label">Gambar Alumni</label>
            <input type="file" class="form-control" id="alumni_image" name="alumni_image" aria-describedby="emailHelp" placeholder="Masukan gambar alumni" value="{{ $user->alumni_image }}">
            @error('alumni_image')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-outline-dark mt-2"> Edit Profil </button>
        <a href="/alumnis" class="btn btn-outline-dark mt-2">Kembali</a>
    </form>

</div>

@endsection