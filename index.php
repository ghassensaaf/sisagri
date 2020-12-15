 <?php
 include "header.php";
 $f=new fonctions();
 $carsItems=$f->get_car_item();
 $home=$f->get_Cor_item();
 foreach ($home as $cor)
 {

 }
 ?>
 <div class="container-fluid">
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
                        <a href="tel:0021621509309" class="btn"><i class="fas fa-phone-alt"></i>(+216) <?php  echo $cor["tel"]; ?></a>
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
                        <p>(+216) <?php  echo $cor["tel"]; ?></p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <i class="far fa-envelope"></i>
                    </li>
                    <li>
                        <p><?php  echo $cor["email"]; ?></p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                    </li>
                    <li>
                        <p><?php  echo $cor["adresse"]; ?></p>
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
 <?php
 include "footer.php";
 ?>