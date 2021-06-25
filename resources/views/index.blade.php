<!doctype html>
 <html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>KAMAR CODING</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- Font Google link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">


        <!--Untuk Plugin css eksternal-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Tema css khusus -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Tema Responsif css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="200">
        <div class='preloader'>
            <div class='loaded'>&nbsp;</div>
        </div>

        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Merek dan tombol dikelompokkan untuk tampilan seluler yang lebih baik -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#home">
                                                <a href="index.html" class="logo"><b>KAMAR<span>KODING</span></b></a>
                                            </a>
                                        </div>

                                        <!-- Kumpulkan link navigasi, formulir, dan konten lain untuk diubah -->
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="#home">HOME</a></li>
                                                <li><a href="#contact">CONTACT</a></li>
                                                <li>@if (Route::has('login'))
                                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                        @auth
                                                           <li> <a href="{{ url('/redirects') }}" class="text-sm text-gray-700 underline">Dashboard</a></li>
                                                        @else
                                                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>
                                    
                                                            @if (Route::has('register'))
                                                            <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a><li>
                                                            @endif
                                                        @endauth
                                                    </div>
                                                @endif
                                                </li>

                                            </ul>


                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End untuk header -->

            <section id="home" class="home">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>SELAMAT DATANG DI KAMAR KODING </h1>
                                            <p>Media belajar berbasis website yang fokus untuk meningkatkan skill untuk bisa menjadi seorang programmer.</p>
                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>INGIN MENJADI PROGRAMER PROFESIONAL ?</h1>
                                            <p>Dapatkan Kelas Terbaik dari Kamar Koding</p>
                                            <div class="home_btn">
                                                <a href="PAKET/index.html" class="btn btn-primary">LEARN MORE</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>BINGUNG MAU BELAJAR DARI MANA ?</h1>
                                            <p>Yuk.. buruan ikuti Paket Kelas dari Kamar Koding </p>
                                            <div class="home_btn">
                                                <a href="PAKET/index.html" class="btn btn-primary">LEARN MORE</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            </section>

            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_features_area sections">
                                <div class="head_title">
                                    <h3>INFORMASI</h3>
                                </div>
                                <div class="row">
                                    <div class="main_features_content">

                                        <div class="col-sm-6">

                                            <div class="single_features_slide">
                                                <div class="single_ft_s_item">
                                                    <img src="assets/images/pf1.jpg" alt="" />
                                                </div>
                                                <div class="single_ft_s_item">
                                                    <img src="assets/images/pf2.jpg" alt="" />
                                                </div>
                                                <div class="single_ft_s_item">
                                                    <img src="assets/images/pf3.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                                <ul>
                                                    <li><span>Dapatkan Paket Kelas termurah dari </span> Kamar Koding</li>
                                                </ul>
                                                <a href="PAKET/index.html" class="btn">LAUNCH NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>


    
            <section id="about" class="about">
                <div class="container">
                    <div class="row">

                        <div class="main_about_area sections">
                            <div class="col-sm-12">

                                <div class="main_about_content">
                                    <div class="row">

                                        <div class="col-sm-7 wow fadeInRight" data-wow-duration="700ms">
                                            <div class="single_about_right_content">
                                                <div class="head_title">
                                                    <h3>ABOUT KAMAR KODING</h3>
                                                </div>

                                                <div class="single_about">
                                                    <div class="single_ab_icon">
                                                        <div class="ab_border_right"></div>
                                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="single_ab_text">
                                                        <h3>Kamar Belajar</h3>
                                                        <p>Belajar mandiri dengan puluhan video belajar</p>
                                                    </div>
                                                </div>
                                                <div class="single_about">
                                                    <div class="single_ab_icon">
                                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="single_ab_text">
                                                        <h3>Kamar Quiz</h3>
                                                        <p>Terdapat quiz-quiz menarik yang tentunya untuk mengetahui sejauh mana pemahaman materi</p>
                                                    </div>
                                                </div>
                                                <div class="single_about">
                                                    <div class="single_ab_icon">
                                                        <i class="fa fa-book" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="single_ab_text">
                                                        <h3>Kamar Les</h3>
                                                        <p>Temukan tutor privat untuk belajar pemrograman eksklusif 1 murid dengan 1 tutor.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-5">
                                            <div class="single_about_left_img margin-top-40 text-center wow fadeInLeft" data-wow-duration=".6s">
                                                <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                                                <img src="assets/images/abright.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="about_skill_area">
                                            <div class="col-sm-6">
                                                <div class="about_tabe">
                                                    <!-- Nav tabs -->
                                                    <ul class="about_tabe_menu" role="tablist">
                                                        <li role="presentation" class="active"><a href="#mission" aria-controls="mission" role="tab" data-toggle="tab">OUR MISSION</a></li>
                                                        <li role="presentation"><a href="#goal" aria-controls="goal" role="tab" data-toggle="tab">OUR GOAL</a></li>
                                                        <li role="presentation"><a href="#PeluangKerja" aria-controls="PeluangKerja" role="tab" data-toggle="tab">PELUANG KERJA</a></li>
                                                    </ul>

                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="mission">
                                                            <div class="single_about_tab">
                                                                <p>Kamar Koding ingin membantu kawan kawan yang bingung masalah pembelajaran coding, dengan itu kami menyediakan
                                                                    Paket Kelas yang harga yang sangat terjangkau.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="goal">
                                                            <div class="single_about_tab">
                                                                <p>Setelah Selesai Mengikuti Kelas KAMAR KOCING, Kawan Kawan akan mendapatkan Benefit untuk masa depan 
                                                                    Kawan Kawan,</p>

                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <ul class="single_ab_mision">
                                                                            <li><i class="fa fa-check-square"></i> Sertifikat</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <ul class="single_ab_mision">
                                                                            <li><i class="fa fa-check-square"></i> Modul Kelas</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="PeluangKerja">
                                                            <div class="single_about_tab">
                                                                <p>Setelah Lulus dari Kamar Koding, kami akan memandu kalian untuk bisa mendapatkan kerja setelah mengikuti Kelas 
                                                                    Kamar Koding. Dan berupa jodoh,</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="about_skill">
                                                    <div class="skillbar" data-percent="79%">
                                                        <div class="skillbar-title"><h3 class="blue">LULUSAN SISWA KAMAR KODING </h3><span class="sm-text">79%</span></div>
                                                        <div class="skillbar-bar blue"></div>
                                                    </div>

                                                    <div class="skillbar" data-percent="80%">
                                                        <div class="skillbar-title"><h3 class="blue">SISWA KAMAR KODING</h3><span class="sm-text">80%</span></div>
                                                        <div class="skillbar-bar blue"></div>
                                                    </div>

                                                    <div class="skillbar" data-percent="79%">
                                                        <div class="skillbar-title"><h3 class="blue">MENTOR KAMAR KODING</h3><span class="sm-text">79%</span></div>
                                                        <div class="skillbar-bar blue"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            

            <section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="contact_contant sections">
                                    <div class="col-sm-6">

                                        <div class="main_contact_info">
                                            <div class="head_title">
                                                <h3>CONTACT INFO</h3>
                                            </div>
                                            <div class="row">
                                                <div class="contact_info_content">
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-home"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>VISIT US</h3>
                                                                <p>SURGA MALANG</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-envelope-o"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>MAIL US</h3>
                                                                <p>info-id@kamarkoding.com</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_icon">
                                                                <i class="fa fa-mobile"></i>
                                                            </div>
                                                            <div class="single_info_text">
                                                                <h3>CALL US</h3>
                                                                <p>0893-1212-3121</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <div class="head_title">
                                            <h3>LEAVE MESSAGE</h3>
                                        </div>
                                
            <section id="footer" class="footer_widget">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="main_widget">
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                                <div class="footer_logo">
                                                  <h2>KAMAR KODING</h2>
                                                </div>
                                                <p>Media belajar berbasis website yang fokus untuk meningkatkan skill untuk bisa menjadi seorang programer </p>

                                            </div>
                                        </div>

                                        <div class="col-sm-3  col-xs-12">
                                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                                <ul>
                                                    <li><a href="">About Us</a></li>
                                                </ul> 
                                            </div>
                                        </div>

                                     
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                                <div class="row">

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="copyright_text">
                                            <p class=" wow fadeInRight" data-wow-duration="1s">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="flowus">
                                            <a href=""><i class="fa fa-facebook"></i></a>
                                            <a href=""><i class="fa fa-google-plus"></i></a>
                                            <a href=""><i class="fa fa-dribbble"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.masonry.min.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="assets/js/gmaps.min.js"></script>


        <script>

                                            function showmap() {
                                                var mapOptions = {
                                                    zoom: 8,
                                                    scrollwheel: false,
                                                    center: new google.maps.LatLng(-34.397, 150.644),
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                                };
                                                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                                            }
        </script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
