<?php
include "admin/inc/fonctions.php";
$f=new fonctions();
$carsItems=$f->get_car_item();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Sisagri | lammouchi agri services</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loader.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img width="75%" src="assets/img/logo/logo.png" alt=""></a>

                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li><a href="index.html">Acceuil</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="elements.html">Gallery</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-40">
                                        <a href="tel:0021621509309" class="btn"><i class="fas fa-phone-alt"></i>(+216) 21 509 309</a>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
       <section class="slider-area ">
           <?php
           foreach ($carsItems as $car)
           {
               echo '
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-bg1 hero-overly slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-9 col-md-12">
                                <div class="hero__caption text-center">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">'.$car["titre"].'</h1>
                                    <p data-animation="fadeInUp" data-delay="0.4s">'.$car["slogan"].'.</p>
                                    <a href="#" class="hero-btn" data-animation="fadeInUp" data-delay="0.7s">Explore Our Services<i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>';
           }
           ?>
        </section>

        <!-- slider Area End-->
        <!--? About Area  -->
        <section class="about-area2 pb-bottom pb-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-9">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="assets/img/gallery/about1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-9">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>20+ years <br>agricultural<br>cooperative</h2>
                                <p class="mb-20">
                                    The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!
                                </p>
                                <p class="mb-45">The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                            <a href="#" class="btn"><i class="fas fa-phone-alt"></i>More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!-- ? services-area start-->
        <div class="services-area">
            <div class="container-fluid">
                <div class="row">
                 <div class="col-lg-12">
                    <div class="section-tittle mb-60 text-center">
                        <h2>Services we provide</h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-6">
                    <div class="single-services mb-30">
                        <div class="row no-gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="features-img">
                                    <img src="assets/img/gallery/services1.png" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="features-caption">
                                    <span>01</span>
                                    <h3>Field Ready</h3>
                                    <p>Technological information and others, in addition to information about companies in the sector, list of any and all companies related to agribusiness.
                                    </p>
                                    <a href="#" class="btn">Get the Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="single-services mb-30">
                        <div class="row no-gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="features-img">
                                    <img src="assets/img/gallery/services2.png" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="features-caption">
                                    <span>02</span>
                                    <h3>Transportation</h3>
                                    <p>Technological information and others, in addition to information about companies in the sector, list of any and all companies related to agribusiness.
                                    </p>
                                    <a href="#" class="btn">Get the Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--? Count Down Start -->
    <div class="count-down-area pt-90 pb-80">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper border-bottom">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter">
                                    <span class="counter ">20</span>
                                    <p class="">+</p>
                                </div>
                                <div class="pera-count mb-50">
                                    <p>List of any and all companies related to agribusiness.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter">
                                    <span class="counter ">10</span>
                                    <p class="">K</p>
                                </div>
                                <div class="pera-count mb-50">
                                    <p>List of any and all companies related to agribusiness.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter">
                                    <span class="counter ">12</span>
                                    <p class="">+</p>
                                </div>
                                <div class="pera-count">
                                    <p>List of any and all companies related to agribusiness.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter">
                                    <span class="counter ">280</span>
                                    <p class="">+</p>
                                </div>
                                <div class="pera-count mb-50">
                                    <p>List of any and all companies related to agribusiness.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->
    <!--? About Area  -->
    <section class="about-area2 pb-bottom mt-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption about-caption2 mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-25">
                            <h2>Why you should<br> choose us</h2>
                            <p class="mb-20">Technological information and others, in addition to information about companies in the sector, list of any and all companies related to agribusiness. </p>
                        </div>
                        <div class="single-features">
                            <div class="features-icon">
                                <img src="assets/img/icon/right-icon.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <p>Technological information and others, in addition to information about companies.</p>
                            </div>
                        </div>
                        <div class="single-features">
                            <div class="features-icon">
                                <img src="assets/img/icon/right-icon.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <p>Technological information and others, in addition to  information about companies.</p>
                            </div>
                        </div>
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img src="assets/img/icon/right-icon.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <p>Technological information and others, in addition to information about companies.</p>
                            </div>
                        </div>
                        <a href="tel:0021621509309" class="btn"><i class="fas fa-phone-alt"></i>(+216) 21 509 309</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img about-img2  ">
                        <img src="assets/img/gallery/about2.png" alt="">
                        <!-- img cap -->
                        <div class="info-man text-center">
                            <div class="head-cap">
                                <img src="assets/img/icon/agronomy.svg" alt="">
                                <p>Best Plants</p>
                            </div>
                        </div>
                        <!-- img cap -->
                        <div class="info-man info-man2 text-center">
                            <div class="head-cap">
                                <img src="assets/img/icon/fields.svg" alt="">
                                <p>Award Wining</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <!--  services-area End-->
    <!-- ? services-area start-->
<!--  services-area End-->
<!--All startups Start -->
<div class="all-starups-area fix">
    <!-- left Contents -->
    <div class="starups">
        <div class="starups-details">
            <!-- Section Tittle -->
            <div class="section-tittle mb-35">
                <h2>Need any help?</h2>
                <p>The information is also part of the MF Rural, where you can find news, quotes, technological information and others, in addition.</p>
            </div>
            <!-- Details -->
            <div class="starups-list mb-30">
                <ul>
                    <li>
                        <i class="fas fa-phone"></i>
                    </li>
                    <li>
                        <p>(+216) 21 509 309</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <i class="far fa-envelope"></i>
                    </li>
                    <li>
                        <p>contact@sisagri.com</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                    </li>
                    <li>
                        <p>1 rue sisagri, bizerte</p>
                    </li>
                </ul>
            </div>
            <a href="#" class="border-btn">Drop Your Message</a>
        </div>
    </div>
    <!--Right Contents  -->
    <div class="starups-img"></div>
</div>
<!--All startups End -->
</main>
<footer>
 <div class="footer-wrappper">
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-8">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo mb-25">
                                <a href="index.html"><img width="50%" src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>The information is also part of the MF Rural, where you can find news, quotes, technological information and others, in addition.</p>
                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                                <li><a href="#">Link 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                                <li><a href="#">Link 4</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>
</footer>

<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="./assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>