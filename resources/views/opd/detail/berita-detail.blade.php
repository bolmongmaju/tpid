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
          <h2>Berita Detail</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Berita</a></li>
            <li>Berita Detail</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{$posts->image}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ route('berita-detail',$posts->id) }}">{{$posts->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{$posts->user->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="$posts->created_at">{{ \Carbon\Carbon::parse($posts->created_at)->diffForhumans() }}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                    {!! nl2br(($posts->body)) !!}
                </p>
              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">{{$posts->category->name}}</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                    @foreach ($posts->tags as $tag)
                    <li><a href="#">{{$tag->name}}</a></li>
                    @endforeach
                </ul>
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Cari</h3>
              <div class="sidebar-item search-form">
                <form action="{{ ('/berita-cari') }}" method="GET">
                    <input style="border: none;" type="text" name="cari" value="{{ request()->get('cari') }}">
                    <button type="submit"><i class="bi bi-search"></i></button>
                  </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Kategori</h3>
              <div class="sidebar-item categories">
                <ul>
                  @foreach ($kategori as $cat)
                  <li><a href="#">{{ $cat->name }} <span>({{ $cat->news->count() }})</span></a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Berita Terbaru</h3>
              <div class="sidebar-item recent-posts">
                @foreach ($sidebar as $side)
                <div class="post-item clearfix">
                  <img src="{{$side->image}}" alt="">
                  <h4 class="recent-blog-body"><a href="{{ route('berita-detail',$side->id) }}">{{$side->title}}</a></h4>
                  <time datetime="2020-01-01">{{$side->created_at}}</time>
                </div>
                @endforeach
              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  @foreach ($tags as $tag)
                  <li><a href="#">{{$tag->name}}</a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

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