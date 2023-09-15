<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Favicon -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
     <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/admin/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Styles -->
    <link id="pagestyle" href="{{ asset('assets/admin/css/soft-ui-dashboard.css?v=1.1.1') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/soft-ui-dashboard.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/landing-front/css/theme.bundle.css')}}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/front-app/media/logo profil.png')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/sal.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/green-audio-player.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/vendor/odometer-theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-app/css/app.css') }}">
    
    <!-- Title -->
<title>Daftar Peserta Baru</title>
  </head>
  <body class="g-sidenav-show  bg-gray-100">
   <header class="header axil-header header-style-1">
            <div id="axil-sticky-placeholder"></div>
            <div class="axil-mainmenu">
                <div class="container">
                    <div class="header-navbar">
                        <div class="header-logo">
                            <a href="{{url('/')}}"><img class="light-version-logo" src="{{ asset('assets/front-app/media/logo-tk.png') }}" alt="logo"></a>
                            <a href="{{url('/')}}"><img class="dark-version-logo" src="{{ asset('assets/front-app/media/logo-tk.png') }}" alt="logo"></a>
                            <a href="{{url('/')}}"><img class="sticky-logo" src="{{ asset('assets/front-app/media/logo-tk.png') }}" alt="logo"></a>
                        </div>
                        <div class="header-main-nav">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav" id="mobilemenu-popup">
                                <div class="d-block d-lg-none">
                                    <div class="mobile-nav-header">
                                        <div class="mobile-nav-logo">
                                            <a href="index-1.html">
                                                <img class="light-mode" src="{{ asset('assets/front-app/media/logo-tk.png') }}" alt="Site Logo">
                                                <img class="dark-mode" src="{{ asset('assets/front-app/media/logo-tk.png') }}" alt="Site Logo">
                                            </a>
                                        </div>
                                        <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <ul class="mainmenu">
                                    
                                    <li class="menu-item-has-children">
                                        <a href="{{url('/')}}">Profil</a>
                                        <ul class="axil-submenu">
                                            <li><a href="{{url('/sejarah')}}">Sejarah</a></li>
                                            <li><a href="{{ url('/visi') }}">Visi Misi</a></li>
                                            <li><a href="{{ url('/struktur') }}">Struktur Organisasi</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Akademik</a>
                                        <ul class="axil-submenu">
                                            <li><a href="{{'/kurikulum'}}">Kurikulum</a></li>
                                            <li><a href="{{'/jadwal'}}">Jadwal Akademik</a></li>
                                            <li><a href="{{'/program'}}">Struktur Program</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{'/sarana'}}">Sarana dan Prasarana</a>
                                    </li>

                                    @guest
                                    <a href="{{'/login'}}" class="axil-btn btn-fill-primary btn-large">Masuk</a>
                                    @else
                                    <li>
                                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    </li>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>
                                     @endguest
                                    
                                    
                                </ul>
                            </nav>
                            <!-- End Mainmanu Nav -->
                        </div>
                        <div class="header-action">
                            <ul class="list-unstyled">
                                <li class="my_switcher d-block d-lg-none">
                                    <ul>
                                        <li title="Light Mode">
                                            <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                                <i class="fal fa-lightbulb-on"></i>
                                            </a>
                                        </li>
                                        <li title="Dark Mode">
                                            <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                                <i class="fas fa-moon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
          <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url({{ asset('assets/landing-front/img/tk-img/header-3.png')}}); background-position-y: 60%;">
          </div>
            <div class="container-fluid py-">
                 @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                <div class="row">
                    <div class="col-12">
                    <div class="multisteps-form">
                        <div class="row">
                        <div class="col-12 col-lg-10 mx-auto mt-4 mb-sm-5 mb-8">
                            <div class="multisteps-form__progress">
                            <a href="{{ url('daftar-peserta') }}" class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                                <span>Keterangan Peserta Didik</span>
                            </a>
                            <a href="{{ url('daftar-keluarga') }}" class="multisteps-form__progress-btn js-active" type="button" title="Media"> Keterangan Orangtua/Wali</a>
                            <a href="{{ url('daftar-pendahuluan') }}" class="multisteps-form__progress-btn js-active" type="button" title="Socials"> Pendahuluan</a>
                            <a href="{{ url('daftar-pribadi') }}" class="multisteps-form__progress-btn " type="button" title="Pricing"> Keterangan Pribadi Murid</button>
                            <a href="{{ url('daftar-survei') }}" class="multisteps-form__progress-btn " type="button" title="Pricing">Survei Tata Tertib</a>
                            <a href="{{ url('daftar-lain') }}" class="multisteps-form__progress-btn " type="button" title="Pricing">Lain-lain</a>
                            <a href="{{ url('daftar-pendanaan') }}" class="multisteps-form__progress-btn" type="button" title="Pricing"> Pendanaan</a>
                            </div>
                        </div>
                        </div>
                        <!--form panels-->
                        <div class="row">
                        <div class="col-12 col-lg-10 m-auto">
                        <form class="multisteps-form__form mb-8 js-active" method="POST" action="{{ url('update-pendahuluan/'.$getpendahuluan) }}">
                                @csrf
                                @method('PUT')
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Pendahuluan</h5>
                                    <div class="multisteps-form__content">
                                      <div class="row mt-3">
                                        <div class="col-12 col-sm-6 mt-3">
                                          <label>Apakah latar belakang Bapak/Ibu memasukan putra-putri ke TKIT AL-Qolam </label>
                                          <textarea class="multisteps-form__input form-control" name="latar_belakang" rows="5" cols="5" > {{ $get->pendahuluan->latar_belakang }} </textarea>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                          <label>Apa harapan konkret untuk putra-putri Bapak/Ibu pendidikan TKIT AL-Qolam di bidang Keislaman</label>
                                          <textarea class="multisteps-form__input form-control" name="harapan_keilmuan_agama" rows="5" cols="5" > {{ $get->pendahuluan->harapan_keilmuan_agama }} </textarea>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label for="">Apa harapan konkret untuk putra-putri Bapak/Ibu pendidikan TKIT AL-Qolam bidang Keilmuann</label>
                                          <textarea class="multisteps-form__input form-control" name="harapan_keilmuan" rows="5" cols="5" > {{ $get->pendahuluan->harapan_keilmuan }} </textarea>
                                        </div>
                                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                          <label for="">Apa harapan konkret untuk putra-putri Bapak/Ibu pendidikan TKIT AL-Qolam bidang Sosial Emosional</label>
                                          <textarea class="multisteps-form__input form-control" name="harapan_keilmuan_sosial" rows="5" cols="5" > {{ $get->pendahuluan->harapan_keilmuan_sosial }} </textarea>
                                          </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Melihat usia dan kemampuan putra putri,Berapa tahun Bapak/Ibu menginginkan untuk belajar di TKIT AL-Qolam?</label>
                                          <select class="form-control" name="jangka_waktu_belajar">
                                            <?php $option = ['Satu tahun', 'Dua tahun', 'Tiga tahun'] ?>
                                            @foreach($option as $o)
                                            <option value="{{$o}}" {{ $get->pendahuluan->jangka_waktu_belajar == $o ? 'selected':'' }}>{{ $o }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="button-row d-flex mt-4">
                                        <a href="{{ url('daftar-keluarga') }}" class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">Prev</a>
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">Next</button>
                                      </div>
                                    </div>
                                   </div>
                                  
                                  </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  </body>
   <script>
    const kategoriPesertaSelect = document.getElementById("kategori_peserta");
    const pindahanFields = document.getElementById("pindahan_fields");
    const pindahanDateFields = document.getElementById("pindahan_date_fields");
    const pindahanDateTerimaFields = document.getElementById("pindahan_date_terima_fields");
    

    // Inisialisasi tampilan awal berdasarkan pilihan awal
    if (kategoriPesertaSelect.value === "murid baru") {
        pindahanFields.style.display = "none";
        pindahanDateFields.style.display = "none";
        pindahanDateTerimaFields.style.display = "none";
        enableFields(pindahanFields, false);
        enableFields(pindahanDateFields, false);
        enableFields(pindahanDateTerimaFields, false);
    }

    // Atur event listener untuk mengubah tampilan dan persyaratan berdasarkan pilihan
    kategoriPesertaSelect.addEventListener("change", function () {
        if (this.value === "murid baru") {
            pindahanFields.style.display = "none";
            pindahanDateFields.style.display = "none";
            pindahanDateTerimaFields.style.display = "none";
            enableFields(pindahanFields, false);
            enableFields(pindahanDateFields, false);
            enableFields(pindahanDateTerimaFields, false);
        } else if (this.value === "pindahan") {
            pindahanFields.style.display = "block";
            pindahanDateFields.style.display = "block";
            pindahanDateTerimaFields.style.display = "block";
            enableFields(pindahanFields, true);
            enableFields(pindahanDateFields, true);
            enableFields(pindahanDateTerimaFields, true);
        }
    });

    function enableFields(container, enable) {
        const fields = container.querySelectorAll("input, select");
        fields.forEach(field => {
            field.disabled = !enable;
            if (enable) {
                field.setAttribute("required", "required");
            } else {
                field.removeAttribute("required");
            }
        });
    }
</script>

   <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    
    <!-- Vendor JS -->
    <script src="{{ asset('assets/landing-front/js/vendor.bundle.js')}}"></script>
    
    <!-- Theme JS -->
    <script src="{{ asset('assets/landing-front/js/theme.bundle.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/odometer.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/jquery-appear.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/slick.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/sal.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/js.cookie.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/jquery.style.switcher.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/tilt.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/green-audio-player.min.js')}}"></script>
    <script src="{{ asset('assets/front-app/js/vendor/jquery.nav.js')}}"></script>

    <!-- Site Scripts -->
    <script src="{{ asset('assets/front-app/js/app.js')}}"></script>  
</html>