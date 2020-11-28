@php
    session_start();
@endphp
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="SITR | Sistem Informasi Tata Ruang Desa" name="description">
    <meta content="SITR | Sistem Informasi Tata Ruang Desa" name="keywords">
    <meta content="Muhamad Ramadhan" name="author">
    <title>SITR | Sistem Informasi Tata Ruang Desa</title>

    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/fonts/fonts.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    @yield('css')
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <div class="logo mr-auto">
                <a href="{{ route('index') }}" class="d-flex">
                    <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid mr-2 mt-2" alt="Logo SITR">
                    <div>
                        <h3 class="font-weight-bold my-0">SITR</h3>
                        <small>Sistem Informasi Tata Ruang Desa</small>
                    </div>
                </a>
            </div>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="{{ setActive(['/']) }}">
                        <a href="{{ route('index') }}">Beranda</a>
                    </li>
                    <li class="{{ setActive(['demografi']) }}">
                        <a href="{{ route('demographic') }}">Demografi</a>
                    </li>
                    <li class="{{ setActive(['peta']) }}">
                        <a href="{{ route('maps') }}">Peta</a>
                    </li>
                    <li class="{{ setActive(['potensidesa']) }}">
                        <a href="{{ route('potential') }}">Potensi Desa</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
  
    @yield('content')
  
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 footer-contact">
                        <div class="row">
                            <div class="col-md">
                                <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="Logo SITR">
                            </div>
                            <div class="col-md-8 mt-2">
                                <h3 class="font-weight-bold">Sistem Informasi Tata Ruang Desa (SITR)</h3>
                                <p>
                                    <strong>Alamat:</strong> Jl.In Aja Dulu<br>
                                    <strong>Telepon:</strong> 727 4 kali<br>
                                    <strong>Fax:</strong> 727 4 kali<br>
                                    <strong>Email:</strong> info@sitr.com<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 footer-links">
                        <div class="mb-4">
                            <h3 class="font-weight-bold">{{ $visitors }}</h3>
                            <span>Total Pengunjung</span>
                        </div>
                        <div>
                            <h3 class="font-weight-bold">{{ $views }}</h3>
                            <span>Total Dilihat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-3">
            <div class="copyright">
                Sistem Informasi Tata Ruang Desa (SITR)
            </div>
            <div class="credits">
                Copyright &copy; <strong><span>Teknik Geomatika ITS</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>
    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    @yield('js')
</body>

</html>