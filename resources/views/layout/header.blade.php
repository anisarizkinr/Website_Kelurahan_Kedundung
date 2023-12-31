<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

<nav class="site-nav navbar-expand-lg">
  <div class="container">
      <div class="menu-bg-wrap">
          <div class="site-navigation">
              <div class="d-flex flex-wrap align-items-center justify-content-between">
                  <div class="logo-container">
                      <img src="{{asset('images/logo kota mojokerto.png')}}" alt="Image" class="img-fluid w-5 mb-4 float-start" />
                      <a href="{{url('/beranda')}}" class="logo m-0 float-start">Kelurahan <br> 
                        @if ($judul) {{ $judul->judul_web }}
                      @endif </a>
                  </div>
                  
                  <a href="#" class="burger light site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                      <span></span>
                  </a>
                  
                  <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu">
                      <li><a href="{{url('/beranda')}}" style="font-size: 18px;">Home</a></li>
                      <li class="has-children">
                          <a href="#" style="font-size: 18px;">Profil</a>
                          <ul class="dropdown">
                              <li><a href="{{url('/profil/sejarah')}}">Sejarah</a></li>
                              <li><a href="{{url('/profil/visi')}}">Visi Misi</a></li>
                              <li><a href="{{url('/profil/geografis')}}">Geografis & Kependudukan</a></li>
                              <li><a href="{{url('/profil/struktur')}}">Struktur Pemerintahan</a></li>
                          </ul>
                      </li>
                      <li class="has-children">
                          <a href="#" style="font-size: 18px;">Informasi</a>
                          <ul class="dropdown">
                              <li><a href="{{url('/informasi/berita')}}">Berita</a></li>
                              <li><a href="{{url('/informasi/galeri')}}">Galeri</a></li>
                          </ul>
                      </li>
                      <li><a href="{{url('/layanan_user')}}" style="font-size: 18px;">Layanan</a></li>
                      <li><a href="{{url('/data_user')}}" style="font-size: 18px;">Data</a></li>
                      <li><a href="https://ppid.mojokertokota.go.id/" style="font-size: 18px;">PPID</a></li>
                      <li><a href="https://curhatningita.lapor.go.id/" style="font-size: 18px;">Curhat Ning Ita</a></li>
                      <li><a href="{{url('/login')}}" class="btn btn-secondary rounded-pill py-2 px-3">Login</a></li>
                  </ul>
                  
              </div>
          </div>
      </div>
  </div>
</nav>