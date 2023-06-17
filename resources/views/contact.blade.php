@extends('layouts.main')
  @section('main')
  <title><?php echo e($title); ?> - Kecamatan Bungursari</title>
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/kantor.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Hubungi Kami</h2>
      <ol>
        <li><a href="/">Beranda</a></li>
        <li>Contact Us</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
      <form action="addContact" method="post">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Hubungi Kami</h2>
      </div>
    <div class="hubungikami">
            @csrf
            <div class="sarankomentar">
                <div>
                    <label for="exampleFormControlInput" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email_address" required>
                  </div>
                  <div>
                    <label for="exampleFormControlTextarea1" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" required>
                  </div>
                  <div>
                    <label for="exampleFormControlTextarea1" class="form-label">Saran atau Komentar</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="saran"></textarea>
                  </div>
                  <button class="kirimsarkom" type="submit">Kirim</button>
            </div>

            <div class="kontakkami">
                <h5><strong>Alamat Kantor Kecamatan</strong>&emsp;<i class="bi bi-geo-alt-fill"></i><br></h5>
                <h6>&emsp;&emsp;Jl. Veteran, Bungursari, Kec. Bungursari, <br>&emsp;&emsp; Purwakarta, Jawa Barat 41181</h6>

                <h5><strong>&emsp;Alamat Email </strong>&emsp;<i class="bi bi-envelope-fill"></i><br></h5>
                <h6>&emsp;&emsp;Alamat Email Kecamatan Bungursari</h6>

                <h5><strong>&emsp;Nomor Telepon</strong>&emsp;<i class="bi bi-telephone-fill"></i><br></h5>
                <h6>&emsp;&emsp;Nomor Telepon</h6>


            </div>

        </div>
    </div>
</form>
  </section><!-- End Call To Action Section -->

@endsection()
