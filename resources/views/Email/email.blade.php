<!doctype html>
<html lang="en">
{{--
    akun admin:
    astaga kehapus

    adminMale@Gmail.com
    adminmale478 
--}}

<head>
    <title>Reset Password | SMKN 1 Katapang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/styleLogin.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body  style="background-color:  #a5f4ed;">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <div class="login-wrap py-5" style="background-color: #fff;">
                        <div class="img d-flex align-items-center justify-content-center" style="background-color: #5faee3; border-radius: 50%; color: black;">
                            <i class="far fa-user" style="font-size: 70px; margin-right: 1px;"></i>
                        </div>
                        <h3 class="text-center mb-4" style="color: black;">Konfirmasi Email</h3>
                        <p class="text-center" style="color: black;">Klik tombol di bawah ini dan cek akun email untuk mengkonfirmasi bahwa ini adalah benar anda</p>
                        <form action="{{ route('send.email') }}" method="post">
                            @csrf
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                            @endif
                            <div class="row" style="display: none;">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ $user -> name }}">
                                        @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{ $user -> email }}">
                                        @error('email')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="id">id</label>
                                        <input type="id" name="id" class="form-control" placeholder="Enter id" value="{{ $user -> id }}">
                                        @error('id')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="display: none;">
                                <label for="inputSubject">Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Enter subject" value="Hai {{ $user -> name }}, Silahkan klik untuk mereset password anda!">
                                @error('subject')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="form-group" style="display: none;">
                                <label for="inputMessage">Message</label>
                                <textarea name="content" rows="5" class="form-control" placeholder="Enter Your Message"><a class="btn btn-dark mt-2" href="localhost/password/{{ $user -> id }}/update"> Ubah Password Anda </a></textarea>
                                @error('content')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="text-center px-2">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>  Kirim email verifikasi</button>
                            </div>
                        </form>
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