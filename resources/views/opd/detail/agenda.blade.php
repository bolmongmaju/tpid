<!-- ======= Icon Boxes Section ======= -->
<section id="icon-boxes" class="icon-boxes">
  <div class="container">
    <div class="row justify-content-md-center">
      @forelse ($events as $item)
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
        <div class="icon-box">
          <div class="icon"><h2>Agenda</h2></div>
          <hr>
          <h4 class="title"><a href="#">{{ $item->title }}</a></h4>
          <hr>
          <h4 class="description"><i class='bx bxs-time'></i> Waktu</h4>
          <h4 class="description">{{ Str::ucfirst($item->hari) }}: {{ $item->time }} WITA - Selesai</h4>
          <h4 class="description"><i class='bx bxs-calendar'></i> Tanggal</h4>
          <h4 class="description">{{ $item->date }}</h4>
          <h4 class="description"><i class='bx bxs-map'></i> Lokasi</h4>
          <h4 class="description">{{ $item->location }}</h4>
        </div>
      </div>
      @empty
      <p>Tidak Ada Agenda</p>
      @endforelse
    </div>
  </div>
</section><!-- End Icon Boxes Section -->