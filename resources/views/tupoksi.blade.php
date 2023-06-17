@extends('layouts.main')
  @section('main')
  <title><?php echo e($title); ?> - Kecamatan Bungursari</title>
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/kantor.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>PROFILE KECAMATAN BUNGURSARI</h2>
      <ol>
        <li><a href="/">Beranda</a></li>
        <li>Tugas Pokok dan Fungsi</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Tugas Pokok dan Fungsi</h2>
      </div>
    <div class="StrukturORG">
        <h6 style="text-align: justify">TUGAS :

            Kecamatan mempunyai tugas melaksanakan koordinasi penyelenggaraan pemerintahan, pelayanan publik dan pemberdayaan masyarakat desa atau kelurahan.</h6>
            <h6 style="text-align: justify">FUNGSI :

                Penyelenggaraan urusan pemerintahan umum
                Pengoordinasian kegiatan pemberdayaan masyarakat
                Pengoordinasian upaya penyelenggaraan ketenteraman dan ketertiban umu
                Pengoordinasian penerapan dan penegakan peraturan daerah dan peraturan bupati
                Pengoordinasian pemeliharaan prasarana dan sarana pelayanan umum
                Pengoordinasian penyelenggaraan kegiatan pemerintah yang dilakukan oleh perangkat daerah di tingkat kecamatan
                Melaksanakan urusan pemerintahan dan pengawasan terhadap penyelenggaraan kegiatan desa atau kelurahan
                Pelaksanaan urusan pemerintahan  yang menjadi kewenangan daerah yang tidak dilaksanakan oleh unit kerja pemerintahan daerah yang ada di kecamatan
                Pelaksanaan tugas lain yang diperintahkan oleh peraturan perundang-undangan
                Pelaksanaan tugas yang dilimpahkan oleh Bupati untuk melaksanakan sebagai urusan pemerintahan yang menjadi kewenangan daerah</h6>
    </div>
    </div>
  </section><!-- End Call To Action Section -->

@endsection()
