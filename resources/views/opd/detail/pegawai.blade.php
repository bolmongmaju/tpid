<!DOCTYPE html>
<html lang="en">

<head>
    @include('opd.layout.head')
</head>

<body>

    <!-- ======= Top Bar ======= -->
    {{-- <div id="topbar" class="fixed-top d-flex align-items-center topbar-inner-pages">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
            </div>
            <div class="cta d-none d-md-block">
                <a href="#about" class="scrollto">Get Started</a>
            </div>
        </div>
    </div> --}}

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        @include('opd.layout.header')
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Home</a></li>
                </ol>
                <h2>Daftar Pegawai</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="card-pegawai" class="card-pegawai" style="margin-bottom: 2%">

            <div class="container">
                <div class="row justify-content-center">
                    @forelse($pegawai as $item)
                    <div class="col-md-3">
                        <div>
                            <div class="one" style="padding: 2%;">
                                <div class="text-right pr-2 pt-1"><i class="mdi mdi-dots-vertical dotdot"></i></div>
                                <div class="d-flex justify-content-center"><img style="width: 100px; height: 100px; margin:2%;" src="{{ Storage::url('public/files/'. $item->foto) }}" class="rounded-circle"></div>
                                <div class="text-center">
                                    <span class="name">{{$item->nama}}</span>
                                    <p class="mail">{{$item->jabatan}}</p>
                                </div>
                                <div class="text-center">
                                    <span class="name">NIP</span>
                                    <p class="mail">{{$item->nip}}</p>
                                </div>
            
                            </div>
                            </div>
                    </div>
                    @empty
                    Belum ada data pegawai
                    @endforelse
                  </div>
    
            </div>

        </section>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('opd.layout.footer')
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('opd.layout.script')

</body>

</html>
