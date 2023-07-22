<?php
    require_once('config.php');
    include_once('header.php');
?>
<!DOCTYPE html>
    <html>
    <body>
        <head>
            <script src="js/jquery-3.4.1.min.js"></script>
        </head>
    <!-- page title -->
    <div class="page-title-section">
        <div class="page-title-wrap">
            <div class="page-title-overlay"></div>
            <div class="page-title-info">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Volunteer Register Page</li>
                </ol>
                <h1 class="page-title">Volunteer Register Page</h1>
            </div>
        </div>
    </div>

    <!-- registar -->
    <div class="registar-section pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 contact-main">
                    <h3 class="form-title">Registration form</h3>
                    <form class="registar-form" action="volunteer_process.php" method="POST" enctype="multipart/form-data">              
                        <?php
                           
                            $Q_security=mysqli_query($conn,"SELECT * FROM security_question");
                        ?>
                        <label for="name">Full Name</label>
                        <input id="name" class="input" type="text" placeholder="Full name" name="fullname" />
                        <label for="email">User name / Email address</label>
                        <input id="email" class="input" type="text" placeholder="User name" name="khoyapaya_email"/>
                        <label for="Password">Password</label>
                        <input id="Password" class="input" type="Password" placeholder="Password" name="khoyapaya_pword"/>
                        <label>Mobile No.</label>
                        <input class="input" type="tel" placeholder="Mobile No" name="no" />
                        <label>Gender</label><br>
                        <input type="radio" value="Male" name="gender">Male <br>
                        <input type="radio" value="Female" name="gender">Female<br>
                        <label>Address</label>
                        <textarea class="input" name="address"></textarea>
                        <label>Security Question</label>
                        <select class="input" name="security">
                            <?php
                            while($ROW=mysqli_fetch_array($Q_security))
                            {
                                //$ROW['security_id'];
                                //$ROW['question'];
                                echo"<option value= ".$ROW['Security_Id']." >".$ROW['question']."</option>";
                            }
                            ?>
                       </select>
                        <label>Security Answer</label>
                        <input class="input" type="text" placeholder="Answer" name="ans" />
                        <label>Profile Image</label>
                        <input class="input" type="file" accept="image/*" name="pro_img" id="pro_img">
                        <!-- <div class="registar-check">
                            <input id="remember-check" class="checkbox" type="checkbox" name="reg_check" />
                            <label for="remember-check">Remember me</label>
                        </div> -->
                        <input class="btn" type="submit" value="SUBMIT" />
                        <span class="rbtn-title">Need help? go to <a href="#">FAQ</a></span>
                    </form>
                    <p class="rform-title">You are a member! <a href="#">Login</a> here.</p>
                </div>
            </div>
        </div>
    </div>
    
</body>

<!-- Mirrored from lineartheme.com/themes/becharity/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:18:15 GMT -->
</html>
<?php
    include_once('footer.php');
?>
