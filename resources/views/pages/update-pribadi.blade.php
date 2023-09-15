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
                            <a href="{{ url('daftar-pribadi') }}" class="multisteps-form__progress-btn js-active" type="button" title="Pricing"> Keterangan Pribadi Murid</button>
                            <a href="{{ url('daftar-survei') }}" class="multisteps-form__progress-btn " type="button" title="Pricing">Survei Tata Tertib</a>
                            <a href="{{ url('daftar-lain') }}" class="multisteps-form__progress-btn " type="button" title="Pricing">Lain-lain</a>
                            <a href="{{ url('daftar-pendanaan') }}" class="multisteps-form__progress-btn" type="button" title="Pricing"> Pendanaan</a>
                            </div>
                        </div>
                        </div>
                        <!--form panels-->
                        <div class="row">
                        <div class="col-12 col-lg-10 m-auto">
                            <form class="multisteps-form__form mb-8" method="POST" action="{{ url('update-pribadi/'.$getpribadi) }}">
                  
                                @csrf
                                @method('PUT')

                                   <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Keterangan Tentang Pribadi Murid</h5>
                                    <div class="multisteps-form__content">
                                      <h6>Informasi tentang kemampuan anak sebelum sekolah (untuk mengetahui sejauh mana materi yang akan diajarkan nanti secara klasikal dan individu)</h5>
                                      <div class="row mt-3">
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Kemampuan anak membaca huruf latin:</label>
                                          <select class="form-control" name="kemampuan_membaca_latin" required="required">
                                          <?php $baca = ['Belum bisa','Sedikit-sedikit','Sudah bisa membaca'] ?>
                                            @foreach($baca as $b)
                                            <option value="{{ $b }}" {{ $get->pribadi->kemampuan_membaca_latin == $b ? 'selected':'' }}>{{$b}}</option>
                                           @endforeach
                                          </select>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label for="">Judul buku yang dipakai untuk mengajarkan anak membaca latin</label>
                                          <textarea class="multisteps-form__input form-control" name="judul_buku_latin" rows="4" cols="2" required="required" > {{ $get->pribadi->judul_buku_latin }} </textarea>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Kemampuan anak membaca huruf hijaiyah:</label>
                                          <select class="form-control" name="kemampuan_membaca_hijaiyah" required="required">
                                            <?php $baca = ['Belum bisa','Sedikit-sedikit','Sudah bisa membaca'] ?>
                                            @foreach($baca as $b)
                                            <option value="{{ $b }}" {{ $get->pribadi->kemampuan_membaca_hijaiyah == $b ? 'selected':'' }}>{{$b}}</option>
                                           @endforeach
                                          </select>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Kemampuan anak menulis:</label>
                                          <select class="form-control" name="kemampuan_menulis" required="required">
                                            <?php $baca = ['Belum bisa','Sedikit-sedikit','Sudah mampu'] ?>
                                            @foreach($baca as $b)
                                            <option value="{{ $b }}" {{ $get->pribadi->kemampuan_menulis == $b ? 'selected':'' }}>{{$b}}</option>
                                           @endforeach
                                          </select>
                                        </div>                      
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Anak sudah mampu menggambar:</label>
                                          <select class="form-control" name="kemampuan_menggambar" required="required">
                                            <?php $baca = ['Belum bisa','Sedikit-sedikit','Sudah mampu'] ?>
                                            @foreach($baca as $b)
                                            <option value="{{ $b }}" {{ $get->pribadi->kemampuan_menggambar == $b ? 'selected':'' }}>{{$b}}</option>
                                           @endforeach
                                          </select>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Anak sudah mengenal angka:</label>
                                          <select class="form-control" name="kemampuan_angka" required="required">
                                            <?php $baca = ['Belum bisa','Sedikit-sedikit','Sudah mampu'] ?>
                                            @foreach($baca as $b)
                                            <option value="{{ $b }}" {{ $get->pribadi->kemampuan_angka == $b ? 'selected':'' }}>{{$b}}</option>
                                           @endforeach
                                          </select>
                                        </div>
                                     </div>  
                                     <div class="row mt-3">
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Kemampuan berhitung sederhana:</label>
                                          <select class="form-control" name="kemampuan_berhitung" required="required">
                                            <?php $baca = ['Belum bisa','Sedikit-sedikit','Sudah mampu'] ?>
                                            @foreach($baca as $b)
                                            <option value="{{ $b }}" {{ $get->pribadi->kemampuan_berhitung == $b ? 'selected':'' }}>{{$b}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Anak sudah mengenal tata cara wudhu:</label>
                                          <select class="form-control" name="tata_cara_berwudhu" required="required">
                                            <?php $baca = ['Belum bisa','Sedikit-sedikit','Sudah mampu'] ?>
                                            @foreach($baca as $b)
                                            <option value="{{ $b }}" {{ $get->pribadi->tata_cara_berwudhu == $b ? 'selected':'' }}>{{$b}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                       <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Anak sudah hafal doa-doa harian:</label>
                                          <select class="form-control" name="hafalan_doa" required="required">
                                            <?php $baca = ['Belum','Sedikit','Banyak'] ?>
                                            @foreach($baca as $b)
                                            <option value="{{ $b }}" {{ $get->pribadi->hafalan_doa == $b ? 'selected':'' }}>{{$b}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Anak sudah mengenal tata cara solat:</label>
                                          <select class="form-control" name="tata_cara_solat" required="required">
                                            <?php $baca = ['Belum','Sedikit','Banyak'] ?>
                                            @foreach($baca as $b)
                                            <option value="{{ $b }}" {{ $get->pribadi->tata_cara_solat == $b ? 'selected':'' }}>{{$b}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                          <label>Anak sudah hafal sedikit-sedikit juz'amma yaitu surat </label>
                                          <textarea class="multisteps-form__input form-control" name="hafalan_juzamma" rows="5" cols="5" placeholder="sebutkan nama suratnya" required="required"> {{ $get->pribadi->hafalan_juzamma }} </textarea>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Sebutkan doa harian yang sudah dihafal</label>
                                            <textarea class="multisteps-form__input form-control" name="doa_harian_hafal" rows="5" cols="5" placeholder="sebutkan nama suratnya" required="required"> {{ $get->pribadi->doa_harian_hafal }} </textarea>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Kesukaan atau hobi anak pada bidang atau kegiatan tertentu</label>
                                            <textarea class="multisteps-form__input form-control" name="hobi" rows="5" cols="5" placeholder="sebutkan nama suratnya" required="required"> {{ $get->pribadi->hobi }} </textarea>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Dirumah anak mendengarkan murrotal Al-Qur'an atau Juz Amma:</label>
                                          <select class="form-control" name="hafal_murotal" required="required">
                                            <?php $baca = ['Tidak','Kadang-kadang','Sering'] ?>
                                            @foreach($baca as $b)
                                            <option value="{{ $b }}" {{ $get->pribadi->hafal_murotal == $b ? 'selected':'' }}>{{$b}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Dirumah dibacakan atau berlangganan majalah anak-anak:</label>
                                          <select class="form-control" name="berlangganan_majalah" required="required">
                                            <?php $baca = ['Ya','Tidak'] ?>
                                            @foreach($baca as $b)
                                            <option value="{{ $b }}" {{ $get->pribadi->berlangganan_majalah == $b ? 'selected':'' }}>{{$b}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <h6 row-6>Informasi tentang keadaan anak dalam keluarga pada saat anak pertama masuk sekolah:</h6>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Rumah atau tempat tinggal</label>
                                          <select class="form-control" name="tinggal_bersama" required="required">
                                            <?php $kategori = ['Keluarga sendiri','Bersama keluarga lain'] ?>
                                            @foreach($kategori as $kat)
                                            <option value="{{$kat}}" {{ $get->pribadi->informasi->tinggal_bersama == $kat ? 'selected':'' }}>{{$kat}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <label class="mt-2">Jumlah penghuni dewasa di rumah</label>
                                            <input class="multisteps-form__input form-control" value="{{$get->pribadi->informasi->jumlah_penghuni_dewasa}}" name="jumlah_penghuni_dewasa" type="number" placeholder="eg. Off-White"  required="required"/>
                                        </div>
                                      </div> 
                                      <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label class="mt-2">Jumlah penghuni anak-anak di rumah</label>
                                            <input class="multisteps-form__input form-control" value="{{$get->pribadi->informasi->jumlah_penghuni_anak}}" name="jumlah_penghuni_anak" type="number" placeholder="eg. Off-White"  required="required"/>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Halaman tempat bermain disekitar rumah</label>
                                          <select class="form-control" name="halaman_bermain" required="required">
                                            <?php $kategori = ['Ada','Tidak'] ?>
                                            @foreach($kategori as $kat)
                                            <option value="{{$kat}}" {{ $get->pribadi->halaman_bermain == $kat ? 'selected':'' }}>{{$kat}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div> 
                                      <div class="row mt-3">
                                       <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Kesempatan bergaul dengan teman sebaya</label>
                                          <select class="form-control" name="kesempatan_bergaul" required="required">
                                            <option selected="selected">Pilih salah satu</option>
                                            <?php $kategori = ['Banyak','Cukup','Sama sekali tidak ada'] ?>
                                            @foreach($kategori as $kat)
                                            <option value="{{$kat}}" {{ $get->pribadi->informasi->kesempatan_bergaul == $kat ? 'selected':'' }}>{{$kat}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                          <label>Selera makan pada umumnya</label>
                                          <input class="multisteps-form__input form-control" value="{{$get->pribadi->informasi->selera_makan}}" name="selera_makan" type="text" placeholder="eg. Off-White"  required="required"/>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Hubungan anak sama ayah pada umumnya</label>
                                          <select class="form-control" name="hubungan_ayah" required="required">
                                            <?php $kategori = ['Baik','Cukup','Kurang'] ?>
                                            @foreach($kategori as $kat)
                                            <option value="{{$kat}}" {{ $get->pribadi->informasi->hubungan_ayah == $kat ? 'selected':'' }}>{{$kat}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Hubungan anak dengan Ibu pada umumnya</label>
                                          <select class="form-control" name="hubungan_ibu" required="required">
                                            <?php $kategori = ['Baik','Cukup','Kurang'] ?>
                                            @foreach($kategori as $kat)
                                            <option value="{{$kat}}" {{ $get->pribadi->informasi->hubungan_ibu == $kat ? 'selected':'' }}>{{$kat}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Pada waktu buang air besar dan buang air kecil pada umumnya masih harus ditolong</label>
                                          <select class="form-control" name="kemampuan_buang_air" required="required">
                                            <?php $kategori = ['Ya','Tidak','Kadang-kadang'] ?>
                                            @foreach($kategori as $kat)
                                            <option value="{{$kat}}" {{ $get->pribadi->informasi->kemampuan_buang_air == $kat ? 'selected':'' }}>{{$kat}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Hubungan anak dengan saudara pada umumnya</label>
                                          <select class="form-control" name="hubungan_saudara" required="required">
                                            <?php $kategori = ['Baik','Cukup','Kurang'] ?>
                                            @foreach($kategori as $kat)
                                            <option value="{{$kat}}" {{ $get->pribadi->informasi->hubungan_saudara == $kat ? 'selected':'' }}>{{$kat}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                          <label>Kebiasaan tidur malam pada umumnya pukul</label>
                                          <input class="multisteps-form__input form-control" value="{{$get->pribadi->informasi->kebiasan_tidur_malam}}" name="kebiasan_tidur_malam" type="text" placeholder="eg. Off-White"  required="required"/>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                      <div class="col-12 col-sm-6">
                                          <label>Kebiasaan bangun pagi pada umumnya pukul</label>
                                          <input class="multisteps-form__input form-control" value="{{$get->pribadi->informasi->kebiasan_bangun_pagi}}" name="kebiasan_bangun_pagi" type="text" placeholder="eg. Off-White"  required="required"/>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                          <label>Kebiasaan tidur siang pada umumnya pukul</label>
                                          <input class="multisteps-form__input form-control" value="{{$get->pribadi->informasi->kebiasan_tidur_siang}}" name="kebiasan_tidur_siang" type="text" placeholder="eg. Off-White"  required="required"/>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Masih kencing/ngompol pada waktu tidur</label>
                                          <select class="form-control" name="kebiasaan_ngompol" required="required">
                                            <?php $kategori = ['Sering','Jarang','Tidak'] ?>
                                            @foreach($kategori as $kat)
                                            <option value="{{$kat}}" {{ $get->pribadi->informasi->kebiasaan_ngompol == $kat ? 'selected':'' }}>{{$kat}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                          <label>Hal-hal yang perlu dicatat atau dikemukakan pada waktu tidur anak</label>
                                          <input class="multisteps-form__input form-control" value="{{$get->pribadi->informasi->hal_penting_waktu_tidur}}" name="hal_penting_waktu_tidur" type="text" placeholder="eg. Off-White"  required="required"/>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Kepatuhan anak dengan orang tua di rumah</label>
                                          <select class="form-control" name="kepatuhan_anak" required="required">
                                            <?php $kategori = ['Baik','Cukup','Kurang'] ?>
                                            @foreach($kategori as $kat)
                                            <option value="{{$kat}}" {{ $get->pribadi->informasi->kepatuhan_anak == $kat ? 'selected':'' }}>{{$kat}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                          <label>Hal-hal mengenai tingkah laku anak di rumah yang perlu dikemukakan</label>
                                          <input class="multisteps-form__input form-control" value="{{$get->pribadi->informasi->hal_penting_tingkahlaku_anak}}" name="hal_penting_tingkahlaku_anak" type="text" placeholder="eg. Off-White"  required="required"/>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Anak mudah bergaul dengan orang yang baru dikenal</label>
                                          <select class="form-control" name="mudah_bergaul">
                                            <?php $kategori = ['Ya','Tidak','Kadang-kadang'] ?>
                                            @foreach($kategori as $kat)
                                            <option value="{{$kat}}" {{ $get->pribadi->informasi->mudah_bergaul == $kat ? 'selected':'' }}>{{$kat}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                          <label>Sifat baik anak</label>
                                          <input class="multisteps-form__input form-control" value="{{$get->pribadi->informasi->sifat_baik}}" name="sifat_baik" type="text" placeholder="eg. Off-White"  required="required"/>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                          <label>Sifat buruk anak</label>
                                          <input class="multisteps-form__input form-control" value="{{$get->pribadi->informasi->sifat_buruk}}" name="sifat_buruk" type="text" placeholder="eg. Off-White"  required="required"/>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-2">Pembantu rumah tangga</label>
                                          <select class="form-control" name="pembantu_rumah_tangga" required="required">
                                            <?php $kategori = ['Ada','Tidak'] ?>
                                            @foreach($kategori as $kat)
                                            <option value="{{$kat}}" {{ $get->pribadi->informasi->pembantu_rumah_tangga == $kat ? 'selected':'' }}>{{$kat}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                          <label class="mt-4 form-label">Peralatan elektronik yang dimiliki di rumah</label>
                                          <select class="form-control" name="peralatan_elektronik" required="required">
                                            <?php $kategori = ['TV','Radio','Komputer','Handphone'] ?>
                                            @foreach($kategori as $kat)
                                            <option value="{{$kat}}" {{ $get->pribadi->informasi->peralatan_elektronik == $kat ? 'selected':'' }}>{{$kat}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="button-row d-flex mt-4">
                                        <a href="{{ url('daftar-pendahuluan') }}" class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">Prev</a>
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">Next</button>
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
  <script src="{{ asset('assets/admin/js/core/popper.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/core/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/soft-ui-dashboard.min.js?v=1.1.1')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/choices.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/dropzone.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/quill.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/multistep-form.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/datatables.js')}}"></script>
    <script src="{{ asset('assets/admin/js/plugins/sweetalert.min.js')}}"></script>
    <script>
      const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
        searchable: true,
        fixedHeight: true
      });

      const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true
      });
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <script>
      var ctx = document.getElementById("chart-bars").getContext("2d");

      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "#fff",
            data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
            maxBarThickness: 6
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 15,
                font: {
                  size: 14,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#fff"
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false
              },
              ticks: {
                display: false
              },
            },
          },
        },
      });


      var ctx2 = document.getElementById("chart-line").getContext("2d");

      var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

      var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
      gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
              label: "Mobile apps",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#cb0c9f",
              borderWidth: 3,
              backgroundColor: gradientStroke1,
              fill: true,
              data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
              maxBarThickness: 6

            },
            {
              label: "Websites",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#3A416F",
              borderWidth: 3,
              backgroundColor: gradientStroke2,
              fill: true,
              data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
              maxBarThickness: 6
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });


      (function() {
        const container = document.getElementById("globe");
        const canvas = container.getElementsByTagName("canvas")[0];

        const globeRadius = 100;
        const globeWidth = 4098 / 2;
        const globeHeight = 1968 / 2;

        function convertFlatCoordsToSphereCoords(x, y) {
          let latitude = ((x - globeWidth) / globeWidth) * -180;
          let longitude = ((y - globeHeight) / globeHeight) * -90;
          latitude = (latitude * Math.PI) / 180;
          longitude = (longitude * Math.PI) / 180;
          const radius = Math.cos(longitude) * globeRadius;

          return {
            x: Math.cos(latitude) * radius,
            y: Math.sin(longitude) * globeRadius,
            z: Math.sin(latitude) * radius
          };
        }

        function makeMagic(points) {
          const {
            width,
            height
          } = container.getBoundingClientRect();

          // 1. Setup scene
          const scene = new THREE.Scene();
          // 2. Setup camera
          const camera = new THREE.PerspectiveCamera(45, width / height);
          // 3. Setup renderer
          const renderer = new THREE.WebGLRenderer({
            canvas,
            antialias: true
          });
          renderer.setSize(width, height);
          // 4. Add points to canvas
          // - Single geometry to contain all points.
          const mergedGeometry = new THREE.Geometry();
          // - Material that the dots will be made of.
          const pointGeometry = new THREE.SphereGeometry(0.5, 1, 1);
          const pointMaterial = new THREE.MeshBasicMaterial({
            color: "#989db5",
          });

          for (let point of points) {
            const {
              x,
              y,
              z
            } = convertFlatCoordsToSphereCoords(
              point.x,
              point.y,
              width,
              height
            );

            if (x && y && z) {
              pointGeometry.translate(x, y, z);
              mergedGeometry.merge(pointGeometry);
              pointGeometry.translate(-x, -y, -z);
            }
          }

          const globeShape = new THREE.Mesh(mergedGeometry, pointMaterial);
          scene.add(globeShape);

          container.classList.add("peekaboo");

          // Setup orbital controls
          camera.orbitControls = new THREE.OrbitControls(camera, canvas);
          camera.orbitControls.enableKeys = false;
          camera.orbitControls.enablePan = false;
          camera.orbitControls.enableZoom = false;
          camera.orbitControls.enableDamping = false;
          camera.orbitControls.enableRotate = true;
          camera.orbitControls.autoRotate = true;
          camera.position.z = -265;

          function animate() {
            // orbitControls.autoRotate is enabled so orbitControls.update
            // must be called inside animation loop.
            camera.orbitControls.update();
            requestAnimationFrame(animate);
            renderer.render(scene, camera);
          }
          animate();
        }

        function hasWebGL() {
          const gl =
            canvas.getContext("webgl") || canvas.getContext("experimental-webgl");
          if (gl && gl instanceof WebGLRenderingContext) {
            return true;
          } else {
            return false;
          }
        }

        function init() {
          if (hasWebGL()) {
            window
            window.fetch("https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard-pro/assets/js/points.json")
              .then(response => response.json())
              .then(data => {
                makeMagic(data.points);
              });
          }
        }
        init();
      })();
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>  
    <script>
      if (document.getElementById('edit-deschiption')) {
        var quill = new Quill('#edit-deschiption', {
          theme: 'snow' // Specify theme in configuration
        });
      };

      if (document.getElementById('choices-category')) {
        var element = document.getElementById('choices-category');
        const example = new Choices(element, {
          searchEnabled: false
        });
      };

      if (document.getElementById('choices-sizes')) {
        var element = document.getElementById('choices-sizes');
        const example = new Choices(element, {
          searchEnabled: false
        });
      };

      if (document.getElementById('choices-currency')) {
        var element = document.getElementById('choices-currency');
        const example = new Choices(element, {
          searchEnabled: false
        });
      };

      if (document.getElementById('choices-tags')) {
        var tags = document.getElementById('choices-tags');
        const examples = new Choices(tags, {
          removeItemButton: true
        });

        
      }
  </script>
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
