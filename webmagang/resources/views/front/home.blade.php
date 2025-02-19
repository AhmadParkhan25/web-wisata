<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>WisataBedas</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-4 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-5 {
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>

<body>
    {{-- @dd($wisatas); --}}
    <!-- header section start -->
    <div class="header_section">
        <div class="header_main">
            <div class="mobile_menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/services">Rekomendasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="container-fluid">
                <div class="logo"><a href="/"><img src="images/logo.png"></a></div>
                <div class="menu_main">
                    <ul>
                        <li class="active"><a href="/home">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/services">Rekomendasi</a></li>
                        <li><a href="/contact">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <h1 class="banner_taital">Selamat Datang</h1>
                            <p class="banner_text">Nikmati harmoni alam dalam setiap langkah. Temukan destinasi terbaik
                                yang dirancang untuk memulihkan jiwa dan menyegarkan pikiran Anda.</p>
                            <div class="read_bt"><a href="#rekomendasi">Klik Di sini</a></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <h3 class="banner_taital">Keajaiban Alam</h3>
                            <p class="banner_text">"Kabupaten Bandung dikenal dengan pesona alamnya yang memukau. Dari
                                dinginnya Kawah Putih hingga ketenangan Situ Patenggang, nikmati keindahan alam yang
                                menyegarkan jiwa."</p>
                            <div class="read_bt"><a href="#rekomendasi">Klik Di sini</a></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <h3 class="banner_taital">Kuliner Lezat dan Tradisi yang Menginspirasi</h3>
                            <p class="banner_text">Rasakan cita rasa khas Sunda dari nasi liwet hingga peuyeum.
                                Kunjungi juga Kampung Adat Cikondang untuk pengalaman budaya yang autentik</p>
                            <div class="read_bt"><a href="#rekomendasi">Klik Di sini</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- services section start -->
    <div class="services_section layout_padding">
        <div id="rekomendasi" class="container">
            <h1 class="services_taital">Rekomendasi </h1>
            <p class="services_text">Berikut adalah rekomendasi wisata di Kabupaten Bandung</p>
            <div class="services_section_2">
                <div class="row">
                    @forelse ($recomendations as $item)
                        <div class="col-md-4">
                            <div><img src="{{ url('uploads/' . $item->wisata->image) }}" class="services_img"
                                    heigh="305px">
                            </div>
                            <div class="btn_main">
                                <a href="{{ route('front.blog.show', [$item->wisata->judul, $item->wisata->id]) }}">
                                    {{ $item->wisata->judul }}
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-4">
                            <p class="text-center m-0">Tidak ada rekomendasi</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="services_section layout_padding">
        <div id="wisata" class="container">
            <h1 class="services_taital">Wisata</h1>
            <p class="services_text mb-4">Berikut Beberapa Wisata Yang Ada Di Kabupaten Bandung</p>
            @forelse ($wisatas as $item)
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ url("uploads/$item->image") }}" class="img-fluid rounded-start h-100 w-100"
                                alt="{{ $item->judul }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title line-clamp-2">{{ $item->judul }}</h2>
                                <p class="card-text m-0 line-clamp-4">
                                    {{ strip_tags($item->descrip) }}
                                </p>
                                <p class="card-text m-0 mt-5">
                                    <small class="text-body-secondary">
                                        <a href="{{ route('front.blog.show', [$item->judul, $item->id]) }}"
                                            class="btn" style="background-color: #2b2278;">
                                            Lainnya
                                        </a>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h5>Belum ada Wisata yang ditambahkan</h5>
            @endforelse
        </div>
    </div>

    <!-- services section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_taital_main">
                        <h1 class="about_taital">Mengapa Memilih Wisata Kabupaten Bandung?</h1>
                        <p class="about_text">Kabupaten Bandung adalah destinasi yang menawarkan pemandangan alam yang
                            menakjubkan, kuliner autentik, dan budaya yang kaya. Kami hadir untuk memudahkan perjalanan
                            Anda dengan menyediakan informasi wisata terbaik dan terpercaya.</p>
                        <div class="readmore_bt"><a href="/about">Read More</a></div>
                    </div>
                </div>
                <div class="col-md-6 padding_right_0">
                    <div><img src="images/about-img.png" class="about_img"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- client section start -->
    <div class="client_section layout_padding">
        <div class="container">
            <h1 class="client_taital">Testimonial</h1>
            <div class="client_section_2">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="client_main">
                                <div class="box_left">
                                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugia</p>
                                </div>
                                <div class="box_right">
                                    <div class="client_taital_left">
                                        <div class="client_img"><img src="images/client-img.png"></div>
                                        <div class="quick_icon"><img src="images/quick-icon.png"></div>
                                    </div>
                                    <div class="client_taital_right">
                                        <h4 class="client_name">Dame</h4>
                                        <p class="customer_text">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="client_main">
                                <div class="box_left">
                                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugia</p>
                                </div>
                                <div class="box_right">
                                    <div class="client_taital_left">
                                        <div class="client_img"><img src="images/client-img.png"></div>
                                        <div class="quick_icon"><img src="images/quick-icon.png"></div>
                                    </div>
                                    <div class="client_taital_right">
                                        <h4 class="client_name">Dame</h4>
                                        <p class="customer_text">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="client_main">
                                <div class="box_left">
                                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugia</p>
                                </div>
                                <div class="box_right">
                                    <div class="client_taital_left">
                                        <div class="client_img"><img src="images/client-img.png"></div>
                                        <div class="quick_icon"><img src="images/quick-icon.png"></div>
                                    </div>
                                    <div class="client_taital_right">
                                        <h4 class="client_name">Dame</h4>
                                        <p class="customer_text">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client section start -->
    <!-- choose section start -->
    <div class="choose_section layout_padding">
        <video class="background-video" autoplay loop muted playsinline>
            <source src="images/intro.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
        <!-- choose section end -->
        <!-- footer section start -->
        <div class="footer_section layout_padding">
            <div class="container">
                <div class="input_btn_main">
                    <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
                    <div class="subscribe_bt"><a href="#">Send</a></div>
                </div>
                <div class="location_main">
                    <div class="call_text"><img src="images/call-icon.png"></div>
                    <div class="call_text"><a href="#">Call +62 87709021815</a></div>
                    <div class="call_text"><img src="images/mail-icon.png"></div>
                    <div class="call_text"><a href="#">bilalqori21@gmail.com</a></div>
                </div>
                <div class="social_icon">
                    <ul>
                        <li><a href="#"><img src="images/fb-icon.png"></a></li>
                        <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                        <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- footer section end -->
        <!-- copyright section start -->
        <div class="copyright_section">
            <div class="container">
                <p class="copyright_text">2024 All Rights Reserved. Design by Azwraith </p>
            </div>
        </div>
        <!-- copyright section end -->
        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- javascript -->
        <script src="js/owl.carousel.js"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
