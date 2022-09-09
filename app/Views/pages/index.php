<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>HealthyPeople - Program Vaksinasi Indonesia</title>

    <!-- Fav Icon -->
    <link rel="icon" href="<?= base_url('assets/landing_page/assets/images/favicon.ico') ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,300i,400,400i,600,600i,700,700i,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="<?= base_url('assets/landing_page/assets/css/font-awesome-all.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/landing_page/assets/css/flaticon.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/landing_page/assets/css/owl.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/landing_page/assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/landing_page/assets/css/jquery.fancybox.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/landing_page/assets/css/animate.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/landing_page/assets/css/color/theme-color.css'); ?>" id="jssDefault" rel="stylesheet">
    <link href="<?= base_url('assets/landing_page/assets/css/switcher-style.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/landing_page/assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/landing_page/assets/css/responsive.css'); ?>" rel="stylesheet">

</head>


<!-- page wrapper -->

<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader">
        <div class="boxes">
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- main header -->
    <header class="main-header style-one">
        <div class="header-top">
            <div class="auto-container">
                <div class="top-inner clearfix">
                    <ul class="info top-left pull-left">
                        <li><i class="fas fa-phone-volume"></i><a href="tel:1234567890">+62-812-3456-7890</a></li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:healthypeople@gmail.com">healthypeople@gmail.com</a></li>
                    </ul>
                    <ul class="top-right pull-right">
                        <li class="work-time"><i class="fas fa-clock"></i>Working Hours - Mon - Fri: 7:30 - 18:30</li>
                        <li class="social-links">
                            <ul class="clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-upper">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="<?= base_url('') ?>"><img src="<?= base_url('assets/landing_page/assets/images/logo.png') ?>" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="index.html">Home</a>
                                        <!-- <ul>
                                            <li><a href="index.html">Home Page One</a></li>
                                            <li><a href="index-2.html">Home Page Two</a></li>
                                            <li><a href="index-3.html">Home Page Three</a></li>
                                            <li><a href="index-4.html">Home Page Four</a></li>
                                            <li><a href="index-5.html">Home Page Five</a></li>
                                            <li><a href="index-rtl.html">Home RTL</a></li>
                                            <li><a href="index-onepage.html">Home OnePage</a></li>
                                            <li class="dropdown"><a href="index.html">Header Style</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                    <li><a href="index-4.html">Header Style Four</a></li>
                                                    <li><a href="index-5.html">Header Style Five</a></li>
                                                </ul>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li class="dropdown"><a href="index.html">Layanan Kami</a>
                                        <ul>
                                            <li><a href="service.html">Daftar Vaksin</a></li>
                                            <li><a href="service-details.html">HomeVaccine</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index.html">Artikel</a>
                                        <ul>
                                            <li><a href="blog.html">Berita Terbaru Vaksin</a></li>
                                            <li><a href="blog-details.html">Update Covid-19 Indonesia</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Hubungi Kami</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="btn-box"><a href="<?= base_url('login') ?>" class="theme-btn style-one">Login</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/landing_page/assets/images/small-logo.png') ?>" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <div class="btn-box"><a href="<?= base_url('login') ?>" class="theme-btn style-one">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/landing_page/assets/images/mobile-logo.png') ?>" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!-- banner-section -->
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(<?= base_url('assets/landing_page/assets/images/hm/vaksin2.png') ?>)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5>Selamat datang di</h5>
                        <h1>Healthy People</h1>
                        <div class="btn-box">
                            <a href="service.html" class="theme-btn style-two">Daftar Vaksinasi Covid-19</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(<?= base_url('assets/landing_page/assets/images/hm/hm.webp') ?>)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5>Gamau ribet?</h5>
                        <h1>vaksin #DariRumahAja!</h1>
                        <div class="btn-box">
                            <a href="service.html" class="theme-btn style-two">Daftar HomeVaccine</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(<?= base_url('assets/landing_page/assets/images/hm/history.jpeg') ?>"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5>Jangan lupa,</h5>
                        <h1> Cek riwayat vaksinasi kamu</h1>
                        <div class="btn-box">
                            <a href="service.html" class="theme-btn style-two">Cek Riwayat Vaksin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- testimonial-section -->
    <section class="testimonial-section centred">
        <div class="auto-container">
            <div class="sec-title">
                <p>Perlu kita ketahui,</p>
                <h2>Apa Pentingnya Vaksinasi Covid-19?</h2>
                <span class="separator"></span>
            </div>
            <img src="<?= base_url('assets/landing_page/assets/images/hm/vaksin.jpeg') ?>" class="rounded mx-auto d-block" alt="...">
        </div>
    </section>
    <!-- testimonial-section end -->

    <!-- news-section -->
    <section class="news-section bg-color-1">
        <div class="auto-container">
            <div class="sec-title">
                <p>Lihat Juga</p>
                <h2>Artikel terbaru Covid-19</h2>
                <span class="separator"></span>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="<?= base_url('assets/landing_page/assets/images/hm/ilmuan.jpeg') ?>" alt="">
                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="upper-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="fas fa-comments"></i><a href="blog-details.html">Comments 47</a></li>
                                        <li><i class="far fa-calendar-alt"></i>Jan 13, 2020</li>
                                    </ul>
                                    <h3><a href="blog-details.html">Ilmuan Amerika Temukan Obat Penangkal Gejala Covid</a></h3>
                                    <p>Washington DC, seorang ilmuan Oxford asal Amerika menemukan obat untuk menangani...</p>
                                </div>
                                <div class="lower-box clearfix">
                                    <div class="link"><a href="blog-details.html">Baca Selengkapnya</a></div>
                                    <div class="admin"><i class="fas fa-user"></i><a href="blog-details.html">By Admin</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="<?= base_url('assets/landing_page/assets/images/hm/vaksin.jpeg') ?>" alt="">
                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="upper-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="fas fa-comments"></i><a href="blog-details.html">Comments 42</a></li>
                                        <li><i class="far fa-calendar-alt"></i>Jan 14, 2020</li>
                                    </ul>
                                    <h3><a href="blog-details.html">Apa Pentingnya Vaksinasi Covid-19?</a></h3>
                                    <p>Vaksinasi Covid-19 marak diperbincangkan karena dampaknya yang mampu dalam...</p>
                                </div>
                                <div class="lower-box clearfix">
                                    <div class="link"><a href="blog-details.html">Baca Selengkapnya</a></div>
                                    <div class="admin"><i class="fas fa-user"></i><a href="blog-details.html">By Admin</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="<?= base_url('assets/landing_page/assets/images/hm/corona.jpeg') ?>" alt="">
                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="upper-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="fas fa-comments"></i><a href="blog-details.html">Comments 40</a></li>
                                        <li><i class="far fa-calendar-alt"></i>Jan 15, 2020</li>
                                    </ul>
                                    <h3><a href="blog-details.html">Tips Terhindar dari Virus Covid-19</a></h3>
                                    <p>Covid-19 yang mewabah membuat kita harus waspada dan siaga dalam menanggulanginya. Salah satu...</p>
                                </div>
                                <div class="lower-box clearfix">
                                    <div class="link"><a href="blog-details.html">Baca Selengkapnya</a></div>
                                    <div class="admin"><i class="fas fa-user"></i><a href="blog-details.html">By Admin</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-text">
                <p>Jangan ketinggalan berita terupdate dari kami. <a href="blog.html">Lihat berita kami selengkapnya.</a></p>
            </div>
        </div>
    </section>
    <!-- news-section end -->

    <!-- about-section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_01">
                        <div class="image-box">
                            <div class="pattern-layer" style="background-image: url(<?= base_url('assets/landing_page/assets/images/shape/shape-1.png') ?>);"></div>
                            <figure class="image"><img src="<?= base_url('assets/landing_page/assets/images/hm/nakes.jpeg') ?>" alt=""></figure>
                            <div class="icon-holder">
                                <div class="icon-box"><i class="flaticon-lab"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_01">
                        <div class="content-box">
                            <div class="sec-title left">
                                <p>Tentang Kami</p>
                                <h2>Kami membantu dan melayani anda dalam Vaksinasi Covid-19!</h2>
                                <span class="separator"></span>
                            </div>
                            <div class="text">
                                <p>Kami memiliki ikatan dengan nakes terbaik di-Indonesia. Maraknya virus Covid-19 yang telah menjadi wabah dunia membuat kita harus waspada dan siap siaga dalam menghadapinya. Terapkan selalu 5M, dan gunakan masker ketika didalam maupun luar ruangan. Lihat layanan kami dibawah ini</p>
                            </div>
                            <div class="inner-box">
                                <div class="single-item">
                                    <div class="count-box"><span>01</span></div>
                                    <div class="inner">
                                        <h3><a href="index.html">Vaksinasi Covid-19</a></h3>
                                        <p>Daftar untuk mendapatkan vaksinasi Covid-19 di-booth vaksin terdekat anda!</p>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="count-box"><span>02</span></div>
                                    <div class="inner">
                                        <h3><a href="index.html">HomeVaccine</a></h3>
                                        <p>Daftar untuk layanan vaksinasi Covid-19 dari rumah dengan bantuan tenaga kesehatan yang handal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- main-footer -->
    <section class="main-footer">
        <div class="footer-top">
            <div class="pattern-layer" style="background-image: url(<?= base_url('assets/landing_page/assets/images/shape/shape-5.png') ?>);"></div>
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="<?= base_url('assets/landing_page/assets/images/footer-logo.png') ?>" alt=""></a></figure>
                                <div class="text">
                                    <p>Kami memiliki ikatan dengan nakes terbaik di-Indonesia. Maraknya virus Covid-19 yang telah menjadi wabah dunia membuat kita harus waspada dan siap siaga dalam menghadapinya. Terapkan selalu 5M, dan gunakan masker ketika didalam maupun luar ruangan.</p>
                                </div>
                                <div class="social-inner">
                                    <h3>Follow Us:</h3>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Layanan kami</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="clearfix">
                                        <li><a href="index.html">About Us</a></li>
                                        <li><a href="index.html">Daftar Vaksin</a></li>
                                        <li><a href="index.html">HomeVaccine</a></li>
                                        <li><a href="index.html">Lokasi Vaksin</a></li>
                                        <li><a href="index.html">Artikel</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>Artikel terbaru</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="image-box"><a href="blog-details.html"><img src="<?= base_url('assets/landing_page/assets/images/hm/vaksin.jpeg') ?>" alt=""></a></figure>
                                        <p><i class="fas fa-calendar-alt"></i>Feb 05, 2020</p>
                                        <h5><a href="blog-details.html">Apa Pentingnya Vaksinasi?</a></h5>
                                    </div>
                                    <div class="post">
                                        <figure class="image-box"><a href="blog-details.html"><img src="<?= base_url('assets/landing_page/assets/images/hm/ilmuan.jpeg') ?>" alt=""></a></figure>
                                        <p><i class="fas fa-calendar-alt"></i>Feb 06, 2020</p>
                                        <h5><a href="blog-details.html">Ilmuan Amerika Temukan Obat Penangkal Gejala Covid.</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="auto-container">
                <div class="copyright">
                    <p>Copyright &copy; 2022 <a href="index.html">HealthyPeople</a>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>


    <!-- jequery plugins -->
    <script src="<?= base_url('assets/landing_page/assets/js/jquery.js'); ?>"></script>
    <script src="<?= base_url('assets/landing_page/assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/landing_page/assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/landing_page/assets/js/owl.js'); ?>"></script>
    <script src="<?= base_url('assets/landing_page/assets/js/wow.js'); ?>"></script>
    <script src="<?= base_url('assets/landing_page/assets/js/validation.js'); ?>"></script>
    <script src="<?= base_url('assets/landing_page/assets/js/jquery.fancybox.js'); ?>"></script>
    <script src="<?= base_url('assets/landing_page/assets/js/appear.js'); ?>"></script>
    <script src="<?= base_url('assets/landing_page/assets/js/jquery.countTo.js'); ?>"></script>
    <script src="<?= base_url('assets/landing_page/assets/js/scrollbar.js'); ?>"></script>
    <script src="<?= base_url('assets/landing_page/assets/js/tilt.jquery.js'); ?>"></script>
    <script src="<?= base_url('assets/landing_page/assets/js/jQuery.style.switcher.min.js'); ?>"></script>

    <!-- main-js -->
    <script src="<?= base_url('assets/landing_page/assets/js/script.js'); ?>"></script>

</body><!-- End of .page_wrapper -->

</html>