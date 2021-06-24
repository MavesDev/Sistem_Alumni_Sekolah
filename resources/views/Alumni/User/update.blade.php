@extends('layout.main')

@section('title', 'Edit Alumni')

@section('container')


<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mb-4 fs-1"> Edit Profil </h1>
        </div>
    </div>

    <form method="post" action="/alumnis/{{ $user->id }}/user" enctype="multipart/form-data" style="margin-bottom: 100px;">
        @method('patch')
        @csrf

        <div class="mb-3 col-6">
            <label for="name" class="form-label">Nama Anda</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="emailHelp" placeholder="Masukan nama anda" value="{{ $user->name }}">
            @error('name')
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_domisil" class="form-label">Domisili Anda</label>
            <input type="text" class="form-control @error('alumni_domisil') is-invalid @enderror" id="alumni_domisil" name="alumni_domisil" aria-describedby="emailHelp" placeholder="Masukan domisili anda" value="{{ $user->alumni_domisil }}">
            @error('alumni_domisil')
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_course" class="form-label">Jurusan Anda</label>
            <input type="text" class="form-control @error('alumni_course') is-invalid @enderror" id="alumni_course" name="alumni_course" aria-describedby="emailHelp" placeholder="Masukan jurusan anda" value="{{ $user->alumni_course }}">
            @error('alumni_course')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_job" class="form-label">Pekerjaan Anda</label>
            <input type="text" class="form-control" id="alumni_job" name="alumni_job" aria-describedby="emailHelp" placeholder="Masukan pekerjaan anda" value="{{ $user->alumni_job }}">
            @error('alumni_job')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class=" mb-3 col-8">
            <label for="alumni_job_desc" class="form-label">Deskripsi Pekerjaan</label>
            <textarea class="form-control @error('alumni_job_desc') is-invalid @enderror" placeholder="Masukan deskripsi pekerjaan anda" name="alumni_job_desc" id="alumni_job_desc" value="{{ $user->alumni_job_desc }}">{{ $user->alumni_job_desc }}</textarea>
            @error('alumni_job_desc')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_generation" class="form-label">Angkatan Lulus</label>
            <input type="text" class="form-control" id="alumni_generation" name="alumni_generation" aria-describedby="emailHelp" placeholder="Masukan angkatan lulus anda" value="{{ $user->alumni_generation }}">
            @error('alumni_generation')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_last_year" class="form-label">Tahun Lulus</label>
            <input type="text" class="form-control" id="alumni_last_year" name="alumni_last_year" aria-describedby="emailHelp" placeholder="Masukan tahun lulus" value="{{ $user->alumni_last_year }}">
            @error('alumni_last_year')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="alumni_image" class="form-label">Foto</label>
            <input type="file" class="form-control" id="alumni_image" name="alumni_image" aria-describedby="emailHelp" placeholder="Pilih Foto" value="{{ $user->alumni_image }}">
            @error('alumni_image')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class=" mb-3 col-8">
            <label for="alumni_desc" class="form-label">Deskripsi</label>
            <textarea class="form-control @error('alumni_desc') is-invalid @enderror" placeholder="Tambahkan Desripsi Anda" name="alumni_desc" id="alumni_desc" value="{{ old('alumni_desc') }}">{{ $user->alumni_desc }}</textarea>
            @error('alumni_desc')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="text-center mt-5 mb-5">
            <h3>Sosial Media</h3>
        </div>

        <div class="mb-3 col-6">
            <label for="whatsapp" class="form-label">Whatsapp</label>
            <input type="text" class="form-control" id="whatsapp" name="whatsapp" aria-describedby="emailHelp" placeholder="Whatsapp" value="{{ $user->whatsapp }}">
            @error('whatsapp')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="text" class="form-control" id="instagram" name="instagram" aria-describedby="emailHelp" placeholder="Instagram" value="{{ $user->instagram }}">
            @error('instagram')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="twitter" class="form-label">Twitter</label>
            <input type="text" class="form-control" id="twitter" name="twitter" aria-describedby="emailHelp" placeholder="Twitter" value="{{ $user->twitter }}">
            @error('twitter')
            <div id=" invalidCheck3Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-dark mt-2"> Edit Profil </button>
        <a href="/alumnis" class="btn btn-dark mt-2">Kembali</a>
    </form>

</div>

@endsection