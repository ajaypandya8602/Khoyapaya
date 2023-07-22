<?php
  require_once('config.php');
    include_once('header.php');
    $count=0;

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
        $sel_query=mysqli_query($conn,"SELECT event_image_master.E_id,Ename,About_Event,Date,IsActive, Venue, GROUP_CONCAT(Image) FROM event_master INNER join event_image_master ON event_master.E_id=event_image_master.E_id  GROUP by event_master.E_id");

        /*SELECT event_image_master.E_id,Ename,About_Event,Date,IsActive, Venue, GROUP_CONCAT(Image) FROM event_master INNER join event_image_master ON event_master.E_id=event_image_master.E_id GROUP by event_master.E_id */

        /*SELECT event_image_master.E_id,Ename,About_Event,Date,IsActive, Venue, GROUP_CONCAT(Image) FROM event_master INNER join event_image_master ON event_master.E_id=event_image_master.E_id WHERE event_master.E_id LIKE 1  GROUP by event_master.E_id*/
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
                
            
    ?>
     

    <!-- Event section -->
    <div class="event-section mg-bottom-100">
        <div class="container-fluid no-pad">
            <?php if($count%2==0){?>
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

   
  </div>
</div>

                <div class="col-sm-6 no-pad bg equal-height-inner">
                    <div class="slide-detels">
                        <div class="eventcount" id="count1"></div>
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
            <?php }
            else if($count%2==1){
                ?>


           

            <div class="row event-carousel equal-height-wrap">
                <div class="col-sm-6 col-sm-push-6 no-pad equal-height-inner">
                    <!-- <img src="images/event/event-2.jpg" alt="carousel"> -->
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
    
  </div>
</div>
                </div>
                <div class="col-sm-6 col-sm-pull-6 no-pad bg equal-height-inner">
                    <div class="slide-detels slide-details-right">
                        <div class="eventcount" id="count2"></div>
                         <h3 class="slide-title"> <?php echo $Ename; ?></h3>
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

 <?php   }
          $count++;
        }  ?>

        </div>
    </div>

</body>

<!-- Mirrored from lineartheme.com/themes/becharity/event.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:16:14 GMT -->
</html>
<?php
    include_once('footer.php');
?>