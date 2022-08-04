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

        <!-- ======= About Us Section ======= -->
        {{-- <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Daftar Pegawai</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-12">
                        @forelse($pegawai as $item)
                        <p>
                            {!! nl2br(($item->pegawai)) !!}
                        </p>
                        @empty
                        Belum ada data
                        @endforelse
                    </div>
                </div>

            </div>
        </section> --}}

        <div class="container">

            @forelse($pegawai as $item)
            <div class="row">
                <div class="col-sm">

                    <div class="card-pegawai p-3">
                        <div class="d-flex align-items-center">
                            <div class="image">
                                <img src="{{ Storage::url('public/files/'. $item->foto) }}"
                                    class="rounded" style="margin-right: 10px; width: 100px; height: 100px;">
                            </div>
        
                            <div class="ml-3 w-100">
                                <h4 class="mb-0 mt-0">{{$item->nama}}</h4>
                                <span>{{$item->jabatan}}</span>
                                <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                                    <div class="d-flex flex-column">
                                        <span class="articles">NIP</span>
                                        <span class="number1">{{$item->nip}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            @empty
            Belum ada data pegawai
            @endforelse

        </div>


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
