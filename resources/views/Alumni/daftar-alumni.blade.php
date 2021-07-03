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

<div style="margin: 30px 1cm;">
    <div>
        <br>
        <h2 style="color: black;">Daftar Alumni</h2>
        <button data-bs-toggle="modal" data-bs-target="#Filter" class="btn btn-outline-dark "><i class="fas fa-filter"> Filter</i></button>
        <div style="float: right;">
            <form autocomplete="off" action="/alumnis" method="get" style="float: right; display: inline;">
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

        <!-- Pop up Filter -->
        <div class="modal fade" id="Filter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filter Postingan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="/alumnis" method="get">
                        @csrf

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jurusan Alumni</label>
                                <select class="form-select" name="alumni_course" aria-label="Default select example">
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
                                <label for="exampleInputEmail1" class="form-label">Tahun Lulus</label>
                                <select class="form-select" name="alumni_last_year" aria-label="Default select example">
                                    <option value="" selected>Seluruh Tahun</option>
                                    <option value="2022">2022</option>
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
                                <label for="exampleInputEmail1" class="form-label">Angkatan</label>
                                <select class="form-select" name="alumni_generation" aria-label="Default select example">
                                    <option value="" selected>Semua Angkatan</option>
                                    <option value="21">21</option>
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal"><i class="fas fa-arrow-circle-left"> Kembali</i></button>
                            <button type="submit" class="btn btn-outline-dark"><i class="fas fa-filter"> Filter</i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="mt-3">
            <table class="table table-hover table-striped text-center">
                <thead class="table table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Domisili</th>
                        <th scope="col" class="hide-table-mobile">Tahun Lulus</th>
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
                        <td class="hide-table-mobile">{{ $user->alumni_last_year }}</td>
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

        <div class="d-inline">
            <div class="mt-5" style="color: black;">
                {{ $users->links() }}
            </div>
            @if (auth()->user()->level == "admin")
            <button data-bs-toggle="modal" data-bs-target="#Report" class="btn btn-outline-dark float-end"><i class="fas fa-print"> Cetak</i></button>
            @endif
        </div>

        <!-- Pop up Report -->
        <div class="modal fade" id="Report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cetak Alumni</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="/alumnis/report" method="get" target="_black">
                        @csrf

                        <div class="mb-3" style="display: none;">
                            <label for="exampleInputEmail1" class="form-label">Level</label>
                            <input type="text" value="user" name="level">
                        </div>

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jurusan Alumni</label>
                                <select class="form-select" name="alumni_course" aria-label="Default select example">
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
                            {{-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tahun Lulus</label>
                                <select class="form-select" name="alumni_last_year" aria-label="Default select example">
                                    <option value="" selected>Seluruh Tahun</option>
                                    <option value="2022">2022</option>
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
                                <label for="exampleInputEmail1" class="form-label">Angkatan</label>
                                <select class="form-select" name="alumni_generation" aria-label="Default select example">
                                    <option value="" selected>Semua Angkatan</option>
                                    <option value="21">21</option>
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
                            </div> --}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal"><i class="fas fa-arrow-circle-left"> Kembali</i></button>
                            <button type="submit" class="btn btn-outline-dark"><i class="fas fa-print"> Cetak</i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection