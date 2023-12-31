<?php
    require_once('config.php');
    include_once('header.php');
?>
<!DOCTYPE html>
<html>
<body>    <!-- Home Slider -->
    <div class="home-slider">
        <div class="item">
            <div class="slider-image">
                <img alt="slide" src="images/slider/slider-1.jpg">
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>“Children make your life important.”</h2>
                            <p>“ Since you get more joy out of giving joy to others, you should put a good deal of thought into the happiness that you are able to give.”</p>
                            <a class="btn btn-red" href="#">Donet NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-image">
                <img alt="slide" src="images/slider/slider-2.jpg">
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Contrary to popular rorem is simply</h2>
                            <p>Contrary to popular belief, rorem is not simply random text. Contrary to popular belief, rorem is not simply random text.</p>
                            <a class="btn btn-red" href="#">Donet NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-image">
                <img alt="slide" src="images/slider/slider-4.jpg">
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Contrary to popular rorem is simply</h2>
                            <p>Contrary to popular belief, rorem is not simply random text. Contrary to popular belief, rorem is not simply random text.</p>
                            <a class="btn btn-red" href="#">Donet NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fun Fact -->
    <div class="fun-fact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 single-fact">
                    <div class="facet-overlay"></div>
                    <div class="fact-wrap">
                        <div class="fact-icon"><i class="fa fa-plug" aria-hidden="true"></i></div>
                        <div class="fact-details">
                            <div class="fact-count">78,520</div>
                            <div class="fact-info">Volunteer with us</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 single-fact">
                    <div class="facet-overlay"></div>
                    <div class="fact-wrap">
                        <div class="fact-icon"><i class="fa fa-yelp" aria-hidden="true"></i></div>
                        <div class="fact-details">
                            <div class="fact-count">9,821</div>
                            <div class="fact-info">Donors trust us</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 single-fact">
                    <div class="facet-overlay"></div>
                    <div class="fact-wrap">
                        <div class="fact-icon"><i class="fa fa-forumbee" aria-hidden="true"></i></div>
                        <div class="fact-details">
                            <div class="fact-count">25,003</div>
                            <div class="fact-info">Causes are completed</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 single-fact">
                    <div class="facet-overlay"></div>
                    <div class="fact-wrap">
                        <div class="fact-icon"><i class="fa fa-heartbeat" aria-hidden="true"></i></div>
                        <div class="fact-details">
                            <div class="fact-count">103,210</div>
                            <div class="fact-info">Peoples are helped</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->
    <!-- <div class="intro pd-top-100 pd-bottom-100 text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1 class="intro-title">Welcome to <span>beCharity</span></h1>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Recent Cause -->
    <div class="recent-cause pd-top-80 pd-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Recent cause <i class="fa fa-flag"></i></h2>
                </div>
                <div class="col-sm-4 recent-cause-list">
                    <img alt="cause" src="images/causes/9.jpg">
                    <div class="recent-cause-summary">
                        <div class="recent-cause-content">
                            <h3 class="recent-cause-title"><a href="#">Help Children to make a better life</a></h3>
                            <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                            <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                            <a  href="donation.php" class="btn mg-top-40">Donate</a>
                        </div>
                        <div class="recent-cause-funding">
                            <div class="fund-line">
                                <div class="fill" style="height: 56%;"></div>
                            </div>
                            <div class="fund-percent">56%</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 recent-cause-list">
                    <img alt="cause" src="images/causes/8.jpg">
                    <div class="recent-cause-summary">
                        <div class="recent-cause-content">
                            <h3 class="recent-cause-title"><a href="#">Children Needs More Foods and Water</a></h3>
                            <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                            <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                            <a href="donation.php" class="btn mg-top-40">Donate</a>
                        </div>
                        <div class="recent-cause-funding">
                            <div class="fund-line">
                                <div class="fill" style="height: 56%;"></div>
                            </div>
                            <div class="fund-percent">56%</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 recent-cause-list">
                    <img alt="cause" src="images/causes/7.jpg">
                    <div class="recent-cause-summary">
                        <div class="recent-cause-content">
                            <h3 class="recent-cause-title"><a href="#"> Nation to engage in the fight against hunger</a></h3>
                            <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                            <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                            <a href="donation.php" class="btn mg-top-40">Donate</a>
                        </div>
                        <div class="recent-cause-funding">
                            <div class="fund-line">
                                <div class="fill" style="height: 56%;"></div>
                            </div>
                            <div class="fund-percent">56%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Event -->
    <!-- <div class="event-section pd-top-80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Upcoming Events <i class="fa fa-star"></i></h2>
                </div>
                <div id="event-carousel" class="event-carousel owl-carousel" style="clear: left;">
                    <div class="item equal-height-wrap">
                        <div class="col-sm-6 no-pad equal-height-inner">
                            <img src="images/event/event-1.jpg" alt="carousel">
                        </div>
                        <div class="col-sm-6 no-pad bg equal-height-inner">
                            <div class="slide-detels">
                                <div class="eventcount" id="count1"></div>
                                <h3 class="slide-title">Supporting childhood nutrition programs </h3>
                                <p class="sort-content">Diam graeco . Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.Diam graeco sententiae cu vel, ad esse purto ubique vim. Mea in semper patrioque interesset. Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.</p>
                                <div class="slide-meta">
                                    <span><i class="fa fa-calendar-o"></i>21 November, 2016</span>
                                    <span><i class="fa fa-clock-o"></i>10 : 30am</span>
                                </div>
                                <div class="slide-meta">
                                    <span><i class="fa fa-font-awesome"></i>Convetion Hall, Las vegus, USA</span>
                                </div>
                                <div class="speaker">
                                    <div class="speaker-text">
                                        <i class="fa fa-bullhorn"></i>Speakers
                                    </div>
                                    <div class="speaker-thumb">
                                        <img src="images/event/speaker/1.jpg" alt="speaker">
                                        <img src="images/event/speaker/2.jpg" alt="speaker">
                                        <img src="images/event/speaker/3.jpg" alt="speaker">
                                    </div>
                                </div>
                                <div class="join-list">
                                    <a class="btn" href="volunteerphp">JOIN NOW</a>
                                    <div class="social-icon">
                                        <a href="#"><i class="fa fa-facebook-official"></i></a>
                                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#"><i class="fa fa-google-plus-square"></i></a>
                                        <a href="#"><i class="fa fa-share-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item equal-height-wrap">
                        <div class="col-sm-6 no-pad equal-height-inner">
                            <img src="images/event/event-2.jpg" alt="carousel">
                        </div>
                        <div class="col-sm-6 no-pad bg equal-height-inner">
                            <div class="slide-detels">
                                <div class="eventcount" id="count2"></div>
                                <h3 class="slide-title">Nusquam adipisci hendrerit adcum dicea.</h3>
                                <p class="sort-content">Diam graeco . Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.Diam graeco sententiae cu vel, ad esse purto ubique vim. Mea in semper patrioque interesset. Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.</p>
                                <div class="slide-meta">
                                    <span><i class="fa fa-calendar-o"></i>21 November, 2016</span>
                                    <span><i class="fa fa-clock-o"></i>10 : 30am</span>
                                </div>
                                <div class="slide-meta">
                                    <span><i class="fa fa-font-awesome"></i>Convetion Hall, Las vegus, USA</span>
                                </div>
                                <div class="speaker">
                                    <div class="speaker-text">
                                        <i class="fa fa-bullhorn"></i>Speakers
                                    </div>
                                    <div class="speaker-thumb">
                                        <img src="images/event/speaker/4.jpg" alt="speaker">
                                        <img src="images/event/speaker/5.jpg" alt="speaker">
                                        <img src="images/event/speaker/6.jpg" alt="speaker">
                                    </div>
                                </div>
                                <div class="join-list">
                                    <a class="btn" href="#">JOIN NOW</a>
                                    <div class="social-icon">
                                        <a href="#"><i class="fa fa-facebook-official"></i></a>
                                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#"><i class="fa fa-google-plus-square"></i></a>
                                        <a href="#"><i class="fa fa-share-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->
    <!-- Blog -->

    <div id="blog" class="blog-section pd-top-80 pd-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Latest Blogs <i class="fa fa-file-text-o"></i></h2>
                </div>
                <div class="col-sm-4">
                    <div class="blog-single">
                        <div class="thumb">
                            <img alt="blog" src="images/blog/1.jpg">
                        </div>
                        <div class="post-desk">
                            <div class="post-meta">
                                <span class="meta-left"><i class="fa fa-tags"></i><a href="#">Children</a>, <a href="#">Sports</a>, <a href="#">Education</a></span>
                                <span class="meta-right"><i class="fa fa-comments-o"></i>16</span>
                            </div>
                            <h3 class="title"><a href="#">Get doctor idea festival of the 2017</a></h3>
                            <p class="category-meta"><i class="fa fa-folder-open" aria-hidden="true"></i><a href="#">Sports</a>, <a href="#">education</a>, <a href="#">Freedom</a></p>
                        </div>
                        <div class="post-author">
                            <div class="thumb">
                                <img src="images/author/1.jpg" alt="author">
                            </div>
                            <div class="name">
                                Johan Doe
                            </div>
                        </div>
                    </div>
                    <!-- /.end blog single -->
                </div>
                <div class="col-sm-4">
                    <div class="blog-single">
                        <div class="thumb">
                            <img alt="blog" src="images/blog/2.jpg">
                        </div>
                        <div class="post-desk">
                            <div class="post-meta">
                                <span class="meta-left"><i class="fa fa-tags"></i><a href="#">Children</a>, <a href="#">Sports</a>, <a href="#">Education</a></span>
                                <span class="meta-right"><i class="fa fa-comments-o"></i>16</span>
                            </div>
                            <h3 class="title"><a href="#">Build school for poor child rens life</a></h3>
                            <p class="category-meta"><i class="fa fa-folder-open" aria-hidden="true"></i><a href="#">Sports</a>, <a href="#">education</a>, <a href="#">Freedom</a></p>
                        </div>
                        <div class="post-author">
                            <div class="thumb">
                                <img src="images/author/2.jpg" alt="author">
                            </div>
                            <div class="name">
                                Adam Milne
                            </div>
                        </div>
                    </div>
                    <!-- /.end blog single -->
                </div>
                <div class="col-sm-4">
                    <div class="blog-single">
                        <div class="thumb">
                            <img alt="blog" src="images/blog/3.jpg">
                        </div>
                        <div class="post-desk">
                            <div class="post-meta">
                                <span class="meta-left"><i class="fa fa-tags"></i><a href="#">Children</a>, <a href="#">Sports</a>, <a href="#">Education</a></span>
                                <span class="meta-right"><i class="fa fa-comments-o"></i>16</span>
                            </div>
                            <h3 class="title"><a href="#">Help promote education in the world</a></h3>
                            <p class="category-meta"><i class="fa fa-folder-open" aria-hidden="true"></i><a href="#">Sports</a>, <a href="#">education</a>, <a href="#">Freedom</a></p>
                        </div>
                        <div class="post-author">
                            <div class="thumb">
                                <img src="images/author/3.jpg" alt="author">
                            </div>
                            <div class="name">Jim Carry</div>
                        </div>
                    </div>
                    <!-- /.end blog single -->
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery -->
    <div class="home-gallery pd-top-80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Photos</h2>
                </div>
                <div class="col-sm-12 total-photo">
                    <div class="photo-carousel">
                        <div class="item">
                            <img alt="gallery" src="images/gallery/index-gellary-1%402x.jpg">
                        </div>
                        <div class="item">
                            <img alt="gallery" src="images/gallery/index-gellary-2%402x.jpg">
                        </div>
                        <div class="item">
                            <img alt="gallery" src="images/gallery/index-gellary-3%402x.jpg">
                        </div>
                        <div class="item">
                            <img alt="gallery" src="images/gallery/index-gellary-4%402x.jpg">
                        </div>
                        <div class="item">
                            <img alt="gallery" src="images/gallery/index-gellary-5%402x.jpg">
                        </div>
                        <div class="item">
                            <img alt="gallery" src="images/gallery/index-gellary-6%402x.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients -->
    <div class="clients pd-top-80 pd-bottom-85" data-animation="fadeIn">
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
                    <a class="btn btn-red mg-top-30" href="volunteer.php">Join Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <div id="testimonials" class="testimonial-section pd-top-80 pd-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Testimonials <i class="fa fa-heart"></i></h2>
                </div>
                <div class="col-sm-12 testimonial-carousel owl-carousel">
                    <div class="item">
                        <h3 class="tm-title">Great job I've ever had</h3>
                        <p>
                            Contrary to popular belief, rorem ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        </p>
                        <img src="images/reviewer/1.jpg" alt="client">
                        <div class="testimonial-client">John Doe <span>Assistant Manager, GSM Group</span></div>
                    </div>
                    <div class="item">
                        <h3 class="tm-title">First true generator on the Interne</h3>
                        <p>
                            Standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <img src="images/reviewer/2.jpg" alt="client">
                        <div class="testimonial-client">John Doe <span>Assistant Manager, GSM Group</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newletter -->
    <div class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-3">
                            <h2 class="title">Newsletter</h2>
                            <p>Submit email to subscribe for newsletter</p>
                        </div>
                        <div class="col-sm-9">
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="exampleInputAmount">
                                        <div class="input-group-addon search-button">
                                            <button class="btn btn-red" type="submit">SUBSCRIBE</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    </html>
<?php
    include_once('footer.php');
?>