<?php
  require_once('config.php');
    include_once('header.php');
      $count=1;
?>
<!DOCTYPE html>
    <html>

    <body>
    <!--  Page title  -->
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
                $sel_query=mysqli_query($conn,"SELECT event_image_master.E_id,Ename,About_Event,Date,IsActive,Venue,GROUP_CONCAT(Image) FROM event_master INNER join  event_image_master ON event_master.E_id=event_image_master.E_id GROUP by event_master.E_id ");
                    while($ROW=mysqli_fetch_array($sel_query))
                    {

                        $E_id=$ROW['E_id'];
                        $Ename=$ROW['Ename'];
                        $Venue=$ROW['Venue'];
                        $About_Event=$ROW['About_Event'];
                        $Date=$ROW['Date'];
                        $IsActive=$ROW['IsActive'];
                        $img=$ROW['GROUP_CONCAT(Image)'];
                        $images=explode(',',$img);
                        $c=count($images);
                        $count=1;
                    
                    
                
            ?>
                
   <!--  Event section  -->
<?php if ($count==1){?>
    <div class="event-section mg-bottom-100">
        <div class="container-fluid no-pad">
            <div class="row event-carousel equal-height-wrap">




  <div>
      <div id="myCarousel" class="carousel slide col-sm-6 no-pad equal-height-inner" data-ride="carousel">
                        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php for ($i=0; $i<$c ; $i++){ ?>
          <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li><?php } ?>
        </ol> 
        <div class="carousel-inner">
            <?php for ($i=0; $i <$c ; $i++){ if ($i==0)
            {?> <div class="item active">
                  <img src="img_all/event/<?php echo $images[$i];?>" style="width:100%;">
                </div> <?php }else{?>
                  <div class="item">
                  <img src="img_all/event/<?php echo $images[$i];?>" style="width:100%;">
                </div>

      <?php } }?>
                              </div>

    <!--  Left and right controls  -->
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

                    </div>
                    </div>
                </div>
            </div>
            <?php $count=2; ?>
<?php } else { ?>

            
            <div class="row event-carousel equal-height-wrap">
                <div class="col-sm-6 col-sm-push-6 no-pad equal-height-inner">
                    <div>
                        

 <div>
  <div id="myCarousel" class="carousel slide col-sm-6 no-pad equal-height-inner" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
         <?php for ($i=0; $i<$c ; $i++){ ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li><?php } ?>
   
    </ol> 

    <!--  Wrapper for slides  -->
     <div class="carousel-inner">
  <?php for ($i=0; $i <$c ; $i++){ if ($i==0)
     {?> <div class="item active">
        <img src="img_all/event/<?php echo $images[$i];?>" style="width:100%;">
      </div> <?php }else{?>
        <div class="item">
        <img src="img_all/event/<?php echo $images[$i];?>" style="width:100%;">
      </div>
       

  
    </div>

    <!--  Left and right controls  -->
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
      <?php }}?>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-pull-6 no-pad bg equal-height-inner">
                    <div class="slide-detels slide-details-right">
                        <div class="eventcount" id="count2"></div>
                        <h3 class="slide-title"><?php echo $Ename; ?></h3>
                        <p class="sort-content"><?php echo $About_Event; ?></p>
                        <div class="slide-meta">
                            <span><i class="fa fa-calendar-o"></i><?php echo date('d M Y',strtotime($Date));?></span>
                            <span><i class="fa fa-clock-o"></i><?php echo date('h:i:sa',strtotime($Date));?></span>
                        </div>
                        <div class="slide-meta">
                            <span><i class="fa fa-font-awesome"></i><?php echo $Venue; ?></span>
                        </div>
                        </div>
                </div>
            </div>
        
            
                    </div>
                </div>
            </div>
           
        </div>
         <?php $count=2; ?>
        <?php } }?>
    </div>
</body>

 <!-- Mirrored from lineartheme.com/themes/becharity/event.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:16:14 GMT  -->
</html>
<?php
    include_once('footer.php');
?>
