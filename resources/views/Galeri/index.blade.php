@extends('layout.main')

@section('title', 'Galeri')

@section('container')


<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3 mb-4 fs-1 d-inline"> Galeri </h1>

            @if (auth()->user()->level == "admin")
            <a href="/galeris/create" class="col-2 btn btn-outline-dark mb-3 mr-3" style="width: 3cm"> Tambah </a>
            @endif

            <form class="input-group mb-4" action="/search" method="get">
                <input type="search" class="form-control" placeholder="Cari Disini" aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
                <button class="btn btn-outline-dark" type="submit" id="button-addon2">Cari</button>
            </form>

            <h3 class="mt-3 mb-4 d-inline"> Filter </h3>

            <div class="ml-7 mt-3">

                <div class="dropdown d-inline">
                    <a class="btn btn-secondary dropdown-toggle bg-dark mb-3 float-start" style="color: white;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Jurusan</a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/galeris">Semua</a></li>
                        <li><a class="dropdown-item" href="/galeris?galeri_course=Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</a></li>
                        <li><a class="dropdown-item" href="/galeris?galeri_course=Multimedia">Multimedia</a></li>
                        <li><a class="dropdown-item" href="/galeris?galeri_course=Teknik Komputer Jaringan">Teknik Komputer Jaringan</a></li>
                    </ul>
                </div>

                <div class="dropdown d-inline">
                    <a class="btn btn-secondary dropdown-toggle bg-dark mb-3 float-start" style="color: white;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Tahun Lulus</a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/galeris">Semua</a></li>
                        <li><a class="dropdown-item" href="/galeris?galeri_last_year=2022">2022</a></li>
                        <li><a class="dropdown-item" href="/galeris?galeri_last_year=2021">2021</a></li>
                        <li><a class="dropdown-item" href="/galeris?galeri_last_year=2020">2020</a></li>
                    </ul>
                </div>

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
                        <img src="/img/Postingan/Galeri/{{ $galeri->galeri_image }}" class="img-fluid" alt="" style="height: 180px; width: 540px;">
                        <div class="btn-group position-absolute top-0 start-0" role="group" aria-label="Basic mixed styles example" style="margin-left: 12px;">
                            @if (auth()->user()->level == "admin")
                            <form action="galeris/{{ $galeri->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger px-2">Delete</button>
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

            <div class="text-center mt-5">
                <a href="https://drive.google.com" class="text-center" style="font-size: 18px; color: black; border-bottom: solid 2px black;">Lihat Semua Galeri</a>
            </div>

        </div>

    </section>

    @endsection