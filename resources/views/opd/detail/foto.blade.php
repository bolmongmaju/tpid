{{-- <!DOCTYPE html>
<html lang="en">

<head>
    @include('opd.layout.head')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    @include('opd.layout.header')
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Visi dan Misi</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Visi dan Misi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team ">
      <div class="container">


          <div class="col-lg-12">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Visi</h4>
                @forelse($visimisi as $item)
                <p>{!! nl2br(($item->visi)) !!}</p>
                @empty
                <p>Belum di isi</p>
                @endforelse
              </div>
            </div>

            <br>

            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Misi</h4>
                @forelse($visimisi as $item)
                <p>{!! nl2br(($item->misi)) !!}</p>
                @empty
                <p>Belum di isi</p>
                @endforelse
              </div>
            </div>
          </div>

       

      </div>
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
 --}}















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
 
         <ol>
           <li><a href="index.html">Home</a></li>
         </ol>
         <h2>Gambar</h2>
 
       </div>
     </section><!-- End Breadcrumbs -->

         <!-- ======= About Us Section ======= -->
<!-- ======= Portfoio Section ======= -->
<section id="portfolio" class="portfoio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Gambar</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>App</p>
          <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfoio Section -->
 
    
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