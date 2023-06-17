@extends('layouts.main')
  @section('main')
  <title><?php echo e($title); ?> - Kecamatan Bungursari</title>
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/kantor.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>PROFILE KECAMATAN BUNGURSARI</h2>
      <ol>
        <li><a href="/">Beranda</a></li>
        <li>Sejarah</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Sejarah</h2>
      </div>
    <div class="sejarah">
        <h6 style="text-align: justify">Nama Desa Bungursari diambil dari dua suku kata  “Bungur” yang artinya Ungu/Pohon Bungur yang membunyai bunga berwana ungu dan mempunyai banyak khasiat, warna ungu juga diartikan sebagai “imajinasi” dan “Sari” yang artinya Bagian Terpenting, Desa Bungursari mempunyai makna bagian terpenting dalam suatu daerah dan pusat pemerintahan yang mempunyai imajinasi-imajinasi dalam membangun Desa.

            Pada tahun 1980 sebelum ada pemekaran , Desa Bungursari sebagai desa agraris merupakan sebuah wilayah bagian dari Desa Cibungur kecamatan campaka kabupaten purwakarta, kemudian sesuai Peraturan Daerah Nomor 24 Tahun 2000 Kecamatan Campaka mulai dimekarkan menjadi 3 kecamatan yakni :

            Kecamatan Bungursari ,
            Kecamatan Cibatu, dan
            Kecamatan Campaka.
            Pada tanggal 3 maret 1983 akhirnya Desa Bungursari diakui secara syah menurut hukum,mempunyai luas wilayah 302,46 Ha dan terletak di atas ketinggian 75 Mdpl, yang berada di pusat kecamatan Bungursari dan 10 Km dari pusat Pemerintahan Kabupaten Purwakarta.</h6>
    </div>
    </div>
  </section><!-- End Call To Action Section -->

@endsection()
