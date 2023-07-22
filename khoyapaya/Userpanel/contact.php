<?php
    require_once('config.php');
    include_once('header.php');
?>
<!DOCTYPE html>
    <html>
    <head>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>
<script type="text/javascript" src="validation.min.js"></script>   
<style type="text/css">
       .error {
      color: red;
         }
       .mytest
       {
        color: black;
       }  

</style> 
    </head>
    <body>

    <!-- Page title -->
    <div class="page-title-section">
        <div class="page-title-wrap">
            <div class="page-title-overlay"></div>
            <div class="page-title-info">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
                <h1 class="page-title">Contact Us</h1>
            </div>
        </div>
    </div>
    
    <!-- contact-section start -->
    <div class="contact-section pd-top-100 pd-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 ">
                    <div class="contact-head">
                        <div class="g-maps">
                                
                            <div id="map" style="height: 291px"></div>
                        </div>
                        <h3 class="head-title">Address</h3>
                        <p>2129 Mulberry Lane
                            <br>Fort Lauderdale, FL 33301, USA
                            <br>
                            <i class="fa fa-phone"></i>555.555.1234
                            <br>
                            <i class="fa fa-envelope"></i>khoyapaya5040@gmail.com</p>
                    </div>
                   <!--  <div class="contact-branch mg-bottom-50">
                        <div class="branch-office col-md-6">
                            <h3 class="head-title">Branch office-1</h3>
                            <p>3295 Columbia Road
                                <br>Denver, CO 80265, USA
                                <br>
                                <i class="fa fa-phone"></i>555.555.1234
                                <br>
                                <i class="fa fa-envelope"></i>hello@example.com</p>
                        </div>
                        <div class="branch-office col-md-6">
                            <h3 class="head-title">Branch office-2</h3>
                            <p>552 Junior Avenue
                                <br>Atlanta, GA 30303, USA
                                <br>
                                <i class="fa fa-phone"></i>555.555.1234
                                <br>
                                <i class="fa fa-envelope"></i>hello@example.com</p>
                        </div>
                    </div> -->
                </div>
                <div class="col-sm-6 contact-main mg-bottom-50" >
                    <h3 class="form-title">Contact form</h3>
                    <form class="contact-form" method="POST" id="contact-page">
                        <div id="error">
                        </div>
                        <div id="divid">
                            
                        
                        <label class="contact-title" for="Subject">Subject</label>
                        <input id="Subject" name="Subject" class="input mytest" type="text" placeholder="Subject" />
                        <br><label class="contact-title" for="message">Message</label>
                        <textarea id="Message" name="Message" class="input-message mytest" rows="7" cols="30" placeholder="Type your message here........."></textarea><br>
                       <!-- 
                        <label class="contact-title" for="email">Email address</label>
                        <input id="email" name="email" class="input" type="text" placeholder="example@gmail.com" />
                        <label class="contact-title" for="Website">Website</label>
                        <input id="Website" name="website" class="input" type="text" placeholder="http//:www.example.com" /> -->
                        <input class="btn" type="submit" name="submit" id="submit" value="SUBMIT" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Faq page link -->
    <!-- <div class="faq-read">
        <p>If any kind of query visit <a href="#">FAQ</a></p>
    </div> -->
<!-- Footer -->
    <div class="footer-section">
        <div class="footer-top pd-top-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-6 footer-widget">
                        <div class="footer-logo">
                            <img class="retina" src="images/1234.png" alt="logo">
                            <p>Lorem ipsum dolor sit amet, his ferri probatus neglegentur te, eum affert legere nominavi ad, eu enim semper dictas ius. Legimus delicata an sit. Sea ex nonumes molestie. Cu salutandi scribentur.</p>
                            <div class="footer-social">
                                <a href="#"><i class="fa fa-twitter-square"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                <a href="#"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <div class="footer-address">
                            <h3 class="footer-title">Office address</h3>
                            <p>123 Imaginary Drive Danbury,
                                <br> Connecticut, USA</p>
                            <p>
                                <i class="fa fa-phone"></i>555.555.1234
                                <br>
                                <i class="fa fa-envelope-o"></i>hello@example.com
                            </p>
                            <div class="footer-map">
                                <a href="contact.php"><i class="fa fa-map-marker"></i>See in map</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <h3 class="footer-title">Quick link</h3>
                        <ul>
                            <li><a href="#">Dolor sit amet, his ferri</a></li>
                            <li><a href="#">probatus neglegentur te,</a></li>
                            <li><a href="#">Affert legere nomina,</a></li>
                            <li><a href="#">Enim semper dictas</a></li>
                            <li><a href="#">Legimus delicata</a></li>
                            <li><a href="#">Nonumes molestie.</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <h3 class="footer-title">Anual reports</h3>
                        <ul>
                            <li><a href="#">Reports 2016</a></li>
                            <li><a href="#">Commercial reports 2015,</a></li>
                            <li><a href="#">Sales report November, 2016</a></li>
                            <li><a href="#">Half yearly report Jan-Jun 2016</a></li>
                            <li><a href="#">Financial report 2014</a></li>
                            <li><a href="#">Technical report 2015</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span><a href="#">Tarms & Condition</a></span>
                        <span>&copy; 2017 beCharity</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Common JS Plugin-->
   
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/headroom.min.js"></script>
    <script type="text/javascript" src="js/jQuery.headroom.min.js"></script>
    <script type="text/javascript" src="js/sticky-kit.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYMloK_kzsasOQXg-xhGxnwvlAU3HTZWg&amp;callback=initMap" async defer></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="js/custom.js"></script>
</body>
