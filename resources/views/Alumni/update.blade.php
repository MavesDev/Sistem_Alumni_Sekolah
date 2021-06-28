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
            <label for="exampleInputPassword1" class="form-label">Jurusan Postingan</label>
            <select class="form-select" name="alumni_course" aria-label="Default select example">
                <option value="Rekayasa Perangkat Lunak" selected>Rekayasa Perangkat Lunak</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                <option value="Tekstil">Tekstil</option>
                <option value="Elektronika">Elektronika</option>
                <option value="Mekatronika">Mekatronika</option>
                <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                <option value="Mesin">Mesin</option>
                <option value="Teknik Gambar Mesin">Teknik Gambar Mesin</option>
            </select>
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
            <label for="exampleInputEmail1" class="form-label">Tahun Lulus</label>
            <select class="form-select" name="alumni_last_year" aria-label="Default select example">
                <option value="2022" selected>2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="Sebelum 2010">Sebelum 2010</option>
            </select>
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputEmail1" class="form-label">Angkatan</label>
            <select class="form-select" name="alumni_generation" aria-label="Default select example">
                <option value="21" selected>21</option>
                <option value="20">20</option>
                <option value="19">19</option>
                <option value="18">18</option>
                <option value="17">17</option>
                <option value="16">16</option>
                <option value="15">15</option>
                <option value="14">14</option>
                <option value="13">13</option>
                <option value="12">12</option>
                <option value="11">11</option>
                <option value="Dibawah Angkatan Ke-10">Dibawah Angkatan Ke-10</option>
            </select>
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

        <button type="submit" class="btn btn-outline-dark mt-2"><i class="fas fa-edit"></i> Edit Profil </button>
        <a href="/alumnis" class="btn btn-outline-dark mt-2"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
    </form>

</div>

@endsection