<!DOCTYPE html>
<html lang="en">

<head>
    @include('lolak.layout.head')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    @include('lolak.layout.header')
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Kontak</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Kontak</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    @forelse($kontak as $item)
    <section id="contact" class="contact">
      <div class="container">

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="{{$item->maps}}" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat:</h4>
                <p>{{$item->alamat}}</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="info">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{$item->email}}</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="info">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>{{$item->no_telp}}</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    @empty
      <p>Belum ada data kontak</p>
    @endforelse

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    @include('lolak.layout.footer')
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('lolak.layout.script')

</body>

</html>