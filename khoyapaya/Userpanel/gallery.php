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
                    <li class="active">Gallery</li>
                </ol>
                <h1 class="page-title">Gallery</h1>
            </div>
        </div>
    </div>

    <!-- Gallery -->
    <div class="gallery-section pd-top-100 pd-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="isotope-filters gallery-isotope-btn">
                        <button class="btn active" data-filter="*">ALL</button>
                        <button class="btn" data-filter=".cat-1">FINACIAL</button>
                        <button class="btn" data-filter=".cat-2">DEVELOPMENT</button>
                        <button class="btn" data-filter=".cat-3">PROGRAM</button>
                        <button class="btn" data-filter=".cat-4">LOGISTIC</button>
                    </div>
                </div>
                <div class="gallery-isotope" style="clear: left;">
                    <div class="col-sm-6 item cat-1">
                        <div class="thumb">
                            <a data-effect="mfp-zoom-in" href="images/gallery/1.jpg"><img src="images/gallery/1.jpg" alt="gallery"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 item cat-1 cat-2">
                        <div class="thumb">
                            <a data-effect="mfp-zoom-in" href="images/gallery/2.jpg"><img src="images/gallery/2.jpg" alt="gallery"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 item cat-1 cat-2">
                        <div class="thumb">
                            <a data-effect="mfp-zoom-in" href="images/gallery/3.jpg"><img src="images/gallery/3.jpg" alt="gallery"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 item cat-1 cat-2 cat-3 cat-4">
                        <div class="thumb">
                            <a data-effect="mfp-zoom-in" href="images/gallery/4.jpg"><img src="images/gallery/4.jpg" alt="gallery"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 item cat-1 cat-2">
                        <div class="thumb">
                            <a data-effect="mfp-zoom-in" href="images/gallery/5.jpg"><img src="images/gallery/5.jpg" alt="gallery"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 item cat-1 cat-2 cat-3 cat-4">
                        <div class="thumb">
                            <a data-effect="mfp-zoom-in" href="images/gallery/6.jpg"><img src="images/gallery/6.jpg" alt="gallery"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 item cat-1 cat-2">
                        <div class="thumb">
                            <a data-effect="mfp-zoom-in" href="images/gallery/7.jpg"><img src="images/gallery/7.jpg" alt="gallery"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 item cat-1 cat-2 cat-3 cat-4">
                        <div class="thumb">
                            <a data-effect="mfp-zoom-in" href="images/gallery/8.jpg"><img src="images/gallery/8.jpg" alt="gallery"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Mirrored from lineartheme.com/themes/becharity/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:16:09 GMT -->
</html>
<?php
    include_once('footer.php');
?>
