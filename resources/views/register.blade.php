<!doctype html>
<html lang="en">

<head>
    <title>Register | SMKN 1 Katapang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/styleLogin.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>
        .input-file {
            font-size: 12px;
            background: white;
            color: gray;
        }

        ::-webkit-file-upload-button {
            float: right;
            margin-left: 2px;
            color: white;
            background: black;
            border-radius: 50px;
            border: none;
        }
    </style>
</head>

<body>
    <section class="ftco-section" style="background-color: #a5f4ed;">
        <div class=" container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <div class=" login-wrap py-5" style="background-color: #fff;">
                        <div class="img d-flex align-items-center justify-content-center" style="background-color: #4a9ad0; border-radius: 50%; color: black;">
                            <i class="far fa-user" style="font-size: 70px; margin-right: 1px;"></i>
                        </div>
                        <h3 class="text-center mb-4" style="color: black;">Daftarkan Akun Anda</h3>
                        <form action="/register" class="login-form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" name="name">

                                @error('name')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-envelope"></span></div>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>

                                @error('password')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" required>
                            </div>

                            <h5 class="text-center mb-4" style="color: black;">Isi Biodata</h5>

                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-graduation-cap"></span></div>
                                <input type="text" class="form-control @error('alumni_course') is-invalid @enderror" placeholder="Jurusan" name="alumni_course">
                                @error('alumni_course')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-address-card"></span></div>
                                <input type="text" class="form-control @error('alumni-code') is-invalid @enderror" placeholder="NIS" name="alumni_code">
                                @error('alumni_code')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-home"></span></div>
                                <input type="text" class="form-control @error('alumni_domisil') is-invalid @enderror" placeholder="Domisili" name="alumni_domisil">

                                @error('alumni_domisil')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-user-graduate"></span></div>
                                <input type="text" class="form-control @error('alumni_last_year') is-invalid @enderror" placeholder="Tahun lulus" name="alumni_last_year">

                                @error('alumni_last_year')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-users"></span></div>
                                <input type="text" class="form-control @error('alumni_generation') is-invalid @enderror" placeholder="Angkatan" name="alumni_generation">

                                @error('alumni_generation')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-image mb-3"></span></div>
                                <input type="file" class="input-file form-control @error('alumni_image') is-invalid @enderror" placeholder="Foto" name="alumni_image">

                                @error('alumni_image')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-user-tie"></span></div>
                                <input type="text" class="form-control @error('alumni_job') is-invalid @enderror" placeholder="Pekerjaan" name="alumni_job">

                                @error('alumni_job')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn form-control btn-primary rounded submit px-3">Daftar</button>
                            </div>
                        </form>
                        <div class="w-100 text-center mt-4 text reg-link">
                            <p class="mb-0" style="color: black;">Sudah Punya Akun?<a href="/login" class="ml-2" style="color: #4a9ad0; border-bottom: 1px solid #4a9ad0">Masuk</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('/js/Login/jquery.min.js')}}"></script>
    <script src="{{asset('/js/Login/popper.js')}}"></script>
    <script src="{{asset('/js/Login/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/Login/main.js')}}"></script>

</body>

</html>