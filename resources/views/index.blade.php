@extends('layouts.master')

@section('content')
<section id="home" class="home">
    <div data-aos="zoom-in">
        <div class="overlay">
            <h1 class="mb-3 text-justify">Selamat Datang</h1>
            <p class="text-justify">Selamat datang di website resmi Sistem Informasi Tata Ruang Desa Dalegan, Kecamatan Panceng, Kabupaten Gresik, Provinsi Jawa Timur. Website ini merupakan portal digital yang menyediakan berbagai informasi tentang Desa Dalegan baik informasi keruangan maupun informasi secara umum.</p>
        </div>
        <div class="owl-carousel home-carousel">
            <div class="home-item">
                <img src="{{ asset('assets/img/scenery-1.jpg') }}" class="home-img" alt="" />
            </div>
            <div class="home-item">
                <img src="{{ asset('assets/img/scenery-2.jpg') }}" class="home-img" alt="" />
            </div>
            <div class="home-item">
                <img src="{{ asset('assets/img/scenery-3.jpg') }}" class="home-img" alt="" />
            </div>
            <div class="home-item">
                <img src="{{ asset('assets/img/scenery-4.jpg') }}" class="home-img" alt="" />
            </div>
        </div>
    </div>
</section>

<main id="main">
    <section id="featured-services" class="featured-services mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1 class="font-weight-bold">Sajian Data</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bxs-info-square"></i></div>
                    <h4 class="title"><a href="{{ route('index') }}">Sejarah Desa</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="">Peta Data</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bx bx-line-chart"></i></div>
                    <h4 class="title"><a href="{{ route('demographic') }}">Demografi</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bx bx-network-chart"></i></div>
                    <h4 class="title"><a href="{{ route('potential') }}">Potensi Desa</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="profile" class="profile mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1 class="font-weight-bold">Profil</h1>
            </div>
            <div>
                <p class="text-justify">
                    Desa Dalegan merupakan salah satu desa yang terletak di Kecamatan Panceng, Kabupaten Gresik. Secara astronomis Desa Dalegan terletak pada koordinat 6°53ʹ25,33ʺ - 6°55ʹ49,44ʺ LS dan 112°27ʹ19,69ʺ - 112°28ʹ56,09ʺ BT. Desa Dalegan berbatasan langsung dengan Laut Jawa di sebelah utara, Desa Campurejo dan Desa Cagaan di sebelah timur, Desa Prupuh di sebelah selatan, serta Desa Campurejo di sebelah barat. Luas desa mencapai 777.281 hektar dengan mayoritas lahan adalah tanah kosong dan sawah. Terdiri dari 6 Lingkungan/RW, 4 Dusun, dan 41 RT.
                </p>
            </div>
        </div>
    </section>
    <section id="news" class="news mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1 class="font-weight-bold">Pengumuman</h1>
            </div>
            <div class="owl-carousel news-carousel">
                <div class="news-item">
                    <div class="card mb-2">
                        <img class="img-fluid news-thumbnail" src="{{asset('assets/img/scenery-1.jpg')}}" alt="News List">
                        <div class="card-body">
                            <h4 class="card-title">Dalegan Gresik, Desa Wisata Kelola Mandiri Yang Bertahan di Tengah Pandemi Covid-19</h4>
                            <p class="card-text ellipsis">
                                <small>
                                    Desa Dalegan, desa ini terletak di Kecamatan Panceng, Kabupaten Gresik, Provinsi Jawa Timur.
                                </small>
                            </p>
                            <a href="{{ route('news', 1) }}" class="btn btn-primary text-white">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <div class="card mb-2">
                        <img class="img-fluid news-thumbnail" src="{{asset('assets/img/scenery-2.jpg')}}" alt="News List">
                        <div class="card-body">
                            <h4 class="card-title">Berita 2</h4>
                            <p class="card-text ellipsis">
                                <small>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </small>
                            </p>
                            <a href="{{ route('news', 2) }}" class="btn btn-primary text-white">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <div class="card mb-2">
                        <img class="img-fluid news-thumbnail" src="{{asset('assets/img/scenery-3.jpg')}}" alt="News List">
                        <div class="card-body">
                            <h4 class="card-title">Berita 3</h4>
                            <p class="card-text ellipsis">
                                <small>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </small>
                            </p>
                            <a href="{{ route('news', 3) }}" class="btn btn-primary text-white">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <div class="card mb-2">
                        <img class="img-fluid news-thumbnail" src="{{asset('assets/img/scenery-4.jpg')}}" alt="News List">
                        <div class="card-body">
                            <h4 class="card-title">Berita 4</h4>
                            <p class="card-text ellipsis">
                                <small>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </small>
                            </p>
                            <a href="{{ route('news', 4) }}" class="btn btn-primary text-white">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="history" class="history">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <img src="" alt="">
                <h1 class="font-weight-bold">Sejarah</h1>
            </div>
            <div>
                <div class="row">
                    <div class="col-lg">
                        <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="Logo SITR">
                    </div>
                    <div class="col-lg-8">
                        <p class="text-justify">
                            Asal mula Desa Dalegan diceritakan secara turun temurun yang disampaikan secara lisan. Letak Desa sebenarnya berada di sebelah timur dari pusat Pemerintahan Desa sekarang. Sebelum dijadikan pemukiman daerah tersebut merupakan daerah rawa-rawa yang dekat dengan laut. Daerah rawa ini banyak dihuni oleh berbagai macam ikan air tawar seperti lele, gabus/kuthuk/deleg, mujair, dan lainnya. Namun, Ikan yang banyak dijumpai dan mendominasi daerah ini adalah ikan Deleg. Sedang tanaman-tanaman yang banyak tumbuh adalah tanaman Kelapa. Banyaknya tanaman kelapa dan sedikitnya jumlah penduduk mengakibatkan banyak sekali buah kelapa yang jatuh sebelum sebelum dipetik baik itu sudah tua maupun masih muda karena tiupan angin laut yang kencang.
                        </p>
                        <p>
                            Pada suatu hari, seorang alim ulama’ yang tidak diketahui namanya dan diduga adalah Syeh Maulana Ishak (ayah kandung Raden paku/Sunan Giri) berjalan di tepi rawa. Ketika itu beliau melihat peristiwa yang mengusik pikirannya. Beliau melihat banyak ikan deleg sedang berusaha memakan buah kelapa yang masih muda. Ini diluar kewajaran karena ikan deleg biasanya memakan ikan kecil, serangga, atau katak. Untuk mengenang peristiwa yang dialaminya maka beliau memberi nama daerah tersebut dengan nama “Dalegan” yaitu perpaduan dari kata Deleg (nama ikan) dan Degan (buah kelapa muda).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main> 
@endsection
@section('css')
    <style>
        .home .owl-carousel{
            position: relative;
        }
        .home .owl-dots{
            position: absolute;
            bottom:80px;
            left:25%;
            right:25%;
        }
        .overlay { 
            color:#fff;
            position:absolute;
            z-index:12;
            top:30%;
            left:10%;
            right:56%;
        }
        .news .news-item {
            margin-left: 10px;
            margin-right: 10px;
        }
        .news-thumbnail {
            max-height: 217px;
        }
        @media (max-width: 768px) {
            .overlay { 
                left:5%;
                right:5%;
                top:20%;
            }
            .news-thumbnail {
                max-height: 179px;
            }
        }
        @media (min-width: 925px) and (max-width: 1280px) {
            .overlay { 
                left:5%;
                right:48%;
                top:30%;
            }
            .news-thumbnail {
                max-height: 179px;
            }   
        }
    </style>
@endsection
@section('js')
    <script>
        $(".home-carousel").owlCarousel({
            autoplay: true,
            dots: true,
            loop: true,
            items: 1,
        });
        $(".news-carousel").owlCarousel({
            autoplay: true,
            dots: true,
            loop: true,
            items: 3,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>
@endsection