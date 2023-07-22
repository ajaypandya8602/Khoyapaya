<?php
    require_once('config.php');
    include_once('header.php');
?>
<!DOCTYPE html>
    <html>
    <body>
        <head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>            
<script type="text/javascript" src="register.js"></script>
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
    <!-- page title -->
    <div class="page-title-section">
        <div class="page-title-wrap">
            <div class="page-title-overlay"></div>
            <div class="page-title-info">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Register Page</li>
                </ol>
                <h1 class="page-title">Register Page</h1>
            </div>
        </div>
    </div>

    <!-- registar -->
    <div class="registar-section pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 contact-main">
                    <h3 class="form-title">Registration form</h3>
                    <form class="registar-form" id="register-form" action="register_process.php" method="POST" enctype="multipart/form-data">              
                        <?php
                            $Q_state=mysqli_query($conn,"SELECT * FROM state_master");
                        ?>

                        
                        <div id="error">

                            </div>
                        <label>Register as</label>
                        <select class="input mytest" name="user">
                        <option value= "1">Adopter</option>
                        <option value= "2">Volunteer</option>
                       </select>
                        <label for="name">Full Name</label>
                        <input id="name" class="input mytest" type="text" placeholder="Full name" id ="fullname" name="fullname" required />
                        <br><label for="email">Email address</label>
                        <input class="input mytest" type="email" placeholder="User name" id="khoyapaya_email" name="khoyapaya_email"/>
                        <script type="text/javascript">
                            
                        $('document').ready(function()
                        {    
                            $("#khoyapaya_email").keyup(function()
                            {
                                check_email();
                            });
                                function check_email()
                                {
                                        var email = $('#khoyapaya_email').val();
                                        $.ajax({
                                            url:'email_check.php',
                                            async: false,
                                            method:"POST",
                                            data:{emailid:email},                       
                                            success:function(res)
                                            {
                                                /*alert("hi"+$.trim(trim(res))+"h");*/
                                                if($.trim(res)=='1'){
                                                    $('#emaildiv').html('Email Is Taken');
                                                }
                                                else if($.trim(res)=='0'){
                                                     $('#emaildiv').html("");
                                                }
                                            }
                                        });
                                   }

                        });

                        </script>
                        <b><span id="emaildiv" class="error">
                            
                        </span></b>
                        
                        <br><label for="Password">Password</label>
                        <input id="Password" class="input mytest" type="Password" placeholder="Password" id ="khoyapaya_pword" name="khoyapaya_pword"/>                        
                       <br> <label>Mobile No.</label>
                        <input class="input mytest" type="tel" placeholder="Mobile No" id ="no" name="no" />
                       <br> <label>Gender</label><br>
                        <input type="radio" value="Male" name="gender">Male <br>
                        <input type="radio" value="Female" name="gender">Female<br>
                        <input checked="true" type="radio" value="Trans Gender" name="gender" >Trans Gender
                       <br> <label>Annual Income</label>
                        <input class="input mytest" type="number" placeholder="Annual Income" id ="income" name="income" />
                       <br> <label>Address (Flat no.,society name/ Building name)</label>
                        <textarea class="input mytest" id ="address" name="address" style="resize: none;"></textarea>
                       <br> <label>State</label>
                        <select class="input mytest" name="state" id="state">
                            <option disabled="disabled" selected="true">Select State</option>
                            <?php
                           
                                while($ROW=mysqli_fetch_array($Q_state))
                                {
                                    echo "<option value= ".$ROW['State_Id']." >".$ROW['Sname']."</option>";
                                }
                            ?>
                        </select>
                       <br> <label>City</label>
                        <select class="input mytest" id ="city" name="city" id="city">
                        <option value="">Select city</option>
                        </select>
                        <script>
                            $(document).ready(function(){
                                   
                                $('#state').on('change', function()
                                {
                                    var State_Id = $(this).val();
                                   //console.log(State_Id);
                                    if(State_Id)
                                    {
                                        $.ajax({
                                            type:'POST',
                                            url:'ajaxData.php',
                                            data:'State_Id='+State_Id,
                                            success:function(html){
                                                $('#city').html(html);

                                            }
                                        }); 
                                    }
                                });
                            });
                        </script>
                       <br> <label>Profile Image</label>
                        <input class="input mytest" type="file" accept="image/*" id ="pro_img" name="pro_img" id="pro_img">
                        <br>
                        <input class="btn" type="submit" value="Register" />
                    <p class="rform-title">You are a member! <a href="login.php">Login</a> here.</p>
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

