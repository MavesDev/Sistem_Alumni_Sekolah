<!doctype html>
<html lang="en">

<head>
    <title>Cetak Data | SMKN 1 Katapang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/styleLogin.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>
        body {
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-5" style="min-height: 100px;  border-bottom: solid 4px black;">
        <div>
            <img src="{{ asset('/img/Logo.png') }}" alt="" style="height: 200px; float: left;">
        </div>
        <div style="text-align: center; font-family: serif; margin-right: 150px; padding: -20px 0px;">
            <h4 style=" font-family: serif;"> Pemerintah Provinsi Jawa Barat <br> Dinas Pendidikan </h4>
            <h2 style="font-family: serif; color: black; font-size:40px ;"> SMK Negeri 1 Katapang </h2>
            <p style="font-family: serif; color: black; font-size:12px ;"> Jalan Ceuri Terusan Kopo KM. 13,5 Kec. Katapang, Kab. Bandung Indonesia </p>
            <p style="font-family: serif; color: black; font-size:12px ; margin-left: 210px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

    <div class="container mt-4 text-center">
        <h2 style="font-family: serif;">Surat Data Alumni</h2>
        <p style="font-family: serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
    </div>

    <div class="container pt-4">
        <p style="font-family: serif; color: black; font-size: 18px;">Kepala sekolah SNK Negeri 1 Katapang menerangkan bahwa :</p>
        <ul>
            <li>
                <p style="font-family: serif; color: black; font-size: 14px;">Nama &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; : {{ $user->name }}</p>
            </li>
            <li>
                <p style="font-family: serif; color: black; font-size: 14px;">Pekerjaan &nbsp&nbsp&nbsp&nbsp; : {{ $user->alumni_job }}</p>
            </li>
            <li>
                <p style="font-family: serif; color: black; font-size: 14px;">Domisil &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; : {{ $user->alumni_domisil }}</p>
            </li>
            <li>
                <p style="font-family: serif; color: black; font-size: 14px;">Jurusan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; : {{ $user->alumni_course }}</p>
            </li>
            <li>
                <p style="font-family: serif; color: black; font-size: 14px;">Tahun Lulus &nbsp;: {{ $user->alumni_last_year }}</p>
            </li>
            <li>
                <p style="font-family: serif; color: black; font-size: 14px;">Angkatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;: {{ $user->alumni_generation }}</p>
            </li>
        </ul>
    </div>

    <div class="container pt-3 mt-4">
        <p style="font-family: serif; color: black; font-size: 18px;">Benar benar alumni dari SMK Negeri 1 Katapang, Jalan Ceuri Terusan Kopo KM. 13,5 Kec. Katapang,<br> Kab. Bandung Indonesia. </p>
        <p style="font-family: serif; color: black; font-size: 18px;">Demikian surat keterangan ini dibuat dengan sesungguhnya dan untuk dapat dipergunakan <br> sebagai nantinya. </p>
    </div>

    <div class="container" style="margin-top: 140px;">
        <p style="font-family: serif; color: black; font-size: 18px; float:right; margin-right: 130px;">Kepala sekolah </p>
    </div>

    <script>
        window.print();
    </script>

    <script src="{{asset('/js/Login/jquery.min.js')}}"></script>
    <script src="{{asset('/js/Login/popper.js')}}"></script>
    <script src="{{asset('/js/Login/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/Login/main.js')}}"></script>

</body>

</html>