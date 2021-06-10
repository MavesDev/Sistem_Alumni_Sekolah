@extends('layout/main')
<style>
    #search {
        padding-left: 35px;
        background-color: #E1DFDD;
        border: none;
        border-radius: 5px;
        width: 9cm;
        height: 1cm;

    }

    #wrapper {
        /* background-color: #E1DFDD; */
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

    .dropdown p{
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
        bottom: 20px;
        right: 55px;
        border-radius: 50%;
        background-color: #212529;
        width: 50px;
        height: 50px;
    }

</style>
@section('container')
<br><br>
    <div style="margin: 5px 65px">
        {{-- search menu --}}
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
                        <p>Hello Asep!</p>
                        <p>Hello Usman!</p>
                        <p>Hello Jajang!</p>
                        <p>Hello Markonah!</p>
                    </div>
                </div>
            </div>
        </form>
        <br>

        <h2>Daftar Alumni</h2>
        <table class="table table-hover table-striped">
            <thead class="table table-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">email</th>
                    <th scope="col">Tahun Lulus</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- ini hide dulu kalau mau liat yg native --}}
                {{-- heup --}}
                <?php
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $dbname = 'database_alumni_sekolah';
                $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                
                
                // jalankan query
                $query = 'SELECT * FROM users';
                $result = mysqli_query($link, $query);

                //buat perulangan untuk element tabel dari data alumni
                while ($data = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                    echo "<td scope="row">$data[id_user]</td>";
                    echo "<td>$data[user_name]</td>";
                    echo "<td>$data[user_job_current]</td>";
                    echo "<td>$data[user_email]</td>";
                    echo "<td>$data[tambah-aja-di-dbnya-user_angkatan]</td>";
                    echo "<td>
                        <button class="btn btn-success btn-sm">Detail</button>
                        </td>";
                    echo '</tr>';
                }
                ?>




                {{-- contoh yg native --}}
                {{-- <tr>
                    <th scope="row">1112</th>
                    <td>Asep</td>
                    <td>Fullstack Developer</td>
                    <td>asepkurnia@gmail.com</td>
                    <td>2020</td>
                    <td>
                        <button class="btn btn-success btn-sm">Detail</button>
                        <button class="btn btn-danger btn-sm" style="margin-left: 4px">Hapus</button>
                    </td>
                </tr> --}}
            </tbody>
        </table>
    </div>
    <div id="tambah-user">
        {{-- iconnya apa sy gak tau --}}
        <i class="fa fa-user-plus position-absolute top-50 start-50 translate-middle" style="color:white"></i>
    </div>


@endsection