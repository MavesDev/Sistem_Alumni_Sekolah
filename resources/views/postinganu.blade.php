@extends('layout/main')
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


</style>
@section('container')
    <div class="wrapper">
        <div class="sidebar">

        </div>
        <div style="margin: 0 40px;" class="">
            <br>
            <br>
            <h3>Postingan</h3>
            <br>
            <div class="card" style="width: 30rem;">
                <div class="card-header">
                    <img src="{{ asset('/img/team/unknown.png') }}" alt="" id="profil-pic">

                    {{-- <button class="btn" >
                        <i style="float: left" class="fas fa-flag"></i><p>&nbsp&nbsp&nbspreport</p>
                    </button> --}}
                    <button style="float: right; border-style: none; background: none;"><i class="fas fa-flag"></i></button>



                    <div class="dropdown">
                        <button class="btn btn-sm float-end" id="droppy" data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="fa fa-share"></i></button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="droppy">
                            <li><a href="#" class="dropdown-item"><i style="float: left" class="fas fa-share"></i>
                                    <p>&nbsp&nbsp&nbspshare</p>
                                </a></li>
                        </ul>
                    </div>
                    <h5 class="card-title">Asep Kurnia</h5>
                    <p class="card-subtitle yang-lalu">19 menit yang lalu</p>
                </div>
                <div class="wrapper">
                    <img src="{{ asset('/img/team/team-1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-bold">perayaan idul adha</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p>
                    </div>
                </div>
            </div>


            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection
