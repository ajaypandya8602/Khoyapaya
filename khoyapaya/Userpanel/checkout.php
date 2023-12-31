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
                    <li class="active">Checkout</li>
                </ol>
                <h1 class="page-title">Checkout</h1>
            </div>
        </div>
    </div>

    <!-- Checkout section -->
    <div class="checkout-section pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="billing-address">
                        <h3 class="address-header">Billing address</h3>
                        <form id="contact-form" class="contact-address" action="#" method="POST">
                            <h5 class="address-title">Your details</h5>
                            <input class="input" type="text" placeholder="First name" />
                            <input class="input no-btop" type="text" placeholder="Last name" />
                            <input class="input no-btop" type="text" placeholder="Company name (optional)" />
                            <input class="input no-btop" type="text" placeholder="Email address" />
                            <input class="input no-btop" type="text" placeholder="Phone number" />
                            <h5 class="address-title">Country</h5>
                            <select class="country">
                                <option>select you country</option>
                                <option>USA</option>
                                <option>England</option>
                                <option>Franch</option>
                                <option>Germany</option>
                            </select>
                            <h5 class="address-title">Address</h5>
                            <input class="input" type="text" placeholder="Street address" />
                            <input class="input no-btop" type="text" placeholder="Apartment, Suite, Unit, etc (optional)" />
                            <h5 class="address-title">Town / City</h5>
                            <input class="input" type="text" placeholder="Street address" />
                            <h5 class="address-title">State / County</h5>
                            <input class="input" type="text" placeholder="Street address" />
                            <h5 class="address-title">Postcode / Zip</h5>
                            <input class="input" type="text" placeholder="Street address" />
                            <div class="address-check">
                                <input id="account-check" class="input" type="checkbox" />
                                <label class="address-title" for="account-check">Check payment</label>
                            </div>
                            <p>Contrary to popular belief, lorem ipsum is not simply random text. for more information</p>
                            <input class="input" type="password" placeholder="password" />
                            <h5 class="address-title">Additional information</h5>
                            <textarea class="input" placeholder="Note about your order, e.g. special notes for delivery." rows="7" cols="30"></textarea>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="order-table">
                        <h3 class="table-header">Your order</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Color pot</td>
                                        <td>2</td>
                                        <td>$512.96</td>
                                    </tr>
                                    <tr>
                                        <td>Extremes camera lens-Black</td>
                                        <td>3</td>
                                        <td>$240.00</td>
                                    </tr>
                                    <tr>
                                        <td>Richman dimond watch</td>
                                        <td>1</td>
                                        <td>$81.58</td>
                                    </tr>
                                    <tr class="sub-total">
                                        <td>Sub total</td>
                                        <td></td>
                                        <td>$2510.0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="total">
                            <span>Total</span>
                            <span class="right">$2510.0</span>
                        </div>
                        <div class="payment">
                            <input id="checkbox" class="input" type="radio" />
                            <label class="payment-title" for="checkbox">Check payment</label>
                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                            <input id="payment-check" class="input" type="radio" />
                            <label class="payment-title" for="payment-check">Check payment</label>
                            <span class="payment-name"><a href="#">What is paypal?</a></span>
                            <div class="batton">
                                <a class="btn" href="#">place order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- Mirrored from lineartheme.com/themes/becharity/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:18:15 GMT -->
</html>
<?php
    include_once('footer.php');
?>
