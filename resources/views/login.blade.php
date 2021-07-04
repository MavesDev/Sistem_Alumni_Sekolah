<!doctype html>
<html lang="en">
{{--
    akun admin:
    astaga kehapus

    adminMale@Gmail.com
    adminmale478 
--}}

<head>
    <title>Login | SMKN 1 Katapang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/Logo.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/styleLogin.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body>
    <section class="ftco-section" style="background-color:  #a5f4ed;">
        <div class=" container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <div class="login-wrap py-5" style="background-color: #fff;">
                        <div class="img d-flex align-items-center justify-content-center" style="background-color: #5faee3; border-radius: 50%; color: black;">
                            <i class="far fa-user" style="font-size: 70px; margin-right: 1px;"></i>
                        </div>
                        <h3 class="text-center mb-4" style="color: black;">Masuk Ke Akun Anda</h3>
                        <form action="/login" method="post" class="login-form">
                            @csrf
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" autocomplete="off" name="email" required>
                                @error('email')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" autocomplete="off" name="password" required>
                                @error('password')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group d-md-flex">
                                <div class="w-100 text-md-left  mb-2">
                                    <a href="/reset" style="color:  #4a9ad0;">Lupa Password?</a>
                                </div>
                            </div>


                            <div class="form-group mt-4">
                                <button type="submit" class="btn form-control btn-primary rounded submit px-3">Masuk</button>
                            </div>

                            <p class="text-center" style="color: black;">Atau</p>
                        </form>

                        <div class="w-100 text-center mt-4 text reg-link">
                            <p class="mb-0" style="color: black;">Tidak Punya Akun?<a href="/register" class="ml-2" style="color: #4a9ad0; border-bottom: 1px solid #4a9ad0">DAFTAR</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('sweetalert::alert')

    </section>

    <script src="{{asset('/js/Login/jquery.min.js')}}"></script>
    <script src="{{asset('/js/Login/popper.js')}}"></script>
    <script src="{{asset('/js/Login/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/Login/main.js')}}"></script>

</body>

</html>