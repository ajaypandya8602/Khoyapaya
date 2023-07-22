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
                    <li class="active">Shopping Cart</li>
                </ol>
                <h1 class="page-title">Shopping Cart</h1>
            </div>
        </div>
    </div>

    <!-- Cart section -->
    <div class="cart-page pd-top-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="cart-item">
                        <div class="cart-thumbnail">
                            <img src="images/shop/cart-1.jpg" alt="cart image">
                        </div>
                        <div class="cart-product">
                            <h4 class="product-name">Color Pot</h4>
                            <div class="product-price">
                                <span>Price</span>
                                <span>$521.00</span>
                            </div>
                            <div class="quantity">
                                <span>Quantity</span>
                                <input value="1" title="Qty" type="number">
                            </div>
                            <div class="product-subtotal">
                                <span>Total</span>
                                <span>$1042.00</span>
                            </div>
                            <div class="product-remove"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-thumbnail">
                            <img src="images/shop/cart-2.jpg" alt="cart image">
                        </div>
                        <div class="cart-product">
                            <h4 class="product-name">Extremes camera lens-Black</h4>
                            <div class="product-price">
                                <span>Price</span>
                                <span>$521.00</span>
                            </div>
                            <div class="quantity">
                                <span>Quantity</span>
                                <input value="1" title="Qty" type="number">
                            </div>
                            <div class="product-subtotal">
                                <span>Total</span>
                                <span>$1042.00</span>
                            </div>
                            <div class="product-remove"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-thumbnail">
                            <img src="images/shop/cart-3.jpg" alt="cart image">
                        </div>
                        <div class="cart-product">
                            <h4 class="product-name">Riceman dimond watch</h4>
                            <div class="product-price">
                                <span>Price</span>
                                <span>$521.00</span>
                            </div>
                            <div class="quantity">
                                <span>Quantity</span>
                                <input value="1" title="Qty" type="number">
                            </div>
                            <div class="product-subtotal">
                                <span>Total</span>
                                <span>$1042.00</span>
                            </div>
                            <div class="product-remove"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div id="cart-sticky" class="col-sm-6">
                    <div id="cart-box" class="cart-totals">
                        <h3 class="cart-total-title">Card totals</h3>
                        <div class="table-responsive cart-total-table">
                            <table class="table">
                                <tr>
                                    <td>Sub total</td>
                                    <td>$2510.00</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>$2510.00</td>
                                </tr>
                            </table>
                        </div>
                        <a class="btn" href="#">Proceed to checkout <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients -->
    <div class="bg-2 clients pd-top-80 pd-bottom-80" data-animation="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Our Client <i class="fa fa-user"></i></h2>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                    <img src="images/partner/1.png" alt="client">
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                    <img src="images/partner/2.png" alt="client">
                    </div>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                    <img src="images/partner/3.png" alt="client">
                    </div>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                    <img src="images/partner/4.png" alt="client">
                    </div>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                    <img src="images/partner/5.png" alt="client">
                    </div>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                    <img src="images/partner/1.png" alt="client">
                </div>
                <div class="col-sm-12 mg-top-30 text-center">
                    Want to know more about our client <a href="our-partner.php">Check Them All</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to action -->
    <div class="call-to-action pd-top-80 pd-bottom-100">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Want to be a Volentaree?</h2>
                    <p>Join With us fo Have any followers yet</p>
                    <a class="btn btn-red mg-top-30" href="#">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Mirrored from lineartheme.com/themes/becharity/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:18:15 GMT -->
</html>
<?php
    include_once('footer.php');
?>
