@extends('layout/main')
<style>
    .wrapper {
        padding: 10px 10px;
    }

</style>
@section('container')
    <div class="wrapper">
        <div style="margin: 0 35px;" class="">
            <br>
            <h3>Tambah Postingan</h3>
            <label for="inputDeskripsi" class="form-label">Deskripsi</label>
            <textarea id="inputDeskripsi" class="form-control" aria-describedby="deskripsi" maxlength="1000" style="width: 12cm;"> </textarea>
            <div id="deskripsi" class="form-text">
                Maksimal 1000 karakter
            </div><br>

            <label for="inputJudul" class="form-label">Judul</label>
            <input type="text" id="inputJudul" class="form-control" maxlength="200" style="width: 12cm;"> </input>
            <br>
            <label for="inputGambar" class="form-label">Gambar</label>
            <input type="file" id="inputJudul" class="form-control" maxlength="200" style="width: 12cm;"> </input>
            <br><br>
            <button class="btn btn-primary">Posting</button>

        </div>
    </div>
@endsection
