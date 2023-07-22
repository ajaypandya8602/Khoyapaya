<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from lineartheme.com/themes/becharity/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:11:08 GMT -->
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Khoyapaya-a child adoption website</title>

    <!--Fav and touch icons-->
    <link rel="icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <!--Common Styles Plugins-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

    <!--Google fonts-->
   <!--  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> -->
    <!--Custom Style-->
    <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="space.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>    
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader-inner">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <!-- header -->
    <div id="header--fixed" class="header">
        <div class="nav-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg-4">
                        <div class="phone">
                            <i class="fa fa-volume-control-phone"></i>+91 7202070296
                        </div>
                        <div class="email">
                            <i class="fa fa-envelope"></i>khoyapaya5340@gmail.com
                        </div>
                <!--         <a href="donation.php" class="btn btn-red">Donate</a> -->
                    </div>
                    <!-- <div class="hidden-xs hidden-sm col-md-3 col-lg-4 ">
                        <form class="top-search" action="#">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-addon">
                                        <input type="submit" value="Search">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> -->
                    <div class="col-sm-6 col-md-4 col-lg-4 pull-right" id="imgicon">
                        <!-- <div class="social">
                            <a class="icon-facebook" href="#"><i class="fa fa-facebook-square"></i></a>
                            <a class="icon-twitter" href="#"><i class="fa fa-twitter-square"></i></a>
                            <a class="icon-pinterest" href="#"><i class="fa fa-pinterest-square"></i></a>
                            <a class="icon-google-plus" href="#"><i class="fa fa-google-plus-square"></i></a>
                        </div> -->
                        <?php
                       
                            if(isset($_SESSION['khoyapaya_login_user'],$_SESSION['user']))
                            {

                                $user=$_SESSION['user'];
                                $email=$_SESSION['khoyapaya_login_user'];
                                $result = mysqli_query($conn,"SELECT Profile_Img FROM registration WHERE Email_Id = '$email'");

                                    while($ROW=mysqli_fetch_array($result))
                                    {
                                    // echo '<a class="join-top" href="user_profile.php">JOIN</a>';     
                                    echo '<a class="join-top" href="user_profile.php"><img src="'.$ROW['Profile_Img'].'" class="profile"></a>';
                                    }
                            }
                            else
                            {
                                echo '<a class="join-top" href="login.php"><i class="fa fa-user-circle"></i>JOIN</a>';
                            }
                        ?>
                       <!--  <div class="dropdown currency-switchr">
                            <button class="currency-btn" id="currency" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe"></i>URO
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="currency">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">AUD</a></li>
                            </ul>
                        </div>
                        <div class="dropdown language-switchr">
                            <button class="language-btn" id="language" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe"></i>ENG
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="language">
                                <li><a href="#">SPN</a></li>
                                <li><a href="#">GER</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div id="main-nav" class="main-nav">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index-2.php"><img class="retina" src="images/2.png" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-navbar">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="Adoption.php">Adoption</a></li>
                            <li><a href="Event3.php">Event</a></li>
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Page <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cause</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="cause.php">Cause</a></li>
                                            <li><a href="cause-details.php">Cause Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="our-team.php">Our Team</a></li>
                                            <li><a href="our-partner.php">Our Pertnar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="faq.php">FAQ</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="404.php">404 Page</a></li>
                                    <li><a href="element.php">Element</a></li>
                                </ul>
                            </li>
                             --><!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event <span class="caret"></span></a> -->
                                <!-- <ul class="dropdown-menu">
                                    <li><a href="event.php">Event</a></li>
                                    <li><a href="event-details.php">Event Details</a></li>
                                </ul> -->
                            </li>
                         <!--    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="blog-2.php">Blog 2</a></li>
                                    <li><a href="single-blog.php">Single Blog</a></li>
                                    <li><a href="search-archive.php">Search Archive</a></li>
                                </ul>
                            </li> -->
                           <!--  <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="product.php">Product</a></li>
                                    <li><a href="cart.php">Cart</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                </ul>
                            </li> -->
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="Volunteer.php">Volunteer</a></li>
                            <li><a href="donation.php">Donation</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right hidden-xs">
                            <li class="top-cart">
                                <i class="fa fa-shopping-bag"></i>
                                <a href="cart.php" class="top-amount">$0.00</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    </body>
</html>
