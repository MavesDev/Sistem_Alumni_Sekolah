<!doctype html>
<html lang="en">

<head>
    <title>Register | SMKN 1 Katapang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/Logo.png') }}">

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
                                <input type="text" class="form-control @error('name') is-invalid @enderror" autocomplete="off" placeholder="Nama" name="name" required value="{{ old('name') }}">

                                @error('name')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-envelope"></span></div>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" autocomplete="off" placeholder="Email" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="off" placeholder="Password" name="password" required>

                                @error('password')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                <input type="password" class="form-control" autocomplete="off" placeholder="Konfirmasi Password" name="password_confirmation" required>
                            </div>

                            <h5 class="text-center mb-4" style="color: black;">Isi Biodata</h5>

                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-graduation-cap"></span></div>
                                <select class="form-select form-control" name="alumni_course" aria-label="Default select example">
                                    <option value="" disabled>Jurusan</option>
                                    <option value="Rekayasa Perangkat Lunak" selected>Rekayasa Perangkat Lunak</option>
                                    <option value="Multimedia">Multimedia</option>
                                    <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                    <option value="Tekstil">Tekstil</option>
                                    <option value="Elektronika">Elektronika</option>
                                    <option value="Mekatronika">Mekatronika</option>
                                    <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                    <option value="Mesin">Mesin</option>
                                    <option value="Teknik Gambar Mesin">Teknik Gambar Mesin</option>
                                </select>
                                @error('alumni_course')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-address-card"></span></div>
                                <input type="text" class="form-control @error('alumni-code') is-invalid @enderror" autocomplete="off" placeholder="NIS (9 Karakter)" name="alumni_code" required value="{{ old('alumni_code') }}">
                                @error('alumni_code')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-home"></span></div>
                                <input type="text" class="form-control @error('alumni_domisil') is-invalid @enderror" autocomplete="off" placeholder="Domisili" name="alumni_domisil" required value="{{ old('alumni_domisil') }}">

                                @error('alumni_domisil')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-user-graduate"></span></div>
                                <select class="form-select form-control" name="alumni_last_year" aria-label="Default select example">
                                    <option value="" disabled>Tahun Lulus</option>
                                    <option value="2022" selected>2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="Sebelum 2010">Sebelum 2010</option>
                                </select>

                                @error('alumni_last_year')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-users"></span></div>
                                <select class="form-select form-control" name="alumni_generation" aria-label="Default select example" autocomplete="off" placeholder="Angkatan">
                                    <option value="" disabled>Angkatan</option>
                                    <option value="21" selected>21</option>
                                    <option value="20">20</option>
                                    <option value="19">19</option>
                                    <option value="18">18</option>
                                    <option value="17">17</option>
                                    <option value="16">16</option>
                                    <option value="15">15</option>
                                    <option value="14">14</option>
                                    <option value="13">13</option>
                                    <option value="12">12</option>
                                    <option value="11">11</option>
                                    <option value="Dibawah Angkatan Ke-10">Dibawah Angkatan Ke-10</option>
                                </select>
                                @error('alumni_generation')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-image mb-3"></span></div>
                                <input type="file" class="input-file form-control @error('alumni_image') is-invalid @enderror" autocomplete="off" placeholder="Foto" name="alumni_image">

                                @error('alumni_image')
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-user-tie"></span></div>
                                <input type="text" class="form-control @error('alumni_job') is-invalid @enderror" autocomplete="off" placeholder="Pekerjaan" name="alumni_job" required value="{{ old('alumni_job') }}">

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