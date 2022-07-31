<div class="container d-flex align-items-center justify-content-between">

  {{-- <h1 class="logo"><a href="index.html">OPD</a></h1> --}}
  <!-- Uncomment below if you prefer to use an image logo -->
  <a href="index.html" class="logo"><img src="{{ asset('assets-opd/img/logo.png') }}" alt="" class="img-fluid"></a>

  <nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link scrollto " href="{{ ('/') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
      <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a class="{{ (request()->is('struktur')) ? 'active' : '' }}" href="{{ ('/struktur') }}">Struktur Organisasi</a></li>
          <li><a class="{{ (request()->is('visi-misi')) ? 'active' : '' }}" href="{{ ('/visi-misi') }}">Visi dan Misi</a></li>
          <li><a href="#">Tupoksi</a></li>
          <li><a class="{{ (request()->is('program-dan-kegiatan,')) ? 'active' : '' }}" href="{{ ('program-dan-kegiatan') }}">Program dan Kegiatan</a></li>
          <li><a href="#">Daftar Pegawai</a></li>
        </ul>
      </li>
      <li><a href="{{ ('/berita') }}" class="{{ (request()->is('/berita')) ? 'active' : '' }}">Berita</a></li>
      <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="#">Gambar</a></li>
          <li><a href="#">Video</a></li>
        </ul>
      </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->

</div>