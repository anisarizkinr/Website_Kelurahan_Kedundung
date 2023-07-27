<nav class="site-nav">
    <div class="container">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <img
                  src="{{asset('images/logo kota mojokerto.png')}}"
                  alt="Image"
                  class="img-fluid w-5 mb-4 float-start"
                />
                {{-- style="background-image: url({{asset('images/gambar_1.png')}}); opacity: 0.5;" --}}
          <a href="index.html" class="logo m-0 float-start">Kelurahan <br> Kedundung </a>
          <ul
            class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
          >
          <br>
            <li class="active"><a href="{{url('/beranda')}}" style="font-size: 18px;">Home</a></li>
            <li class="has-children">
              <a href="" style="font-size: 18px;">Profil</a>
              <ul class="dropdown">
                <li><a href="{{url('/profil/visi')}}">Visi & Misi</a></li>
                <li><a href="{{url('/profil/geografis')}}">Geografis & Kependudukan</a></li>
                <li><a href="{{url('/profil/struktur')}}">Struktur Pemerintahan</a></li>
                <li><a href="{{url('/profil/potensiwilayah')}}">Potensi Wilayah</a></li>
              </ul>
            </li>
            <li class="has-children">
              <a href="" style="font-size: 18px;">Informasi</a>
              <ul class="dropdown">
                <li><a href="{{url('/informasi/berita')}}">Berita</a></li>
                <li><a href="{{url('/informasi/galeri')}}">Galeri</a></li>
              </ul>
            </li>
            <li class="has-children">
              <a style="font-size: 18px;">Layanan</a>
              <ul class="dropdown">

                <li><a href="{{url('/layanan/p_ahliwaris')}}">Persyaratan Surat Pernyataan Ahli Waris</a></li>
                <li><a href="{{url('/layanan/p_nikah')}}">Persyaratan Nikah</a></li>
                <li><a href="{{url('/layanan/p_keterangan_usaha')}}">Persyaratan Surat Keterangan Usaha</a></li>
                <li><a href="{{url('/layanan/p_skck')}}">Persyaratan SKCK</a></li>
                <li><a href="{{url('/layanan/p_keterangan_tidakmampu')}}">Persyaratan Surat Keterangan Tidak Mampu</a></li>
                <li><a href="{{url('/layanan/p_keterangan_bedaidentitas')}}">Persyaratan Surat Keterangan Beda Identitas</a></li>
                <li><a href="{{url('/layanan/p_keterangan_domisili')}}">Persyaratan Surat Keterangan Domisili</a></li>
              </ul>
            </li>
            <li><a href="{{url('/data')}}" style="font-size: 18px;">Data</a></li>
            <li><a href="https://curhatningita.lapor.go.id/" style="font-size: 18px;">Curhat Ning Ita</a></li>
            
          
  

          </ul>


          <a
            href="#"
            class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
            data-toggle="collapse"
            data-target="#main-navbar"
          >
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </nav>