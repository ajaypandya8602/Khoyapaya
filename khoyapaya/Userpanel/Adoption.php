<?php
    require_once('config.php');
    include_once('header.php');
?>
<!DOCTYPE html>
    <html>
    <body>
    <!-- page title -->
    <div class="page-title-section">
        <div class="page-title-wrap">
            <div class="page-title-overlay"></div>
            <div class="page-title-info">
                
                <h1 class="page-title">Adoption Page</h1>
            </div>
        </div>
    </div>

    <!-- registar -->
     <div class="registar-section pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                
                    <form method="GET" action="childprofile.php">
                    <?php
                   
                      $Q=mysqli_query($conn,"SELECT Profile_Img FROM child_master");

                      while($ROW=mysqli_fetch_array($Q))
                        {
                            ?>
                        <div class="col-md-2 col-md-10 col-sm-offset-1 contact-main">
                          <a href="childprofile.php?img=<?php echo $ROW['Profile_Img'];?>"><img src="<?php echo $ROW['Profile_Img'];?>" class="img-circle"></a></div>       
                      <?php  } ?>
                      
                      </form>
                
                
            </div>
        </div>
    </div>

    <!-- footer -->
    
</body>

<!-- Mirrored from lineartheme.com/themes/becharity/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:18:15 GMT -->
</html>

<?php
    include_once('footer.php');
?>
