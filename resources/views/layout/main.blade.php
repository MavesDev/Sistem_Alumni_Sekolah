<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') | SMKN 1 Katapang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @if (auth()->user()->level == "user")
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="8483ff3b-816a-4784-a30d-f03c4e5afc5d";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    @endif

</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center" style="position: sticky; top:0;">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="/home" style="position: relative; top: 5px;">SMKN 1 KATAPANG</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="/home"><img src="{{asset('/img/Logo.png')}}" style="float: left; padding-right: 15px;" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="/home">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="/alumnis">Alumni</a></li>
                    <li><a class="nav-link scrollto" href="/posts">Post</a></li>
                    <li><a class="nav-link scrollto" href="/galeris">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="/about">Tentang</a></li>
                </ul>
                <i class="fas fa-list-ul mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <div class="header-social-links d-flex align-items-center">
                <div>
                    <p class="mb-1" style="font-weight: 200; font-size: 48px ;">|</p>
                </div>
                <div style="display: block; padding: -20px 0px;">
                    <p style="margin: 0;margin-top: 20px;font-size: 14px;">{{ Auth::User()->name }}</p>
                    <p style="font-size: 13px; color: #757575;">{{ Auth::User()->alumni_code }}</p>
                </div>
                <a href="/alumnis/user"><img src="/img/User/Profil/{{ Auth::User()->alumni_image }}" style="margin-left: 20px; width: 40px; height: 40px;border-radius: 50%; float: right;" alt="#"></a>
            </div>

        </div>
    </header>

    <div>
        @yield('container')
        <!-- SweetAlert -->
        @include('sweetalert::alert')
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer" style="height: 250px; clear: both; position: relative; margin-top: 120px;">

        <div class="footer-top" style="background-color: #1f1f1f;">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>SMKN 1 Katapang</h3>
                        <p>
                            Jalan Ceuri Terusan Kopo KM. 13,5<br>
                            Kec. Katapang, Kab. Bandung<br>
                            Indonesia <br><br>
                            <strong>Copyright &copy;</strong><br>
                            <strong>SMKN 1 Katapang, 2021</strong><br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Links</h4>
                        <ul>
                            <li><a href="/home">Beranda</a></li>
                            <li><a href="/alumnis">Alumni</a></li>
                            <li><a href="/post">Post</a></li>
                            <li><a href="/galeris">Galeri</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Kontak Kami</h4>
                        <ul>
                            <li><i class="far fa-envelope"></i>
                                <p href="mailto:smkn1katapang@bdg.centrin.net.id" style="padding-left: 15px;">smkn1katapang@bdg.centrin.net.id</p>
                            </li>
                            <li><i class="fab fa-instagram"></i>
                                <p href="https://www.instagram.com/smkn1katapangofficial/" style="padding-left: 15px;"> smkn1katapangofficial</p>
                            </li>
                            <li><i class="fas fa-phone-alt"></i>
                                <p href="tel:022-5893-737" style="padding-left: 15px;">(022) 5893-737</p>
                            </li>
                            <li><i class="fas fa-globe"></i>
                                <p href="http://smkn1katapang.sch.id/" style="padding-left: 15px;">http://smkn1katapang.sch.id/</p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-newsletter">
                        <a href="index.html"><img src="{{asset('/img/Logo.png')}}" style="margin-left: 140px" class="img-fluid"></a>
                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <script>
        // $(window).on("load", function() {
        //     $(".loader-wrapper").fadeOut("slow");
        // });

    var loader = document.querySelector(".loader-wrapper");
    window.addEventListener("load",vanish);
    function vanish() 
    {
        loader.classList.add("disappear");   
    }
    </script>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-sort-up mt-2"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>