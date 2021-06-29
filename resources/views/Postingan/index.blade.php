@extends('layout/main')

@section('title', 'Postingan')

<style>
    .amico {
        background-color: #A5F4ED;
        padding: 20px 10px;
        width: 14.7cm;
        float: left;
        line-height: normal;
        margin-right: 40px;
        margin-top: 10px;
        border-radius: 20px;
    }

    /* new */
    .card {
        margin-top: 10px;
    }

    .wrapper {
        padding: 10px 10px;
    }

    #profil-pic {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        float: left;
        position: relative;
    }

    .dropdown-item {
        height: 0.7cm;
    }

    .yang-lalu {
        font-size: 9pt;
        color: rgb(65, 65, 65);
    }

    /* new new */
    #more {
        display: none;
    }
</style>
@section('container')
<div class="wrapper">
    <div style="margin: auto; width: 39rem" class="">
        <br>
        <h3>Postingan</h3>
        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-dark"><i class="fas fa-plus"> Tambah Postingan</i></button>
        <button data-bs-toggle="modal" data-bs-target="#Filter" class="btn btn-outline-dark "><i class="fas fa-filter"> Filter</i></button>
        <div style="float: right;">
            <form action="/posts" method="get" style="float: right; display: inline;">
                <input type="text" name="search" class="col-8 btn btn-outline-dark" placeholder="  Cari" style="padding: 2px 0px; text-align:left;">
                <button data-bs-toggle="modal" class="btn btn-outline-dark" style="float: right;"><i class="fas fa-search"> Cari</i></button>
            </form>
        </div>
        <br><br>

        @if (session('status'))
        <div class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
        @endif

        <!-- Pop up Filter -->
        <div class="modal fade" id="Filter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filter Postingan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="/posts" method="get">
                        @csrf

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jurusan Postingan</label>
                                <select class="form-select" name="post_course" aria-label="Default select example">
                                    <option value="" selected>Semua Jurusan</option>
                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
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
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kategori Postingan</label>
                                <select class="form-select" name="post_category" aria-label="Default select example">
                                    <option value="" selected>Semua Kategori</option>
                                    <option value="Acara Reuni">Acara Reuni</option>
                                    <option value="Magang">Magang</option>
                                    <option value="Lowongan Kerja">Lowongan Kerja</option>
                                    <option value="Lowongan Relawan">Lowongan Relawan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal"><i class="fas fa-arrow-circle-left"> Kembali</i></button>
                            <button type="submit" class="btn btn-outline-dark"><i class="fas fa-filter"> Filter</i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Pop up Tambah Postingan -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Postingan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="/posts" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul Postingan</label>
                                <input type="text" class="form-control @error('post_name') is-invalid @enderror" name="post_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('post_name')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="post_category" class="form-label">Kategori Postingan</label>
                                <select class="form-select" id="post_category" name="post_category" aria-label="Default select example">
                                    <option value="Semua Kategori" selected>Semua Kategori</option>
                                    <option value="Acara Reuni">Acara Reuni</option>
                                    <option value="Magang">Magang</option>
                                    <option value="Lowongan Kerja">Lowongan Kerja</option>
                                    <option value="Lowongan Relawan">Lowongan Relawan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jurusan Postingan</label>
                                <select class="form-select" name="post_course" aria-label="Default select example">
                                    <option selected>Semua Jurusan</option>
                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
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


                            <div class="mb-3">
                                <label for="post_image" class="form-label">Gambar Postingan</label>
                                <input type="file" class="form-control @error('post_image') is-invalid @enderror" id="post_image" name="post_image" aria-describedby="emailHelp">
                                @error('post_image')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                                <textarea id="inputDeskripsi" name="post_desc" class="form-control @error('post_desc') is-invalid @enderror" aria-describedby="deskripsi" maxlength="1000" style="width: 12cm;"></textarea>
                                <div id="emailHelp" class="form-text">Maksimal 1000 Karakter.</div>
                                @error('post_desc')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal"><i class="fas fa-arrow-circle-left"> Kembali</i></button>
                            <button type="submit" class="btn btn-outline-dark"><i class="fas fa-edit"> Unggah Postingan</i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        @foreach ($posts as $post)
        <div class="card" style="width: 39rem;">
            <div class="card-header icon-post-mobile">
                @if(Auth::id() == $post->post_author_id || auth()->user()->level == "admin")
                <div>
                    <button style="float: right; border-style: none; background: none;" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $post->id }}"><i class="fas fa-edit"></i></button>
                    <form action="posts/{{ $post->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button style="float: right; border-style: none; background: none;"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
                @endif
                <a href="alumnis/{{ $post->post_author_id }}"><img src="img/User/Profil/{{ $post->post_author_image }}" alt="" id="profil-pic" style="margin-right: 10px;"></a>
                <h5 class="card-title">{{ $post->post_author }}</h5>
                <p class="card-subtitle yang-lalu">{{ $post->post_author_job }}</p>
            </div>
            <div class="wrapper">
                @if($post->post_image != null)
                <img src="img/Postingan/post/{{ $post->post_image }}" class="card-img-top" style="display: block; width:16cm; max-height: 500px;" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title text-bold"><strong>{{ $post -> post_name }}</strong></h5>
                    <p>{{ $post->post_course }} | {{ $post->post_category }}</p>
                    <p class="card-text">{{ $post -> post_desc }}</p>

                    <a href="alumnis/{{ $post->post_author_id }}" class="btn btn-outline-dark">Kontak Penulis</a>
                </div>
            </div>

        </div>
        @endforeach

        @foreach ($posts as $data)
        <div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Postingan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="/posts/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul Postingan</label>
                                <input type="text" class="form-control @error('post_name') is-invalid @enderror" name="post_name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->post_name }}">
                                @error('post_name')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="post_category" class="form-label">Kategori Postingan</label>
                                <select class="form-select" id="post_category" name="post_category" aria-label="Default select example">
                                    <option value="Semua Kategori" selected>Semua Kategori</option>
                                    <option value="Acara Reuni">Acara Reuni</option>
                                    <option value="Magang">Magang</option>
                                    <option value="Lowongan Kerja">Lowongan Kerja</option>
                                    <option value="Lowongan Relawan">Lowongan Relawan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jurusan Postingan</label>
                                <select class="form-select" name="post_course" aria-label="Default select example">
                                    <option selected>Semua Jurusan</option>
                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
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
                            <div class="mb-3">
                                <label for="post_image" class="form-label">Gambar Postingan</label>
                                <input type="file" class="form-control @error('post_image') is-invalid @enderror" id="post_image" name="post_image" aria-describedby="emailHelp" value="{{ $data->post_image }}">
                                @error('post_image')
                                <div id=" invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                                <textarea id="inputDeskripsi" name="post_desc" class="form-control @error('post_desc') is-invalid @enderror" aria-describedby="deskripsi" maxlength="1000" style="width: 12cm;"> {{ $data->post_desc }}</textarea>
                                <div id="emailHelp" class="form-text">Maksimal 1000 Karakter.</div>
                                @error('post_desc')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal"><i class="fas fa-arrow-circle-left"> Kembali</i></button>
                            <button type="submit" class="btn btn-outline-dark"><i class="fas fa-edit"> Edit Postingan</i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        @endforeach


        <div class="mt-5" style="color: black;">
            {{ $posts->links() }}
        </div>

    </div>
</div>

@endsection