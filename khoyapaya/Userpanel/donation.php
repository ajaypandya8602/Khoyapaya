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
                    <li class="active">Page Title</li>
                </ol>
                <h1 class="page-title">Page Title</h1>
            </div>
        </div>
    </div>

    <!-- Donation Section -->
    <div class="donation-section pd-top-100 pd-bottom-50">
        <div class="container">
            <div class="row">
                <div class="donate-cause-list col-sm-6">
                    <div class="related-cause equal-height-wrap">
                        <div class="related-cause-img equal-height-inner">
                            <img src="images/donation/1.jpg" alt="donate image">
                        </div>
                        <div class="related-cause-content equal-height-inner">
                            <h4 class="related-cause-title">Contrary to popular text roots in a piece.</h4>
                            <div class="fund-progress">
                                <div class="media">
                                    <div class="media-left">69%</div>
                                    <div class="media-body">
                                        <div class="x-fundline">
                                            <div class="x-fill" style="width: 69%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn mg-top-20" href="#">Detail</a>
                        </div>
                    </div>
                    <div class="related-cause equal-height-wrap">
                        <div class="related-cause-img equal-height-inner">
                            <img src="images/donation/2.jpg" alt="donate image">
                        </div>
                        <div class="related-cause-content equal-height-inner">
                            <h4 class="related-cause-title">Standard chunk of used since the 1500s below for interested.</h4>
                            <div class="fund-progress">
                                <div class="media">
                                    <div class="media-left">46%</div>
                                    <div class="media-body">
                                        <div class="x-fundline">
                                            <div class="x-fill" style="width: 46%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn mg-top-20" href="#">Detail</a>
                        </div>
                    </div>
                    <div class="related-cause equal-height-wrap">
                        <div class="related-cause-img equal-height-inner">
                            <img src="images/donation/3.jpg" alt="donate image">
                        </div>
                        <div class="related-cause-content equal-height-inner">
                            <h4 class="related-cause-title">Standard chunk of used since the 1500s below for interested.</h4>
                            <div class="fund-progress">
                                <div class="media">
                                    <div class="media-left">75%</div>
                                    <div class="media-body">
                                        <div class="x-fundline">
                                            <div class="x-fill" style="width: 75%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn mg-top-20" href="#">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mg-bottom-50">
                    <div class="billing-address">
                        <h3 class="address-header">Donate using card</h3>
                        <form id="contact-form" class="contact-address" action="donation_process.php" method="POST">
                            
                            <p class="address-title">Your details</p>
                            <input id="name" class="input" type="text" placeholder="First name" name="fname" />
                            <input id="email" class="input no-btop" type="text" placeholder="Last name" name="lname" />
                            <input id="email" class="input no-btop" type="text" placeholder="Email address"  name="email" />
                            <input id="email" class="input no-btop" type="tel" placeholder="Phone number" name="no" />
                           
                            <p class="address-title">Payment details</p>
                            <input id="name" class="input" type="number" placeholder="Payment Amount" name="Amount" />
        
                            <p class="address-title">Card details</p>
                            <input id="name" class="input" type="text" placeholder="Card number" / name="cardno">
                            <input id="name" class="input no-btop" type="text" name="dm" placeholder="MM/YY" onfocus="(this.type='month')" max="2100-12" >
                             <input id="name no-btop" class="input no-btop" type="password" placeholder="CVV" name="cvv" />
                            <!-- <div class="address-check">
                                <input type="checkbox" class="input" id="Agree" />
                                <label class="address-title" for="Agree">Terms & Condition</label>
                            </div> -->
                            <input class="btn" type="submit" value="Donate Now" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- Mirrored from lineartheme.com/themes/becharity/donation.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:14:11 GMT -->
</html>
<?php
    include_once('footer.php');
?>
