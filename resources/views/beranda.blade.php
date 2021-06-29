@extends('layout.main')

@section('title', 'Beranda')

@section('container')

    <style>
        .ml3 {
            font-weight: 900;
            font-size: 3.5em;
        }

    </style>

    <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="margin-top:0px;">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>SMKN 1 <span>Katapang</span></h1>
            <h2 class="ml3">Sistem Arsip Alumni</h2>
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

                @foreach ($users as $user)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch user-mobile">
                        <div class="member">
                            <img src="/img/User/Profil/{{ $user->alumni_image }}" alt=""
                                style="height: 180px; width: 420px;">
                            <h4>{{ $user->name }}</h4>
                            <span>{{ $user->alumni_job }}</span>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <div class="section-title" style="padding:0px;">
        <div style="padding-top: 20px;">
            @foreach ($berandas as $beranda)
                <h2>Kepala Sekolah
                    @if (auth()->user()->level == 'admin')
                        <a href="/home/{{ $beranda->id }}/editHeadMaster"><span class="edit fas fa-edit"
                                style="color: white;"></span></a>
                    @endif
                </h2>
            @endforeach
        </div>
    </div>

    <section id="about" class="about">
        <div class="container mt-4">

            @foreach ($berandas as $beranda)
                <div class="row">
                    <div class="col-lg-6">
                        <img src="/img/Postingan/Beranda/{{ $beranda->headMaster_image }}" class="img-fluid" alt=""
                            style="height: 360px; width: 360px">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>{{ $beranda->headMaster_name }}</h3>
                        <p>
                            {{ $beranda->headMaster_desc }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <div class="section-title" style="padding:0px; margin-top: 40px">
        <div style="padding-top: 20px;">
            @foreach ($berandas as $beranda)
                <h2>Acara Sekolah Selanjutnya
                    @if (auth()->user()->level == 'admin')
                        <a href="/home/{{ $beranda->id }}/editEvent"><span class="edit fas fa-edit"
                                style="color: white;"></span></a>
                    @endif
                </h2>
            @endforeach
        </div>
    </div>

    <section id="about" class="about">
        <div class="container mt-4" style="background-color: #a5f4ed; border-radius: 20px">

            @foreach ($berandas as $beranda)
                <div class="row">
                    <div class="col-lg-5">
                        <img src="/img/Postingan/Beranda/{{ $beranda->event_image }}" class="img-fluid event-mobile" alt=""
                            style="height: 360px; width: 360px; border-radius: 50%;">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3 class="mt-4">{{ $beranda->event_name }}</h3>
                        <p>
                            {{ $beranda->event_desc }}
                        </p>
                    </div>
                </div>
            @endforeach

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

                @foreach ($galeris as $galeri)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">

                        <div class="portfolio-wrap">
                            <figure>
                                <img src="/img/Postingan/Galeri/{{ $galeri->galeri_image }}" class="img-fluid" alt=""
                                    style="height: 240px; width: 540px;">
                            </figure>

                            <div class=" portfolio-info">
                                <h4><a href="portfolio-details.html">{{ $galeri->galeri_name }}</a></h4>
                                <p>{{ $galeri->galeri_course }} | {{ $galeri->galeri_last_year }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml3');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml3 .letter',
                opacity: [0, 1],
                easing: "easeInOutQuad",
                duration: 1250,
                delay: (el, i) => 100 * (i + 1)
            }).add({
                targets: '.ml3',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 3000
            });

    </script>

@endsection
