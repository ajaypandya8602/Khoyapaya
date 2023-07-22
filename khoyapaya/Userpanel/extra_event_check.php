
<?php
require_once('config.php');
    /*SELECT em.E_id,Ename,About_Event,Date,IsActive,Image FROM event_image_master ei,event_master em WHERE em.E_id=ei.E_id    

    SELECT Event_master.E_id,Ename,About_Event,Date,IsActive,Image FROM event_master LEFT JOIN ON event_image_master WHERE Event_master.E_id=event_image_master.E_id
*/
    $sel_query=mysqli_query($conn,"SELECT event_image_master.E_id,Ename,About_Event,Date,IsActive,Image FROM event_master INNER join  event_image_master ON event_master.E_id=event_image_master.E_id");
        while($ROW=mysqli_fetch_array($sel_query))
        {

            $E_id=$ROW['E_id'];
            $Ename=$ROW['Ename'];
            $About_Event=$ROW['About_Event'];
            $Date=$ROW['Date'];
            $IsActive=$ROW['IsActive'];
            $images[]=$ROW['Image'];
        }   
        echo $E_id;
        echo $Ename;
        echo $About_Event;
        echo $Date;
        echo $IsActive;
        foreach ($images as $k => $value)
        {
        	echo $value;
        }

?>
<?php
    include_once('header.php');
?>
<!DOCTYPE html>
    <html>
    <body>
        <head>
            <script src="js/jquery-3.4.1.min.js"></script>
        </head>
    <!-- page title -->
    <div class="page-title-section">
        <div class="page-title-wrap">
            <div class="page-title-overlay"></div>
            <div class="page-title-info">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Register Page</li>
                </ol>
                <h1 class="page-title">Register Page</h1>
            </div>
        </div>
    </div>

    <!-- registar -->
    <div class="registar-section pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 contact-main">
                    <h3 class="form-title">Registration form</h3>
                    <form class="registar-form" action="register_process.php" method="POST" enctype="multipart/form-data">              
                        <?php
                         
                            $Q_security=mysqli_query($conn,"SELECT * FROM security_question");
                            $Q_state=mysqli_query($conn,"SELECT * FROM state_master");
                        ?>
                        <label for="name">Full Name</label>
                        <input id="name" class="input" type="text" placeholder="Full name" name="fullname" />
                        <label for="email">User name / Email address</label>
                        <input id="email" class="input" type="text" placeholder="User name" name="khoyapaya_email"/>
                        <label for="Password">Password</label>
                        <input id="Password" class="input" type="Password" placeholder="Password" name="khoyapaya_pword"/>
                        <label>Mobile No.</label>
                        <input class="input" type="tel" placeholder="Mobile No" name="no" />
                        <label>Gender</label><br>
                        <input type="radio" value="Male" name="gender">Male <br>
                        <input type="radio" value="Female" name="gender">Female<br>
                        <label>Annual Income</label>
                        <input class="input" type="number" placeholder="Annual Income" name="income" />
                        <label>Address (Flat no.,society name/ Building name)</label>
                        <textarea class="input" name="address"></textarea>
                        <label>State</label>
                        <select class="input" name="state" id="state">
                            <?php
                           
                                while($ROW=mysqli_fetch_array($Q_state))
                                {
                                    //$ROW['State_Id'];
                                    //$ROW['Sname'];
                                    echo "<option value= ".$ROW['State_Id']." >".$ROW['Sname']."</option>";
                                }
                            ?>
                        </select>
                        <label>City</label>
                        <select class="input" name="city" id="city">
                        <option value="">Select city</option>
                        </select>
                        <script>
                            $(document).ready(function(){
                                   
                                $('#state').on('change', function()
                                {
                                    var State_Id = $(this).val();
                                   //console.log(State_Id);
                                    if(State_Id)
                                    {
                                        $.ajax({
                                            type:'POST',
                                            url:'ajaxData.php',
                                            data:'State_Id='+State_Id,
                                            success:function(html){
                                                $('#city').html(html);

                                            }
                                        }); 
                                    }
                                });
                            });
                        </script>

                        <label>Security Question</label>
                        <select class="input" name="security">
                            <?php
                            while($ROW=mysqli_fetch_array($Q_security))
                            {
                                //$ROW['security_id'];
                                //$ROW['question'];
                                echo"<option value= ".$ROW['Security_Id']." >".$ROW['question']."</option>";
                            }
                            ?>
                       </select>
                        <label>Security Answer</label>
                        <input class="input" type="text" placeholder="Answer" name="ans" />
                        <label>Profile Image</label>
                        <input class="input" type="file" accept="image/*" name="pro_img" id="pro_img">
                        <!-- <div class="registar-check">
                            <input id="remember-check" class="checkbox" type="checkbox" name="reg_check" />
                            <label for="remember-check">Remember me</label>
                        </div> -->
                        <input class="btn" type="submit" value="SUBMIT" />
                        <span class="rbtn-title">Need help? go to <a href="#">FAQ</a></span>
                    </form>
                    <p class="rform-title">You are a member! <a href="#">Login</a> here.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img_all/1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img_all/2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img_all/3.jpg" alt="New york" style="width:100%;">
      </div>
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

    
</body>

<!-- Mirrored from lineartheme.com/themes/becharity/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:18:15 GMT -->
</html>
<?php
    include_once('footer.php');
?>
