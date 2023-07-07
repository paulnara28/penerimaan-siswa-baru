<?php
include "layout/header.php"
?>

<section id="hero" class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class>Selamat Datang di Aplikasi Penerimaan Siswa Baru</h1>
        <p class="lead">Daftarkan diri Anda sekarang untuk menjadi siswa di sekolah kami.</p>
        <a href="reg.php" class="btn btn-light btn-lg">Daftar sekarang</a>
    </div>
</section>
<section id="features" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Fitur Aplikasi</h2>
        <div class="row">
            <hr>

<div class="col-md-4">
  <div class="card mb-4">
  <div class="card-body">
    <h5 class="card-title">Pendaftaran Online</h5>
    <p class="card-text">Menyediakan informasi lengkap mengenai profil sekolah dan program pendidikan.</p>
  </div>
</div>
</div>

<div class="col-md-4">
  <div class="card mb-4">
  <div class="card-body">
    <h5 class="card-title">Pengumuman Hasil Seleksi</h5>
    <p class="card-text">Pengumuman hasil seleksi siswa baru melalui aplikasi dengan notifikasi email.</p>
  </div>
</div>
</div>

<div class="col-md-4">
  <div class="card mb-4">
  <div class="card-body">
    <h5 class="card-title">Informasi Sekolah</h5>
    <p class="card-text">Menyediakan informasi lengkap mengenai profil sekolah dan program pendidikan.</p>
  </div>
</div>
</div>
</div>
    </div>
</section>

<section id="news">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-group mt-4">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="gambar-berita-1.jpg" alt="Gambar Berita" class="img-fluid">
                            </div>
                            <div class="col-md-10">
                                <h5>Judul Berita 1</h5>
                                <p>Deskripsi berita 1...</p>
                                <a href="berita-1.html" class="btn btn-primary">Selengkapnya</a>
                            </div>   
                        </div>
                    </li>
                </ul>

            </div>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kategori</h5>
                        <hr>
                        <ul>
                            <li>testing</li>
                            <li>testing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "layout/footer.php";
?>