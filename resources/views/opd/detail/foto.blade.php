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
          <h2>Foto</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Foto</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Foto</li>
              {{-- <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li> --}}
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
        @forelse($foto as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ Storage::url('public/photo-images/'. $item->image) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$item->caption}}</h4>
                <div class="portfolio-links">
                  <a href="{{ Storage::url('public/photo-images/'. $item->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$item->caption}}">Lihat</a>
                  {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>
        @empty
          <p>Tidak Ada Foto</p>
        @endforelse

        </div>

      </div>
    </section><!-- End Portfolio Section -->

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