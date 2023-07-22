<?php
    require_once('config.php');
    include_once('header.php');
?>
<!DOCTYPE html>
    <html>
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
               
                <div class="col-sm-6 col-sm-offset-3 contact-main">
                    <h3 class="form-title">Feedback form</h3>
                    <form class="contact-form" action="Contact_Process.php" method="POST">
                        <label class="contact-title" for="Subject">How do you rate your overall experience ?</label><br>
                         <input type="radio" value="Good" name="rate" checked="true">Good<br>
                        <input type="radio" value="Bad" name="rate">Bad <br>
                         <input type="radio" value="Average" name="rate">Average<br>
                        <label class="contact-title" for="Feedback  ">Feedback</label>
                        <textarea id="message" name="Message" class="input-message" rows="7" cols="30" placeholder="Type feedback here........."></textarea>
                       <!-- 
                        <label class="contact-title" for="email">Email address</label>
                        <input id="email" name="email" class="input" type="text" placeholder="example@gmail.com" />
                        <label class="contact-title" for="Website">Website</label>
                        <input id="Website" name="website" class="input" type="text" placeholder="http//:www.example.com" /> -->
                        <input class="btn" type="submit" value="SUBMIT" />
                    </form>
                    <p class="card-text text">oidsovvndsisdnsvoiisnisv nidvsvsjnvds jkvksjnsvkjsndjnskjnvsnsjdvnskjnvdjdjksjkjkskjsk svjkjvsjksjkjsvjskksvvsk                          </p>
               

                </div>
                
            </div>
        </div>
    </div>

    <!-- Faq page link -->
    <!-- <div class="faq-read">
        <p>If any kind of query visit <a href="#">FAQ</a></p>
    </div> -->
</body>

<!-- Mirrored from lineartheme.com/themes/becharity/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:18:15 GMT -->
</html>
<?php
    include_once('footer.php');
?>
