@extends('layout/main')

@section('title', 'Tambah Postingan')

<style>
    .wrapper {
        padding: 10px 10px;
    }
</style>
@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-5 mb-4 fs-1"> Tambahkan Postingan </h1>
        </div>
    </div>

    @if (session('status'))
    <div class="alert alert-success mb-4">
        {{ session('status') }}
    </div>
    @endif

    <form method="post" action="/posts" style="margin-bottom: 100px;" enctype="multipart/form-data">
        @csrf

        <div>
            <br>
            <label for="inputJudul" class="form-label">Judul</label>
            <input type="text" id="inputJudul" name="post_name" class="form-control" maxlength="200" style="width: 12cm;"> </input>
            <br>

            <label for="inputDeskripsi" class="form-label">Deskripsi</label>
            <textarea id="inputDeskripsi" name="post_desc" class="form-control" aria-describedby="deskripsi" maxlength="1000" style="width: 12cm;"> </textarea>
            <div id="deskripsi" class="form-text">
                Maksimal 1000 karakter
            </div><br>

            <label for="inputJudul" class="form-label">Jurusan</label>
            <input type="text" id="inputJudul" name="post_course" class="form-control" maxlength="200" style="width: 12cm;"> </input>
            <br>

            <label for="inputGambar" class="form-label">Gambar</label>
            <input type="file" id="inputJudul" name="post_image" class="form-control" maxlength="200" style="width: 12cm;"> </input>
            <br><br>

            <button class="btn btn-dark mt-2">Posting</button>
            <a href="/posts" class="btn btn-dark mt-2">Kembali</a>

        </div>

    </form>
</div>

@endsection