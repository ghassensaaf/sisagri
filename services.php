<?php
include "header.php";
$f=new fonctions();
$service=$f->get_service_item();
$contact=$f->get_Cor_item();
foreach ($contact as $con)
{

}
?>
    <!-- header end -->
    <main>
        <!--? slider Area Start-->
        <section class="slider-area slider-area3  hero-overly">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2 text-center">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Services</h1>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </section>
        <!-- ? services-area start-->
        <div class="services-area section-padding40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-60 text-center">
                            <h2>Services we provide</h2>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <?php
                    foreach ($service as $sev)
                    {
                        echo '     <div class="col-xl-6">
                        <div class="single-services mb-30">
                            <div class="row no-gutters">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="features-img">
                                        <img src="assets/img/gallery/'.$sev["img"].'" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="features-caption">
                                        <h2>'.$sev["titre"].'</h2>
                                        <p>'.$sev["text"].'
                                        </p>
                                        <a href="services.html" class="btn"><i class="fas fa-phone-alt"></i>Get the Service</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }

                    ?>



                </div>
            </div>
        </div>
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
                                <p>(+216) <?php echo $con['tel'] ;?></p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <i class="far fa-envelope"></i>
                            </li>
                            <li>
                                <p><?php echo $con['email'] ;?></p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                            </li>
                            <li>
                                <p><?php echo $con['adresse'] ;?></p>
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