<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Kontak Kami</h2>
      </div>

      <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

        <div class="col-lg-5">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Alamat:</h4>
              <p>{{ $contact->alamat }}</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>{{ $contact->email }}</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Telepon/Whatsapp:</h4>
              <p>{{ $contact->no_telp }}</p>
            </div>

            <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Jam Kantor:</h4>
                <p>{{ $contact->hari_kerja }}, Pukul {{ $contact->jam_buka }} - {{ $contact->jam_tutup }} WITA</p>
              </div>

          </div>

        </div>

        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
            <div>
            {!! $contact->maps !!}
            </div>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->