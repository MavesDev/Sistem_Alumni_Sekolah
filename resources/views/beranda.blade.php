@extends('layout.main')

@section('title','Beranda')

@section('container')

<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
        <h1>SMKN 1 <span>Katapang</span></h1>
        <h2>Sistem Arsip Alumni</h2>
        <a href="#about" class="btn-get-started scrollto">Lihat Data</a>
    </div>
</section>

<div class="section-title" style="padding:0px;">
    <div style="padding-top: 20px;">
        <h2>Alumni Terbaru</h2>
    </div>
</div>

<section id="team" class="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img src="{{asset('/img/team/unknown.png')}}" alt="">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <p>
                        Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                    </p>
                    <div class="social">
                        <a href=""><i class="fas fa-envelope"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img src="{{asset('/img/team/unknown.png')}}" alt="">
                    <h4>Sarah Jhinson</h4>
                    <span>Product Manager</span>
                    <p>
                        Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                    </p>
                    <div class="social">
                        <a href=""><i class="fas fa-envelope"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img src="{{asset('/img/team/unknown.png')}}" alt="">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <p>
                        Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                    </p>
                    <div class="social">
                        <a href=""><i class="fas fa-envelope"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<div class="section-title" style="padding:0px;">
    <div style="padding-top: 20px;">
        <h2>Kepala Sekolah</h2>
    </div>
</div>

<section id="about" class="about">
    <div class="container mt-4">

        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('/img/team/unknown.png')}}" class="img-fluid" alt="" style="height: 360px; width: 360px">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <h3>Tentang Kepala Sekolah</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <ul>
                    <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                </ul>
                <div class="row icon-boxes">
                    <div class="col-md-6">
                        <i class="bx bx-receipt"></i>
                        <h4>Corporis voluptates sit</h4>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Ullamco laboris nisi</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="section-title" style="padding:0px; margin-top: 40px">
    <div style="padding-top: 20px;">
        <h2>Acara Selanjutnya</h2>
    </div>
</div>

<section id="about" class="about">
    <div class="container mt-4" style="background-color: #a5f4ed; border-radius: 20px">

        <div class="row">
            <div class="col-lg-5">
                <img src="{{asset('/img/team/music.png')}}" class="img-fluid" alt="" style="height: 360px; width: 360px; border-radius: 50%;">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <h3 class="mt-4">Acara Selanjutnya</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <ul>
                    <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                </ul>
                <div class="row icon-boxes">
                    <div class="col-md-6">
                        <i class="bx bx-receipt"></i>
                        <h4>Corporis voluptates sit</h4>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Ullamco laboris nisi</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="section-title" style="padding:0px; margin-top: 40px">
    <div style="padding-top: 20px;">
        <h2>Galeri</h2>
    </div>
</div>

<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Event 1</a></h4>
                        <p>RPL 1 | Angkatan 2010</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Event 2</a></h4>
                        <p>Multimedia 2 | Angkatan 90-an</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Event 3</a></h4>
                        <p>Kesiswaan | 2012</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection