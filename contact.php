<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>  
<!DOCTYPE html>
<html lang="en">
<head><title>ResoExpo | Contact Us</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700,900">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/style.css">
    <!-- Library css-->
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.6/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/range-slider/jquery.nstSlider.min.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/datetimepicker/css/bootstrap-datetimepicker.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/slick/slick.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/slick/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/select2/select2.min.css">
    <!-- style css-->
    <link type="text/css" rel="stylesheet" href="assets/css/layout.css">
    <link type="text/css" rel="stylesheet" href="assets/css/components.css">
    <link type="text/css" rel="stylesheet" href="assets/css/responsive.css">
    <!-- LOADING SCRIPTS FOR PAGE--></head>
<body><!-- HEADER-->
<?php include 'common/header1.php'; ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section page-title contact-us-page bg-overlay">
                    <div class="container">
                        <div class="page-title-wrapper"><h2 class="captions">Contact us</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="#">contact us</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-zindex">
                    <div class="contact">
                        <div class="container">
                            <div class="contact-wrapper">
                                <div class="contact-header">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="col-md-3 col-xs-6">
                                                <div class="contact-info-item"><i class="icon fa fa-map-signs"></i>

                                                    <p class="title">Location</p>
                                                    <?php 
                                                    $q =$d->select('company_info');
                                                    while($data = mysqli_fetch_row($q))
                                                    {
                                                    ?>
                                                    <p class="text"><?php echo $data['2']; ?></p></div>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <div class="contact-info-item"><i class="icon fa fa-envelope-o"></i>

                                                    <p class="title">Email Address</p>

                                                    <p class="text"><?php echo $data['3']; ?></p></div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="col-md-3 col-xs-6">
                                                <div class="contact-info-item"><i class="icon fa fa-phone"></i>

                                                    <p class="title">Phone Number</p>

                                                    <p class="text"><?php echo $data['5']; ?></p></div>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <div class="contact-info-item"><i class="icon fa fa-print"></i>

                                                    <p class="title">Fax Number</p>

                                                    <p class="text"><?php echo $data['4']; ?></p></div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="new-letter-wrapper">
                                    <div class="new-letter-content"><h4 class="title">contact us</h4>

                                        <p class="text">Provide Your Feedback Here....</p>

                                         <form method="post" action="insert_master.php"><input type="text" name="name"placeholder="Your Name" class="contact-form"/><input type="email" name="email" placeholder="Your Email" class="contact-form"/><textarea placeholder="Your Message" name="comments" class="contact-form"></textarea><button class="btn btn-transparent white" name="add_feedback">send message</button></form>
                                    </div>
                                </div>
                                <div class="contact-us-wrapper"><img src="img/contact3.jpg" alt="" class="img-responsive"/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div id="map2" class="contact-map height-full-screen">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<?php include 'common/footer.php'; ?>
<!--.body-2.loading<div class="dots-loader"></div>--><!-- JAVASCRIPT LIBS-->
<script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
<script src="assets/libs/detect/browser.js"></script>
<script src="assets/libs/moment/js/moment.min.js"></script>
<script src="assets/libs/bootstrap-3.3.6/js/bootstrap.min.js"></script>
<script src="assets/libs/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<script src="assets/libs/appear/jquery.appear.js"></script>
<script src="assets/libs/count-to/jquery.countTo.js"></script>
<script src="assets/libs/wow-js/wow.min.js"></script>
<script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="assets/libs/select2/select2.min.js"></script>
<script src="assets/libs/range-slider/jquery.nstSlider.min.js"></script>
<script src="assets/libs/parallax/jquery.data-parallax.min.js"></script>
<script src="assets/libs/slick/slick.min.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu6tm60TzeUo9rWpLnrQ7mrFn4JPMVje4&amp;amp;sensor=false"></script>
<script src="assets/js/pages/contact.js"></script>
</body>
</html>




