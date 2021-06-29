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
                <a class="edit-button" href="/alumnis/{{ Auth::User()->id }}/editUser" style=" color:white; background-color:black; border-radius: 50%; float: left; margin-top: 25px; margin-left: 50px; height: 50px; width: 50px;"><span class="edit fas fa-edit" style="margin-top: 16px; margin-left: 2px;"></span></a>
                <a class="logout-button" href="/logout" style=" color:white; background-color:black; border-radius: 50%; float: left; margin-top: 85px; margin-left: -50px; height: 50px; width: 50px;"><span class="fas fa-sign-out-alt" style="margin-top: 16px; margin-left: 2px;"></span></a>
            </div>
            <img src="/img/User/Profil/{{ Auth::User()->alumni_image }}" class="rounded-circle mx-auto d-block" alt="..." style="height: 250px; width: 250px;">
        </div>

        <div class="container mb-10">
            <div class="row">
                <div class="mt-5">
                    <h1 class="mt-5  fs-1 text-center"> {{ Auth::User()->name }} </h1>
                </div>
                <div class="mt-3 mb-5">
                    <h4 class=" mb-3 text-center" style="color: gray;"> {{ Auth::User()->alumni_job }} </h4>
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
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="text-center mb-3">
                    <h2>Biodata</h2>
                </div>

                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="fas fa-graduation-cap mt-4" style="color: black;"></i>
                            <h4><a href="#">Jurusan</a></h4>
                            <p>{{ Auth::User()->alumni_course }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="fas fa-home mt-4" style="color: black;"></i>
                            <h4><a href="#">Domisil</a></h4>
                            <p>{{ Auth::User()->alumni_domisil }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="icon-box">
                            <i class="fas fa-user-graduate mt-4" style="color: black;"></i>
                            <h4><a href="#">Tahun Lulus</a></h4>
                            <p>{{ Auth::User()->alumni_last_year }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="icon-box">
                            <i class="fas fa-users mt-4" style="color: black;"></i>
                            <h4><a href="#">Angkatan</a></h4>
                            <p>{{ Auth::User()->alumni_generation }}</p>
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <h4>Ringkasan</h4>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="icon-box">
                            <i class="fas fa-user-tie mt-4" style="color: black;"></i>
                            <h4><a href="#">{{ Auth::User()->alumni_job }}</a></h4>
                            <p>{{ Auth::User()->alumni_job_desc }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="icon-box">
                            <i class="far fa-file-alt mt-4 " style="color: black;"></i>
                            <h4><a href="#">Deskripsi</a></h4>
                            <p>{{ Auth::User()->alumni_desc }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
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
    <div class="card-group card-mobile">
        <div class="card mx-6 card-mobile card-mobile icon-mobile">
            <i class="card-img-top fas fa-envelope text-center " style="border-radius: 100%;" alt="..."></i>
            <div class="card-body">
                <h5 class="card-title text-center mt-2">{{ Auth::User()->email }}</h5>
            </div>
        </div>
        <div class="card mx-2 card-mobile icon-mobile">
            <i class="card-img-top fab fa-whatsapp text-center " style="border-radius: 100%;" alt="..."></i>
            <div class="card-body">
                <h5 class="card-title text-center mt-2">{{ Auth::User()->whatsapp }}</h5>
            </div>
        </div>
        <div class="card mx-2 card-mobile icon-mobile">
            <i class="card-img-top fab fa-instagram text-center " style="border-radius: 100x;" alt="..."></i>
            <div class="card-body">
                <h5 class="card-title text-center mt-2">{{ Auth::User()->instagram }}</h5>
            </div>
        </div>
        <div class="card mx-2 card-mobile icon-mobile">
            <i class="card-img-top fab fa-twitter text-center " style="border-radius: 100%;" alt="..."></i>
            <div class="card-body">
                <h5 class="card-title text-center mt-2">{{ Auth::User()->twitter }}</h5>
            </div>
        </div>
    </div>
</div>

@endsection