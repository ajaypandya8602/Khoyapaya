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
                  <?php
                    $name=$_GET['img'];
                    $Q=mysqli_query($conn,"SELECT * FROM child_master Where Profile_Img='".$name."'");

                    while($ROW=mysqli_fetch_array($Q))
                    {

                         $cid=$ROW['C_id'];
                         $Name=$ROW['Name'];
                         $DOB=$ROW['DOB'];
                         $Age=$ROW['Age'];
                         $About_Child=$ROW['About_Child'];
                         $Profile_Img=$ROW['Profile_Img'];
                   }
                      
                ?>
               <!--  <div class="col-sm-12 col-sm-offset-1 "> -->
                   <div class="col-sm-6 col-md-4 col-md-offset-1 contact-main" >
                         <img src="<?php echo $Profile_Img?>"   >
                    </div>
                   <div class="col-sm-6 col-md-6 contact-main">
                        <?php
                         echo "<h3> Name : $Name </h3>";
                         echo "<h3> Date Of Birth : $DOB </h3>";
                         echo "<h3> Age Of Child : $Age </h3>";
                         echo "<h3> About Child: $About_Child </h3>";  
                         ?>
                         <form action="adopt_process.php" method="POST">
                         <input type="hidden" value="<?php echo $cid;?>" name="cid">
                         <?php 
                         if($_SESSION['user']==1)
                         {?>
                            <input class="btn btn-lg btn-primary" type="submit" value="Adopt now">   
                         <?php }?>
                         
                         <!-- <input class="btn btn-lg btn-primary" type="submit" value="Adopt now"> -->
                         </form>
                    </div>
                  
                </div>

        </div>

    </div>

</body>

<!-- Mirrored from lineartheme.com/themes/becharity/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:18:15 GMT -->
</html>
<?php
    include_once('footer.php');
?>
