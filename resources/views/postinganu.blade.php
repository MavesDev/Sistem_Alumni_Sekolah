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

    /* new */
    .card {
        margin-top: 10px;
    }

    .wrapper {
        padding: 10px 10px;
    }

    #profil-pic {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        float: left;
        position: relative;
    }

    .dropdown-item {
        height: 0.7cm;
    }

    .yang-lalu {
        font-size: 9pt;
        color: rgb(65, 65, 65);
    }

    /* new new */
    #more {
        display: none;
    }

</style>
@section('container')
    <div class="wrapper">
        <div style="margin: auto; width: 40rem" class="">
            <br>
            <h3>Postingan</h3>
            <a href="#" class="btn btn-outline-dark"><i class="fas fa-plus"> Tambah Postingan</i></a>
            <br><br>
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    <button style="float: right; border-style: none; background: none;"><i class="fas fa-flag"></i></button>
                    <button style="float: right; border-style: none; background: none;"><i
                            class="fas fa-share"></i></button>
                    <img src="{{ asset('/img/team/team-3.jpg') }}" alt="" id="profil-pic" style="margin-right: 10px;">
                    <h5 class="card-title">Asep Kurnia</h5>
                    <p class="card-subtitle yang-lalu">Rekayasa Perangkat Lunak</p>
                </div>
                <div class="wrapper">
                    <img src="{{ asset('/img/team/team-1.jpg') }}" class="card-img-top" style="display: block; margin: auto; width:16cm" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-bold"><strong>perayaan idul adha</strong></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus ipsum
                            elementum dolor varius, quis pretium massa porttitor. Etiam rhoncus tempus nisi, a volutpat
                            tellus consectetur nec. Mauris commodo, velit non ultrices lacinia, enim odio ullamcorper massa,
                            ut laoreet purus ex nec risus. Aliquam pharetra arcu nec velit bibendum mollis. Ut sollicitudin
                            sed nunc eget vehicula. Mauris lorem eros, lacinia sed dui quis, consequat cursus orci. Nam
                            scelerisque lacus est, vel vulputate turpis tempor a. Nullam id justo lacinia, semper felis eu,
                            interdum purus.
                            <br><br>
                            Donec dictum ultrices nisi, a feugiat nunc condimentum vel. Vestibulum ante ex, euismod non nisl
                            at, <span id="dots">...</span><span id="more">finibus semper orci. Orci varius natoque penatibus
                                et magnis dis parturient montes, nascetur
                                ridiculus mus. Aenean lacinia erat ut mollis tincidunt. Proin sodales consectetur aliquet.
                                Vivamus porta nunc at leo consequat, vitae pellentesque mauris rutrum. Nullam nec tristique
                                erat. Pellentesque elit nulla, cursus at enim quis, mollis feugiat ex. Nulla suscipit libero
                                et
                                cursus eleifend. Mauris feugiat consequat ex. Vivamus luctus lorem vitae diam scelerisque,
                                ac
                                cursus sem tempor. Sed ullamcorper orci vel ex rhoncus, sit amet scelerisque velit
                                consectetur.
                                In lacinia dui eget condimentum placerat. Phasellus gravida, arcu vel luctus gravida, sem
                                urna
                                mollis orci, et hendrerit nulla sem at mi. Duis tincidunt feugiat dolor, sit amet venenatis
                                lorem lacinia non. Donec consequat enim lacus, a vestibulum dui faucibus sed.
                                <br><br>
                                Donec dictum ultrices nisi, a feugiat nunc condimentum vel. Vestibulum ante ex, euismod non
                                nisl
                                at, finibus semper orci. Orci varius natoque penatibus et magnis dis parturient montes,
                                nascetur
                                ridiculus mus. Aenean lacinia erat ut mollis tincidunt. Proin sodales consectetur aliquet.
                                Vivamus porta nunc at leo consequat, vitae pellentesque mauris rutrum. Nullam nec tristique
                                erat. Pellentesque elit nulla, cursus at enim quis, mollis feugiat ex. Nulla suscipit libero
                                et
                                cursus eleifend. Mauris feugiat consequat ex. Vivamus luctus lorem vitae diam scelerisque,
                                ac
                                cursus sem tempor. Sed ullamcorper orci vel ex rhoncus, sit amet scelerisque velit
                                consectetur.
                                In lacinia dui eget condimentum placerat. Phasellus gravida, arcu vel luctus gravida, sem
                                urna
                                mollis orci, et hendrerit nulla sem at mi. Duis tincidunt feugiat dolor, sit amet venenatis
                                lorem lacinia non. Donec consequat enim lacus, a vestibulum dui faucibus sed.</span>
                        </p>
                        <button onclick="myFunction()" id="myBtn" class="btn btn-dark">Lanjut Baca</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- script untuk baca lebih lanjut --}}
    {{--FIXME   ketika ada postingan lebih dari 1,button akan ngebug  --}}
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Lanjut Baca";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Lebih sedikit";
                moreText.style.display = "inline";
            }
        }
    </script>

@endsection
