@extends('layout.master')
@section('content')

<body>
  <div class="hero">
    <div class="hero-slide">
      @foreach ($latar as $ltr )
      @if ($ltr -> gambar_latar)
      <img src="{{asset('storage/'.$ltr -> gambar_latar)}}" class="img overlay" style="opacity: 0.5;">
      @else
      <img src="{{('assets/images/gambar_latar/'.$ltr -> id.'.png')}}" class="img overlay" style="opacity: 0.5;">
      @endif
      @endforeach
    </div>

    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9 text-center">
          <h1 class="heading" data-aos="fade-up" style="text-align: left;">
            Selamat Datang di Kelurahan  @if ($judul) {{ $judul->judul_web }}@endif!
          </h1>
          <h2 class='heading' data-aos="fade-up" style="text-align: left; font-weight: normal;font-size: 18px;">
            Selamat datang di website resmi Kelurahan  @if ($judul) {{ $judul->judul_web }}@endif. Kami dengan bangga mempersembahkan berbagai informasi tentang kelurahan kami, termasuk Sejarah, Layanan Publik dan Informasi lainnya
          </h2>
          <a href="{{url('/profil/sejarah')}}" class="btn btn-warning rounded-pill py-3 px-5 animated slideInLeft" style="background-color: #FF8811; color:white">Explore Lebih Jauh</a>
        </div>
      </div>
    </div>
  </div>

  
  <div class="section">
    <div class="container">
        <div class="row section-counter mt-5">
            @foreach ($geografis as $jml)
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">{{ $jml->jumlah_penduduk }}</span></span>
                    <span class="caption text-black-50"> {{ $jml->keterangan }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

  <div class="section" style="background-color: #edf2fb;">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6">
          <h2 class="font-weight-bold text-primary heading">
            Berita
          </h2>
        </div>
        <div class="col-lg-6 text-lg-end">
          <p>
            <a href="{{url('/informasi/berita')}}" target="_blank" class="btn btn-primary text-white py-3 px-4">Lihat semua kegiatan</a>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="property-slider-wrap">
            <div class="property-slider">
              @foreach($data as $brt)
              <div class="col-lg-4 col-md-6 mb-4"> <!-- Wrap each card in a 3-column layout -->
                <div class="property-item">
                  <div class="property-content" style="height: 700px;">
                    <div class="image-container">
                      @if ($brt->gambar_berita)
                      <img src="{{ asset('storage/' . $brt->gambar_berita) }}" class="img-fluid custom-image" alt="{{ $brt->gambar_berita }}">
                      @else
                      <img src="{{ asset('assets/images/gambar_berita/' . $brt->id . '.jpg') }}" class="img-fluid custom-image" alt="{{ $brt->id }}">
                      @endif
                      <div>
                        <span class="d-block mb-2 text-black-50">{{ \Carbon\Carbon::parse($brt->tanggal_berita)->format('d F Y') }}</span>
                        <span class="city d-block mb-3">{{ $brt->judul_berita }}</span>
                        <p>{{ $brt->isi_berita }}</p>
                        <a href="{{ $brt->link }}" class="btn btn-primary py-2 px-3">Lihat lebih lanjut</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
              <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
              <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section sec-testimonials">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-md-6">
          <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
            Kepengurusan
          </h2>
        </div>
        <div class="col-md-6 text-md-end">
          <div id="testimonial-nav">
            <span class="prev" data-controls="prev">Prev</span>

            <span class="next" data-controls="next">Next</span>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-4"></div>
      </div>
      <div class="testimonial-slider-wrap">
        <div class="testimonial-slider">
          @foreach($struktur as $str)
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">          
            <div class="box-feature">
              <br>
              <h3 class="mb-3">{{ $str->nama_pengurus }}</h3>
              @if ($str->gambar_pengurus)
              <img src="{{ asset('storage/' . $str->gambar_pengurus) }}" class="img-fluid rounded-circle w-5 mb-4" alt="{{ $str->gambar_pengurus }}">
              @else
              <img src="{{ asset('assets/images/gambar_pengurus/' . $str->id . '.jpeg') }}" class="img-fluid rounded-circle w-5 mb-4" alt="{{ $str->id }}">
              @endif
              <p class="mb-3">{{ $str->jabatan }}</p>
            </div>
          </div>
          @endforeach
          </div>
        </div>
        
      </div>
    </div>
  </div>
     



  <div class="section section-4 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            Pengaduan
          </h2>
          <p class="text-black-50">
            "Kami Di Sini Untuk Membantu - Laporkan Masalah Anda Melalui Pengaduan."
          </p>
        </div>
      </div>
      <div class="row justify-content-between mb-5">
        <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
          <div class="img-about dots">
            <img src="images/pengaduan.jpg" alt="Image" class="img-fluid" />
          </div>

        </div>
        <div class="col-lg-4">
          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <a href="https://curhatningita.lapor.go.id/">
                <span class="icon-people"></span>
              </a>
            </span>
            <div class="feature-text">
              <h3 class="heading">Lapor Ning Ita</h3>
              <p class="text-black-50">
                Adukan Laporan Anda melalui Ning Ita
              </p>
            </div>
          </div>

          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <a href="tel://@if ($kontak) {{ $kontak->telepon }} @endif">
                <span class="icon-phone"></span>
              </a>
            </span>
            <div class="feature-text">
              <h3 class="heading">@if ($kontak)
                {{ $kontak->telepon }}</h3>
                @endif
              <p class="text-black-50">
                Adukan Laporan Anda melalui pesan nomor berikut
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Preloader -->
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>


</body>
@endsection