@extends('layout.main')

@section('title', 'Galeri')

@section('container')


<div class="container" style="margin-top:50px;">
    <div class="row">
        <div style="margin: auto; width: 70rem" class="">
            <br>
            <h2>Galeri</h2>
            @if (auth()->user()->level == "admin")
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-dark"><i class="fas fa-plus"> Tambah Foto</i></button>
            @endif
            <button data-bs-toggle="modal" data-bs-target="#Filter" class="btn btn-outline-dark "><i class="fas fa-filter"> Filter</i></button>
            <div style="float: right;">
                <form action="/galeris" method="get" style="float: right; display: inline;">
                    <input type="text" name="search" class="col-8 btn btn-outline-dark" placeholder="  Cari" style="padding: 6px 0px; text-align:left;">
                    <button data-bs-toggle="modal" class="btn btn-outline-dark" style="float: right;"><i class="fas fa-search"> Cari</i></button>
                </form>
            </div>
            <br><br>

            @if (session('status'))
            <div class="alert alert-success mb-4">
                {{ session('status') }}
            </div>
            @endif
        </div>

        <!-- Pop up Tambah Postingan -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Postingan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="/galeris" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul Foto</label>
                                <input type="text" class="form-control @error('galeri_name') is-invalid @enderror" name="galeri_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('galeri_name')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="galeri_last_year" class="form-label">Tahun Foto</label>
                                <select class="form-select" id="galeri_last_year" name="galeri_last_year" aria-label="Default select example">
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
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jurusan Foto</label>
                                <select class="form-select" name="galeri_course" aria-label="Default select example">
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
                                <label for="galeri_image" class="form-label">Unggah Foto</label>
                                <input type="file" class="form-control @error('galeri_image') is-invalid @enderror" id="galeri_image" name="galeri_image" aria-describedby="emailHelp">
                                @error('galeri_image')
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

        <!-- Pop up Filter -->
        <div class="modal fade" id="Filter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filter Postingan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="/galeris" method="get">
                        @csrf

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="galeri_last_year" class="form-label">Tahun Foto</label>
                                <select class="form-select" id="galeri_last_year" name="galeri_last_year" aria-label="Default select example">
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
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jurusan Foto</label>
                                <select class="form-select" name="galeri_course" aria-label="Default select example">
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal"><i class="fas fa-arrow-circle-left"> Kembali</i></button>
                            <button type="submit" class="btn btn-outline-dark"><i class="fas fa-filter"> Filter</i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        @if (session('status'))
        <div class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
        @endif

        <section id="portfolio" class="portfolio section-bg">

            <div class="container" data-aos="fade-up">


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach ($galeris as $galeri)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/img/Postingan/Galeri/{{ $galeri->galeri_image }}" class="img-fluid galeri-mobile" alt="">
                            <div class="btn-group position-absolute top-0 start-0" role="group" aria-label="Basic mixed styles example" style="margin-left: 12px;">
                                @if (auth()->user()->level == "admin")
                                <form action="galeris/{{ $galeri->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger px-2"><i class="fas fa-trash"></i></button>
                                </form>
                                @endif
                            </div>
                            <div class="portfolio-info">
                                <h4>{{ $galeri->galeri_name }}</h4>
                                <p>{{ $galeri->galeri_course }} | {{ $galeri->galeri_last_year }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="mt-5" style="color: black;">
                    {{ $galeris->links() }}
                </div>

                <div class="text-center mt-5">
                    <a href="https://drive.google.com" class="text-center" style="font-size: 18px; color: black; border-bottom: solid 2px black;">Lihat Semua Galeri</a>
                </div>

            </div>

        </section>

    </div>
    @endsection