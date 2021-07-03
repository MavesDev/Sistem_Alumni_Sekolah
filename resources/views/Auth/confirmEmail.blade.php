<!doctype html>
<html lang="en">
{{--
    akun admin:
    astaga kehapus

    adminMale@Gmail.com
    adminmale478 
--}}

<head>
    <title>Konfirmasi Email | SMKN 1 Katapang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/styleLogin.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body style="background-color:  #a5f4ed;">
    <section class="ftco-section">
        <div class=" container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <div class="login-wrap py-5" style="background-color: #fff;">
                        <h3 class="text-center mb-4" style="color: black;">Konfirmasi Email</h3>

                        <div class="list-group">
                            <p class="text-center" style="color: black;">Mohon pilih email anda</p>
                            @foreach ($users as $user)
                            <a href="/email/{{ $user -> id }}" class="list-group-item list-group-item-action">{{ $user -> email }}</a>
                            @endforeach
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