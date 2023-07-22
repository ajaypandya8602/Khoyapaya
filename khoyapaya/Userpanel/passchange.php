  <?php
      require_once('config.php');
      include_once('header.php');
  ?>
  <!DOCTYPE html>
      <html>
      <head> 
          <script src="https://kit.fontawesome.com/1869fd21f6.js" crossorigin="anonymous"></script>

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
        <!-- page title -->
      <div class="page-title-section">
          <div class="page-title-wrap">
              <div class="page-title-overlay"></div>
              <div class="page-title-info">
                  <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">Login</li>
                  </ol>
                  <h1 class="page-title">Login Page</h1>
              </div>
          </div>
      </div>

      <!-- registar -->
      <div class="registar-section pd-top-60 pd-bottom-100">
          <div class="container ">
              <div class="row">
                  <div class="col-md-4 col-md-offset-4 contact-main ">
                 
                    <div id="error"  >
                    </div>
                      <form class="registar-form" method="POST" id="forget-form" >
                         <p class="text-center"><i class="fas fa-lock fa-5x "></i></p>
                          <label for="curr pass">Current Password</label>
                          <input id="text" class="input" type="Password" name="reset" id="reset" required>                       
                          <label for="New pass">New Password</label>
                          <input id="text" class="input" type="Password" name="reset" id="reset" required>
                          <label for="conf pass">Confirm Password</label>
                          <input id="text" class="input" type="Password" name="reset" id="reset" required>
                           
                          <p></p>
                         
                          <input class="btn btn-lg btn-primary btn-block" type="submit" value="Change" id="btn" name="btn"/>

                          

                      </form>
                    </div>
              </div>
          </div>
      </div>
   

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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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

<!-- Mirrored from lineartheme.com/themes/becharity/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:13:21 GMT -->
</html>
