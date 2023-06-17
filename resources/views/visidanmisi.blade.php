@extends('layouts.main')
  @section('main')
  <title><?php echo e($title); ?> - Kecamatan Bungursari</title>
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/kantor.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>PROFILE KECAMATAN BUNGURSARI</h2>
      <ol>
        <li><a href="/">Beranda</a></li>
        <li>Visi dan Misi</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Visi</h2>
      </div>
    <div class="visidanmisi">
        <h6 style="text-align: justify">MEWUJUDKAN KECAMATAN BUNGURSARI MENJADI WILAYAH TERDEPAN DALAM MEMBERIKAN PELAYANAN PRIMA SERTA MENINGKATKAN KUALITAS PENDUDUK MENJADI LEBIH BAIK</h6>
    </div>
    <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Misi</h2>
        </div>
      <div class="visi dan misi">
          <h6 style="text-align: justify">MENGOPTIMALKAN PENYELENGGARAAN TUGAS POKOK FUNGSI KECAMATAN MELALUI PENINGKATAN KUALITAS SDM APARATUR DAN PENGELOLAAN KETERSEDIAAN SARANA DAN PRASARANA </h6>
      </div>
    </div>
  </section><!-- End Call To Action Section -->

@endsection()
