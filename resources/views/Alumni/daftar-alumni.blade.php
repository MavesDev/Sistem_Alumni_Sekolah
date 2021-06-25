@extends('layout/main')

@section('title', 'Daftar Alumni')

@section('container')

<style>
    #search {
        padding-left: 35px;
        background-color: #E1DFDD;
        border: none;
        border-radius: 5px;
        width: 9cm;
        height: 1cm;

    }


    /* filter button */
    .dropdown {
        position: relative;
        display: inline-block;
        /* border: 2px solid salmon; */
        color: white;
        height: 1cm;
        padding: 7px 5px;
        /* top: -29px; */
    }

    .dropdown a {
        color: black;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* search button */
    .search-button {
        margin-left: 10px;
        margin-right: 5px;
        height: 1cm;
        width: 1.5cm;
        background-color: #212529;
        color: white;
        border-style: none;
        border-radius: 5px;
    }

    #tambah-user {
        position: fixed;
        display: flex;
        z-index: 999;
        bottom: 80px;
        right: 130px;
        border-radius: 50%;
        background-color: #212529;
        width: 50px;
        height: 50px;
        color: white;
    }

    #tambah-user a {
        color: white;
    }

    #tambah-user a:hover {
        color: black;
    }

    #tambah-user:hover {
        background-color: white;
        color: black;
        transition: ease 0.2s;
    }
</style>

<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3 mb-4 fs-1"> Daftar Alumni </h1>

            <form class="input-group mb-4" action="/search" method="get">
                <input type="search" class="form-control" placeholder="Cari Disini" aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
                <button class="btn btn-outline-dark" type="submit" id="button-addon2">Cari</button>
            </form>

            <div class="ml-7">
                <div class="dropdown d-inline">
                    <a class="btn btn-secondary dropdown-toggle bg-dark mb-3 float-start" style="color: white;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Jurusan</a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/alumnis">Semua</a></li>
                        <li><a class="dropdown-item" href="/alumnis?alumni_course=Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</a></li>
                        <li><a class="dropdown-item" href="/alumnis?alumni_course=Multimedia">Multimedia</a></li>
                        <li><a class="dropdown-item" href="/alumnis?alumni_course=Teknik Komputer Jaringan">Teknik Komputer Jaringan</a></li>
                    </ul>
                </div>

                <div class="dropdown d-inline">
                    <a class="btn btn-secondary dropdown-toggle bg-dark mb-3 float-start" style="color: white;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Tahun Lulus</a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/alumnis">Semua</a></li>
                        <li><a class="dropdown-item" href="/alumnis?alumni_last_year=2022">2022</a></li>
                        <li><a class="dropdown-item" href="/alumnis?alumni_last_year=2021">2021</a></li>
                        <li><a class="dropdown-item" href="/alumnis?alumni_last_year=2020">2020</a></li>
                    </ul>
                </div>
                <div class="dropdown d-inline">
                    <a class="btn btn-secondary dropdown-toggle bg-dark mb-3 float-start" style="color: white;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Angkatan</a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/alumnis">Semua</a></li>
                        <li><a class="dropdown-item" href="/alumnis?alumni_generation=22">22</a></li>
                        <li><a class="dropdown-item" href="/alumnis?alumni_generation=21">21</a></li>
                        <li><a class="dropdown-item" href="/alumnis?alumni_generation=20">20</a></li>
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


    <div class="mt-3">
        <table class="table table-hover table-striped text-center">
            <thead class="table table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Domisil</th>
                    <th scope="col">Tahun Lulus</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- contoh yg native --}}
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->alumni_job }}</td>
                    <td>{{ $user->alumni_domisil }}</td>
                    <td>{{ $user->alumni_last_year }}</td>
                    <td>
                        <a href="/alumnis/{{ $user->id }}" class="btn btn-outline-success btn-sm ">Lihat</a>
                        @if (auth()->user()->level == "admin")
                        <form class="d-inline" action="/alumnis/{{ $user->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection