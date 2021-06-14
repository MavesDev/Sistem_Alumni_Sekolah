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
        background-color: #212529;
        height: 1cm;
        border-radius: 5px;
        padding: 7px 5px;
        /* top: -29px; */
    }

    .dropdown a {
        color: black;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
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
    <form action="" method="GET">
        <div id="wrapper">
            <i class="fa fa-search" style="position: relative; left:30px;"></i>
            <input type="search" placeholder="Cari disini" id="search">
            <button class="search-button">
                <i class="fa fa-search"></i>
            </button>
            <div class="dropdown">
                <span>Filter</span>
                <i class="fa fa-filter" style="padding-left: 10px"></i>
                <div class="dropdown-content">
                    <a class="dropdown-item" href="#">Aksi q</a>
                    <a class="dropdown-item" href="#">Aksi 2</a>
                    <a class="dropdown-item" href="#">Aksi 3</a>
                </div>
            </div>
        </div>
    </form>
    <br>

    <div class="container">
        <h2>Daftar Alumni</h2>
        <table class="table table-hover table-striped">
            <thead class="table table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">email</th>
                    <th scope="col">Tahun Lulus</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- contoh yg native --}}
                @foreach ($alumnis as $alumni)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $alumni->alumni_name }}</td>
                    <td>{{ $alumni->alumni_job }}</td>
                    <td>{{ $alumni->alumni_email }}</td>
                    <td>{{ $alumni->alumni_last_year }}</td>
                    <td>
                        <a href="/alumnis/{{ $alumni->id }}/edit" class="btn btn-success btn-sm">Ubah</a>
                        <form class="d-inline" action="/alumnis/{{ $alumni->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<button id="tambah-user">
    <a href="/alumnis/create"><i class="fa fa-user-plus position-absolute top-50 start-50 translate-middle"></i></a>
</button>

@endsection