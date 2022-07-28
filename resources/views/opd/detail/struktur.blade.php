<!DOCTYPE html>
<html lang="en">

<head>
    @include('opd.layout.head')
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="fixed-top d-flex align-items-center topbar-inner-pages">
      <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
          <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
        </div>
        <div class="cta d-none d-md-block">
          <a href="#about" class="scrollto">Get Started</a>
        </div>
      </div>
    </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-inner-pages">
    @include('opd.layout.header')
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Struktur Organisasi</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Struktur Organisasi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team ">
      <div class="container">
        @forelse($struktur as $item)
          <div class="col-lg-12">

    
                {{-- <h4>Struktur Organisasi</h4> --}}
                <img src="{{ Storage::url($item->struktur_organisasi ?? null) }}" alt="" style="  display: block;
                margin-left: auto;
                margin-right: auto;
                max-width: 80%;">
 
          </div>
        @empty
        <p>Struktur Organisasi Belum Diisi</p>
        @endforelse
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    @include('opd.layout.footer')
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('opd.layout.script')

</body>

</html>