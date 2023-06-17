@extends('layouts.main')
  @section('main')
  <title><?php echo e($title); ?> - Kecamatan Bungursari</title>
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/kantor.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Galeri</h2>
      <ol>
        <li><a href="/">Beranda</a></li>
        <li>Galeri</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Foto</h2>
      </div>
    <div class="StrukturORG">
        <img src="img/back.jpg" alt="" style="width: 100%;">
    </div>
    </div>
  </section><!-- End Call To Action Section -->


@endsection()
