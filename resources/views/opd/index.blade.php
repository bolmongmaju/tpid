<!DOCTYPE html>
<html lang="en">

<head>
  @include('opd.layout.head')
</head>

<body>

  <!-- ======= Top Bar ======= -->
  {{-- @forelse($kontak as $item)
  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">{{$item->email}}</a>
        <i class="bi bi-phone-fill phone-icon"></i> {{$item->no_telp}}
      </div>
      <div class="cta d-none d-md-block">
        <a href="#about" class="scrollto">DUKCAPIL</a>
      </div>
    </div>
  </div>
  @empty
  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">-</a>
        <i class="bi bi-phone-fill phone-icon"></i> -
      </div>
      <div class="cta d-none d-md-block">
        <a href="#about" class="scrollto">-</a>
      </div>
    </div>
  </div>
  @endforelse --}}

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    @include('opd.layout.header')
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @foreach ($sliders as $item)
  <section id="hero" class="d-flex align-items-center">
      <div style="margin: 3%;">
        <div class="row">
          <div class="col-lg-8 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1>Dukcapil Bolaang Mongondow</h1>
            <h2>Selamat datang di website resmi dukcapil kabupaten bolaang mongondow</h2>
            {{-- <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div> --}}
  
            <div>
  
              <div class="row" style="margin-top: 2%;">
                <div class="col-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="dua-layanan">
                    {{-- <i class="bi bi-card-checklist"></i> --}}
                    <h4><a style="color: #f1f8ff" href="#">JDIH</a></h4>
                    <p class="satu-baris">Jaringan Dokumentasi dan Informasi Hukum</p>
                  </div>
                </div>
                <div class="col-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="dua-layanan" style="background-color: rgb(36, 36, 36);">
                    {{-- <i class="bi bi-card-checklist"></i> --}}
                    <h4><a style="color: #f1f8ff" href="#">PPID</a></h4>
                    <p class="satu-baris">(Badan publik dapat mempublikasi informasi yang dikuasai yang selanjutnya tersusun sebagai DIP secara otomatis.)</p>
                  </div>
                </div>
              </div>
  
            </div>
  
          </div>
          <div class="col-lg-4 order-1 order-lg-2 hero-img rounded">
            {{-- <img src="{{$item->image}}" class="img-fluid" alt=""> --}}
          </div>
        </div>
      </div>


  </section><!-- End Hero -->
  {{-- <section id="hero" class="d-flex justify-cntent-center align-items-center"  style="background-image: url({{$item->image}});">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Organisasi Kepegawaian (ORPEG)</span></h2>
          <p class="animate__animated animate__fadeInUp">Selamat Datang Di Website Resmi Organisasi Kepegawaian (ORPEG) Kabupaten Bolaang Mongondow</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section> --}}
  @endforeach

  <main id="main">
    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row justify-content-md-center">

          @forelse ($events as $item)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              {{-- <div class="icon"><i class="bx bxl-dribbble"></i></div> --}}
              <h4 class="title"><a href="{{ route('event-detail', $item->id) }}">{{$item->title}}</a></h4>
              <p class="description">{{ strip_tags($item->date ) }}</p>
            </div>
          </div>
          @empty

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <h4 class="title">Tidak ada agenda</h4>
              <p class="description">Agenda untuk saat ini tidak ada</p>
            </div>
          </div>
        </div>
        @endforelse

      </div>
    </section><!-- End Icon Boxes Section -->

     <!-- ======= Recent Blog Posts Section ======= -->
     <section id="recent-blog-posts" class="recent-blog-posts" style="background: #f1f8ff">

      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
          <p>Berita yang baru ditambahkan</p>
        </div>

        <div class="row">

          @foreach ($posts as $post)
          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="{{ $post->image}}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">{{ \Carbon\Carbon::parse($post->created_at)->diffForhumans() }}</span>
                <span class="post-author"> / {{ $post->user->name }}</span>
              </div>
              <h3 class="post-title-recent">{{ $post->title }} </h3>
              <p class="recent-blog-body">{{ strip_tags($post->body) }}</p>
              <a href="{{ route('berita-detail',$post->id) }}" class="readmore stretched-link"><span>Baca</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          @endforeach

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    @include('opd.layout.footer')
  </footer><!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('opd.layout.script')

</body>

</html>