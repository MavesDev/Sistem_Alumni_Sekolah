@extends('layout/main')
<style>
    .amico {
        background-color: #A5F4ED;
        padding: 20px 10px;
        width: 14.7cm;
        float: left;
        line-height: normal;
        margin-right: 40px;
        margin-top: 10px;
        border-radius: 20px;
    }

    .amico h6,
    h5 {
        padding-left: 80px;

    }

    .amico h5 {
        font-weight: bold;
    }
    .amico p{
        padding-top: 15px;
    }

    #gambar{
        border-radius: 20px;
    }
</style>
@section('container')
    <div style="margin: 0 35px;" class="">

        <br>
        <br>
        <h3>Postingan</h3>
        <br>
        <div class="amico">
            <div class="header-amico">

                <img src="{{ asset('/img/team/unknown.png') }}" alt="#"
                    style="width: 60px; height:60px; border-radius: 50%; float:left; position: relative; ">
                <button style="float: right; border-style: none; background: none;"><i
                        class="fa fa-ellipsis-h"></i></button>
                <h5>Asep Kurnia</h5>
                <h6>Angkatan 19</h6>
                <br>
            </div>
            <img src="{{asset('img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="amico">
            <div class="header-amico">

                <img src="{{ asset('/img/team/unknown.png') }}" alt="#"
                    style="width: 60px; height:60px; border-radius: 50%; float:left; position: relative; ">
                <button style="float: right; border-style: none; background: none;"><i
                        class="fa fa-ellipsis-h"></i></button>
                <h5>Asep Kurnia</h5>
                <h6>Angkatan 19</h6>
                <br>
            </div>
            {{-- <img src="{{asset('img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt=""> --}}

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="amico">
            <div class="header-amico">

                <img src="{{ asset('/img/team/unknown.png') }}" alt="#"
                    style="width: 60px; height:60px; border-radius: 50%; float:left; position: relative; ">
                <button style="float: right; border-style: none; background: none;"><i
                        class="fa fa-ellipsis-h"></i></button>
                <h5>Asep Kurnia</h5>
                <h6>Angkatan 19</h6>
                <br>
            </div>
            {{-- <img src="{{asset('img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt=""> --}}

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="amico">
            <div class="header-amico">

                <img src="{{ asset('/img/team/unknown.png') }}" alt="#"
                    style="width: 60px; height:60px; border-radius: 50%; float:left; position: relative; ">
                <button style="float: right; border-style: none; background: none;"><i
                        class="fa fa-ellipsis-h"></i></button>
                <h5>Asep Kurnia</h5>
                <h6>Angkatan 19</h6>
                <br>
            </div>
            <img src="{{asset('img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="amico">
            <div class="header-amico">

                <img src="{{ asset('/img/team/unknown.png') }}" alt="#"
                    style="width: 60px; height:60px; border-radius: 50%; float:left; position: relative; ">
                <button style="float: right; border-style: none; background: none;"><i
                        class="fa fa-ellipsis-h"></i></button>
                <h5>Asep Kurnia</h5>
                <h6>Angkatan 19</h6>
                <br>
            </div>
            {{-- <img src="{{asset('img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt=""> --}}

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
@endsection
