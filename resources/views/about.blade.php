@extends('layout.main')

@section('title','Tentang')

@section('container')

<main id="main">
  <section id="what-we-do" class="what-we-do" style="margin: 0px; padding: 0px;">

    <div class="section-title">
      <div class="container">
        <div class="text-center">
          <h2 class="pb-4" style="padding-top: 50px;">Tentang Website</h2>
          <p class="pb-3">Web sistem arsip alumni, dimana web ini diciptakan dengan maksud untuk menyimpan dan merekap semua data - data alumni yang sudah lulus dari SMKN 1 Katapang. Tidak hanya untuk menyimpan data saja melainkan menghubungkan antara sekolah dengan alumni - alumni ataupun alumni dengan alumni lainnya, sehingga hubungan sekolah dengan siswa tidak akan putus begitu saja.</p>
        </div>
      </div>
    </div>

    </div>
  </section>

  <section id="services" class="services section-bg">
    <div class="container">

      <div class="text-center pb-4">
        <h2>Tujuan</h2>
        <p>Tujuan pembuatan dari website ini</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="icon-box">
            <i class="fas fa-database mt-4" style="color: black;"></i>
            <h4><a href="#">Kumpulan Data Arsip Alumni</a></h4>
            <p>Bertujuan menyimpan semua data dari alumni setiap jurusan, agar sekolah mengetahui bagaimana keadaan dari setiap alumni</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="far fa-newspaper mt-4" style="color: black;"></i>
            <h4><a href="#">Postingan</a></h4>
            <p>Sebagai tempat berkumpulnya semua informasi, para alumni bisa saling berkomunikasi dan memberikan informasi dari mulai acara hingga lowongan pekerjaan dapat disimpan disini.</p>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="icon-box">
            <i class="far fa-image mt-4" style="color: black;"></i>
            <h4><a href="#">Galeri</a></h4>
            <p>Memberikan kumpulan foto - foto dari acara di sekolah, dari setiap jurusan, angkatan ataaupun tahun lulus akan diberikan cuplikan foto sebagai kenangan.</p>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="icon-box">
            <i class="fab fa-connectdevelop mt-4" style="color: black;"></i>
            <h4><a href="#">Menguhubungkan Koneksi Sekolah ke Alumni</a></h4>
            <p>Setiap alumni memiliki profil sehingga sekolah bisa melihat profil alumni juga melihat data alumni jika sedang diperlukan.</p>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="icon-box">
            <i class="fas fa-info mt-4" style="color: black;"></i>
            <h4><a href="#">Kumpulan Informasi Sekolah</a></h4>
            <p>Alumni bisa melihat informasi tentang sekolah, seperti kepala sekolah baru dan juga acara yang akan ada di sekolah agar alumni bisa ikut berpartisipasi pula.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section id="team" class="team">
    <div class="container">

      <div class="text-center pb-5">
        <h2>Partner Tim</h2>
        <p>Tim atau partner yang bekerja dalam membuat website ini</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch profile-card">
          <div class="member" style="width: 360px; height: 320px;">
            <img src="{{ asset('/img/team/Indri.jpeg') }}" alt="" style="height: 195px; width:250px">
            <h4>Indriani</h4>
            <span>Web Designer | Front-End</span>
            <p>

            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch profile-card">
          <div class="member" style="width: 360px; height: 320px;">
            <img src="{{ asset('/img/team/vera.jpeg') }}" alt="" style="height: 195px; width:250px">
            <h4>Neng Verawaty Fajrin</h4>
            <span>Web Designer | Front-End</span>
            <p>

            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch profile-card">
          <div class="member" style="width: 360px; height: 320px;">
            <img src="{{ asset('/img/team/ajeng.jpeg') }}" alt="" style="height: 195px; width:250px">
            <h4>Ajeng Riani</h4>
            <span>Web Designer | Front-End</span>
            <p>

            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch profile-card ms-mobile">
          <div class="member" style="width: 360px; height: 320px;">
            <img src="{{ asset('/img/team/Ms.png') }}" alt="" style="height: 195px; width:250px">
            <h4>Rizqi Maulana S</h4>
            <span>Project Manager | Front-End</span>
            <p>

            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch profile-card">
          <div class="member" style="width: 360px; height: 320px;">
            <img src="{{ asset('/img/team/Raqhin.jpeg') }}" alt="" style="height: 195px; width:250px">
            <h4>Raqhin Kusmanadinata</h4>
            <span>Front-End | Leader | Back-End</span>
            <p>

            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>


      </div>

    </div>
  </section>

</main>

@endsection