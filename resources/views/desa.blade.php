@extends('layouts.main')
  @section('main')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/kantor.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>DESA</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Desa</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Daftar Desa Di Kecamatan Bungursari</h2>
        </div>

        <div class="table-responsive">
                <table class="table table-stripe table-sm">
                  <thead>
                    <tr>
                      <th scope="col">Kode Desa</th>
                      <th scope="col">Nama Desa</th>
                      <th scope="col">Lokasi Kantor Desa</th>
                      <th scope="col">Luas Wilayah Desa (km<sup>2</sup>)</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($desa as $desas)
                      <tr>
                        <td scope="row">{{ $desas->kodewilayah }}</td>
                        <td>{{ $desas->namadesa }}</td>
                        <td><a href="{{ $desas->url }}">Website desa {{ $desas->namadesa }}</a></td>
                        <td>{{ $desas->luaswil }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>



      </div>
    </section><!-- End Team Section -->

    <section id="call-to-action2" class="call-to-action2">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

  @endsection()
