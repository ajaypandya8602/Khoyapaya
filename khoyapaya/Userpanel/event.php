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
                    <li class="active">Upcomming Event</li>
                </ol>
                <h1 class="page-title">Upcomming Event</h1>
            </div>
        </div>
    </div>
      <?php
                $sel_query=mysqli_query($conn,"SELECT E_id,Ename,About_Event,Date,IsActive,Venue FROM event_master where E_id like(1)");
                    while($row=mysqli_fetch_array($sel_query))
                    {

                        $E_id=$ROW['E_id'];
                        $Ename=$ROW['Ename'];
                        $Venue=$ROW['Venue'];
                        $About_Event=$ROW['About_Event'];
                        $Date=$ROW['Date'];
                        $IsActive=$ROW['IsActive'];

                         
                    } 
                    $sel_query2=mysqli_query($conn,"SELECT Image FROM event_image_master where E_id like($E_id)");
                    while($ROW=mysqli_fetch_array($sel_query2))
                    {
                     $images[]=$ROW['Image'];
                        $c=count($images);
                        }
            ?>
                
    <!-- Event section -->
   
    <div class="event-section mg-bottom-100">
        <div class="container-fluid no-pad">
            <div class="row event-carousel equal-height-wrap">
               <div>
  <div id="myCarousel" class="carousel slide col-sm-6 no-pad equal-height-inner" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
         <?php for ($i=0; $i<$c ; $i++){ ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li><?php } ?>
      <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

     <?php for ($i=0; $i <$c ; $i++){ if ($i==0)
     {?> <div class="item active">
        <img src="img_all/<?php echo $images[$i];?>" style="width:100%;">
      </div> <?php }else{?>
        <div class="item">
        <img src="img_all/<?php echo $images[$i];?>" style="width:100%;">
      </div>
       
      <?php } } ?>

      <!-- 
    
      <div class="item">
        <img src="img_all/3.jpg" alt="New york" style="width:100%;">
      </div>
       <div class="item">
        <img src="img_all/4.jpg" alt="New york" style="width:100%;">
      </div> -->
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

      <div class="col-sm-6 no-pad bg equal-height-inner">
                    <div class="slide-detels">
                        <div class="eventcount" id="count1"></div>
                        <h3 class="slide-title"> <?php echo $Ename; ?> </h3>
                        <p class="sort-content"><?php echo $About_Event; ?></p>
                        <div class="slide-meta">
                            <span><i class="fa fa-calendar-o"></i><?php echo date('d M Y',strtotime($Date));?></span>
                            <span><i class="fa fa-clock-o"></i><?php echo date('h:i:sa',strtotime($Date));?></span>
                        </div>
                        <br>
                        <div class="slide-meta">
                            <span><i class="fa fa-font-awesome"></i><?php echo $Venue; ?></span>
                        </div>

                       <!--  <div class="speaker">
                            <div class="speaker-text">
                                <i class="fa fa-bullhorn"></i>Speakers
                            </div>
                            <div class="speaker-thumb">
                                <img src="images/event/speaker/1.jpg" alt="speaker image">
                                <img src="images/event/speaker/2.jpg" alt="speaker image">
                                <img src="images/event/speaker/3.jpg" alt="speaker image">
                            </div>
                        </div> -->
                        <!-- <div class="join-list">
                            <a class="btn" href="#">JOIN NOW</a>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-twitter-square"></i></a>
                                <a href="#"><i class="fa fa-google-plus-square"></i></a>
                                <a href="#"><i class="fa fa-share-square"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>



            
            <div class="row event-carousel equal-height-wrap">
                <div class="col-sm-6 col-sm-push-6 no-pad equal-height-inner">
                    <img src="images/event/event-2.jpg" alt="carousel">
                </div>
                <div class="col-sm-6 col-sm-pull-6 no-pad bg equal-height-inner">
                    <div class="slide-detels slide-details-right">
                        <div class="eventcount" id="count2"></div>
                        <h3 class="slide-title">Nusquam adipisci hendrerit adcum dicit ea. Nusquam adipisci </h3>
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
                                <img src="images/event/speaker/4.jpg" alt="speaker image">
                                <img src="images/event/speaker/5.jpg" alt="speaker image">
                                <img src="images/event/speaker/6.jpg" alt="speaker image">
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
            <div class="row event-carousel equal-height-wrap">
                <div class="col-sm-6 no-pad equal-height-inner">
                    <img src="images/event/event-3.jpg" alt="carousel">
                </div>
                <div class="col-sm-6 no-pad bg equal-height-inner">
                    <div class="slide-detels">
                        <div class="eventcount" id="count3"></div>
                        <h3 class="slide-title">Nusquam adipisci hendrerit adcum dicit ea. Nusquam adipisci </h3>
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
                                <img src="images/event/speaker/7.jpg" alt="speaker image">
                                <img src="images/event/speaker/8.jpg" alt="speaker image">
                                <img src="images/event/speaker/9.jpg" alt="speaker image">
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
            <div class="row mg-top-50">
                <div class="col-sm-12">
                    <nav class="page-navigation">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Mirrored from lineartheme.com/themes/becharity/event.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:16:14 GMT -->
</html>
<?php
    include_once('footer.php');
?>
