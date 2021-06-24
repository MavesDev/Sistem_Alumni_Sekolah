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
            <label for="name" class="form-">Nama Alumni</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="emailHelp" placeholder="Masukan nama alumni" value="{{ old('name') }}">
            @error('name')label
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="password" class="form-label">Password Alumni</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" aria-describedby="emailHelp" placeholder="Masukan nama alumni" value="{{ old('password') }}">
            @error('password')
            <div id="invalidCheck3Feedback" class="invalid-feedback">
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
            <label for="alumni_domisil" class="form-label">Domisil Alumni</label>
            <input type="text" class="form-control @error('alumni_domisil') is-invalid @enderror" name="alumni_domisil" id="alumni_domisil" aria-describedby="emailHelp" placeholder="Masukan domisil alumni" value="{{ old('alumni_domisil') }}">
            @error('alumni_domisil')
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_code" class="form-label">NIS Alumni</label>
            <input type="text" class="form-control @error('alumni_code') is-invalid @enderror" id="alumni_code" name="alumni_code" aria-describedby="emailHelp" placeholder="Masukan kode alumni (Tidak bisa diubah)" value="{{ old('alumni_code') }}">
            @error('alumni_code')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_course" class="form-label">Jurusan Alumni</label>
            <input type="text" class="form-control @error('alumni_course') is-invalid @enderror" id="alumni_course" name="alumni_course" aria-describedby="emailHelp" placeholder="Masukan kode alumni (Tidak bisa diubah)" value="{{ old('alumni_course') }}">
            @error('alumni_course')
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
            <label for="alumni_generation" class="form-label">Angkatan Alumni</label>
            <input type="text" class="form-control" id="alumni_generation" name="alumni_generation" aria-describedby="emailHelp" placeholder="Masukan pekerjaan alumni" value="{{ old('alumni_generation') }}">
            @error('alumni_generation')
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
        <button type="submit" class="btn btn-dark mt-2"> Tambah Alumni </button>
        <a href="/alumnis" class="btn btn-dark mt-2">Kembali</a>
    </form>

</div>

@endsection