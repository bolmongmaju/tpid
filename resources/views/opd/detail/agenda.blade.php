<!DOCTYPE html>
<html lang="en">

<head>
    @include('lolak.layout.head')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    @include('lolak.layout.header')
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Agenda</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Agenda</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team ">
      <div class="container">

        <div class="row">
            
        @forelse ($events as $event)
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              {{-- <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div> --}}
              <div class="member-info">
                <h4>{{$event->title}}</h4>
                <span>{{$event->location}} - {{$event->date}}</span>
                <p>{!! nl2br($event->content)!!}</p>
              </div>
            </div>
          </div>

          @empty

          <p>Tidak Ada Agenda</p>

          @endforelse

        </div>

      </div>
    </section><!-- End Team Section -->

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