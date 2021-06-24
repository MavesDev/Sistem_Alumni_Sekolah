@extends ('layout.main')

@section('title','Detail Alumni')

@section('container')

<style>
    .edit:hover {
        color: black;
        transition: ease 0.2s;
    }

    .edit-button:hover {
        background-color: white;
        transition: ease 0.2s;
    }
</style>

<div class="bg-light">
    <div class="text-center">
        <div class="section-title py-4">
            <div style="position: fixed; ">
                @if (auth()->user()->level == "admin")
                <a class="edit-button" href="/alumnis/{{( $user->id )}}/edit" style=" color:white; background-color:black; border-radius: 50%; float: left; margin-top: 25px; margin-left: 50px; height: 50px; width: 50px;"><span class="edit fas fa-edit" style="margin-top: 16px; margin-left: 2px;"></span></a>
                @endif
            </div>
            <img src="/img/User/Profil/{{ $user->alumni_image }}" class="rounded-circle mx-auto d-block" alt="..." style="height: 250px; width: 250px;">
        </div>

        <div class="container mb-10">
            <div class="row">
                <div class="mt-5">
                    <h1 class="mt-5  fs-1 text-center"> {{ $user->name }} </h1>
                </div>
                <div class="mt-3 mb-5">
                    <h4 class=" mb-3 text-center" style="color: gray;"> {{ $user->alumni_job }} </h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-title" style="padding:0px; margin-top: 45px">
    <div style="padding-top: 20px;">
        <h2>Profil</h2>
    </div>
</div>



<div class="container" data-aos="fade-up" style="margin-top: 80px;">

    <section id="about" class="about">

        <div class="row">
            <div class="col-lg-8 pt-4 pt-lg-0 content">
                <h3>{{ $user->name }}</h3>
                <h5 class="mb-2">
                    Biodata Alumni:
                </h5>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Pekerjaan :</strong> <span>{{ $user->alumni_job }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>NIS &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;:</strong> <span>{{ $user->alumni_code }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Jurusan &nbsp&nbsp&nbsp&nbsp:</strong> <span>{{ $user->alumni_course }}</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Domisil &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</strong> <span>{{ $user->alumni_domisil }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Angkatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</strong> <span>{{ $user->alumni_generation }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Tahun Lulus &nbsp&nbsp&nbsp&nbsp:</strong> <span>{{ $user->alumni_last_year }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="resume" class="resume">

        <div class="row">
            <div class="col-lg-6">

                <h3 class="resume-title">Riwayat Pekerjaan </h3>
                <div class="">
                    <h4>{{ $user->alumni_job }}</h4>
                    <p>{{ $user->alumni_job_desc }}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="resume-title">Deskripsi</h3>
                <div class="">
                    <p>{{ $user->alumni_desc }}</p>
                </div>
            </div>
        </div>
    </section>

</div>

<div class="section-title" style="padding:0px; margin-top: 45px;">
    <div style="padding-top: 20px;">
        <h2>Kontak</h2>
    </div>
</div>

<!-- <div class="container">
    <div class="text-center d-inline">
        <div class="text-center" style="display: inline-block; margin: 0px 20px; text-align: center;">
            <i class="fas fa-envelope" style="font-size: 128px;"></i>
        </div>
        <div class="text-center" style="display: inline-block; margin: 0px 20px; text-align: center;">
            <i class="fas fa-envelope" style="font-size: 128px;"></i>
        </div>
        <div class="text-center" style="display: inline-block; margin: 0px 20px; text-align: center;">
            <i class="fas fa-envelope" style="font-size: 128px;"></i>
        </div>
        <div class="text-center" style="display: inline-block; margin: 0px 20px; text-align: center;">
            <i class="fas fa-envelope" style="font-size: 128px;"></i>
        </div>
    </div>
</div> -->
<!-- 
<div class="container">
    <div class="py-5">
        <div class="text-center mt-5">
            <ul>
                <div style="display: inline;">
                    <li style="display: inline-block; margin: 0px 60px; text-align: center;"><a href=""><i class="icon fab fa-whatsapp" style="font-size: 128px;"></i></a></li>
                </div>
                <div style="display: inline;">
                    <li style="display: inline-block; margin: 0px 60px; text-align: center;"><a href=""><i class="icon fab fa-twitter" style="font-size: 128px;"></i></a></li>
                </div>
                <div style="display: inline;">
                    <li style="display: inline-block; margin: 0px 60px; text-align: center;"><a href=""><i class="icon fab fa-instagram" style="font-size: 128px;"></i></a></li>
                </div>
                <div style="display: inline;">
                    <li style="display: inline-block; margin: 0px 60px; text-align: center;"><a href=""><i class="icon fas fa-envelope" style="font-size: 128px;"></i></a></li>
                </div>
            </ul>
        </div>
    </div>
</div> -->

<div class="container" style="margin-top: 60px;">
    <div class="card-group">
        <div class="card mx-6">
            <i class="card-img-top fas fa-envelope text-center" style="border-radius: 100%; font-size: 128px;" alt="..."></i>
            <div class="card-body">
                <h5 class="card-title text-center mt-2">{{ $user->email }}</h5>
            </div>
        </div>
        <div class="card mx-2">
            <i class="card-img-top fab fa-whatsapp text-center" style="border-radius: 100%; font-size: 128px;" alt="..."></i>
            <div class="card-body">
                <h5 class="card-title text-center mt-2">{{ $user->whatsapp }}</h5>
            </div>
        </div>
        <div class="card mx-2">
            <i class="card-img-top fab fa-instagram text-center" style="border-radius: 100%; font-size: 128px;" alt="..."></i>
            <div class="card-body">
                <h5 class="card-title text-center mt-2">{{ $user->instagram }}</h5>
            </div>
        </div>
        <div class="card mx-2">
            <i class="card-img-top fab fa-twitter text-center" style="border-radius: 100%; font-size: 128px;" alt="..."></i>
            <div class="card-body">
                <h5 class="card-title text-center mt-2">{{ $user->twitter }}</h5>
            </div>
        </div>
    </div>
</div>

@endsection