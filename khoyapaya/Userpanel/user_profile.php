<?php
   require_once('config.php');
   include_once('header.php');
?>
<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="style2.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    </head>
  
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
            <div class="row" id="divid">
            <?php
                $user=$_SESSION['user'];
                if(isset($_SESSION['khoyapaya_login_user'],$_SESSION['user']))
                {
                    $U_id="";
                		$Full_Name="";
            				$Email_Id="";
            				$Mobile_No="";
            				$Gender="";
            				$Income="";
            				$Address="";
            				$State="";
            				$City="";
            				$Profile_Img="";
                    $Acc_Type="";
    		
  					$email=$_SESSION['khoyapaya_login_user'];
  					$sel_query=mysqli_query($conn,'SELECT U_id,Full_Name,Email_Id,Mobile_No,Gender,Income,Address,Sname,Cname,Profile_Img,Acc_Type FROM registration,state_master,city_master WHERE Email_Id="'.$email.'" AND registration.State_Id=state_master.State_Id AND registration.City_Id=city_master.City_Id');
      					while($ROW=mysqli_fetch_array($sel_query))
      			    	{

                  $U_id=$ROW['U_id'];
    			   			$Full_Name=$ROW['Full_Name'];
    			   			$Email_Id=$ROW['Email_Id'];
    			   			$Mobile_No=$ROW['Mobile_No'];
    			   			$Gender=$ROW['Gender'];
    			   			$Income=$ROW['Income'];
    			   			$Address=$ROW['Address'];
    			   			$State=$ROW['Sname'];
    			   			$City=$ROW['Cname'];
    			   			$Profile_Img=$ROW['Profile_Img'];
                  $Acc_Type=$ROW['Acc_Type'];
    			   		}?>

               <!--  <div class="col-sm-12 col-sm-offset-1 "> -->
                   <div class="col-sm-6 col-md-4 col-md-offset-1 contact-main" id="divid2" >
                         <img src="<?php echo $Profile_Img?>">
                   </div>
                   <div class="col-sm-6 col-md-6 contact-main">
                    <?php
                        echo "<h4> Name : $Full_Name </h4>";
                     	echo "<h4> Email_Id : $Email_Id </h4>";
                     	echo "<h4> Mobile No : $Mobile_No </h4>";
                     	echo "<h4> Gender : $Gender </h4>";
                     	echo "<h4> Income : $Income </h4>";
                     	echo "<h4> Address : $Address </h4>";
                     	echo "<h4> State : $State </h4>";
                     	echo "<h4> City : $City </h4>";
                    ?>  
                    <div>
                    <form action="logout.php" method="POST">
                        <input class="btn" type="submit" value="LogOut" onclick="return confirm('Are you sure you want to LogOut ?')"/>
                    </form>
                    <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Edit Profile</button>
                      </div>
                    </div>
                    <?php 
                       if($user==1)
                        {
                        ?>
                            <div class="col-md-12" style="padding-top: 30px">
                            <?php
                               $sel_query=mysqli_query($conn,'SELECT A_id,Name,DOB,Age,Profile_Img,D_insert,Status,Adoption_Date from Appointment_master,child_master WHERE U_id="'.$U_id.'" AND appointment_master.C_id=child_master.C_id');
                        }
                    while($ROW=mysqli_fetch_array($sel_query))
                    {
                        $A_id=$ROW['A_id'];
                        $Name=$ROW['Name'];
                        $DOB=$ROW['DOB'];
                        $Age=$ROW['Age'];
                        $Profile_Img=$ROW['Profile_Img'];
                        $D_insert=$ROW['D_insert'];
                        $Status=$ROW['Status'];
                        $Adoption_Date=$ROW['Adoption_Date'];
                     
                         
                    ?>    
                    <table class="table">
                        <tr scope="row">
                            <thead class="thead-light">
                                <th scope="col">Child Name</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Age</th>
                                <th scope="col">Requested Date</th>
                                <?php 
                                if($Status==0)
                                {
                                    echo '<th scope="col">Status</th>';
                                } 
                                else
                                {
                                       echo '<th scope="col">Adoption Date</th>'; 
                                }
                                ?>
                             
                                
                                <th scope="col">Child Photo</th>
                                <th scope="col" class=text-center>View Child Profile</th>
                                <th scope="col" class=text-center>Cancel Appointment</th>

                            </thead>
                        </tr>
                        <tr scope="row">
                            <td><?php echo $Name;?></td>
                            <td><?php echo $DOB;?></td>
                            <td><?php echo $Age;?></td>
                            <td><?php echo date('d-m-Y', strtotime($D_insert));?></td>
                             <?php 
                                if($Status==0)
                                {
                                    echo '<td scope="col">Pending</td>';
                                } 
                                else
                                {
                                       echo '<td scope="col">'.date('d-m-Y', strtotime($Adoption_Date)).'</td>'; 
                                }
                                ?>
                            <td><?php echo '<img src='.$Profile_Img.' class=profile></img>';?></td>
                             <td class="text-center">
                                <form action="childprofile.php" method="GET">
                                    <input type="hidden" name="img" value="<?php echo $Profile_Img ?>">
                                    <input class="btn" type="submit" value="View"/>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="delete_appointment.php" method="POST">
                                    <input type="hidden" name="A_id" value="<?php echo $A_id ?>">
                                    <input class="btn" type="submit" value="Cancel" onclick="return confirm('Are you sure you want to Cancel Appointment?')"/>


                                </form>
                            </td>

                        </tr>
                       
                    </table>  

                    <?php
                    }   
                  
                }
                 
        ?> 
      </div>
    </div>
  </div>
</div>




<!-- The Modal -->

  
   
 <!-- Modal -->
 <form enctype="multipart/form-data" id="update_profile" class="registar-form" method="POST">              
    <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-header">
          <button type="button" class="close" id="Closebtn" name="Closebtn" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Profile</h4>
        </div>
        
        <div class="modal-body">
          
                        <?php
                            $Q_state=mysqli_query($conn,"SELECT * FROM state_master");
                        ?>
                        <label for="name">Full Name</label>
                        <input id="name" class="form-control" type="text" placeholder="Full name" id ="fullname" name="fullname" required value="<?php echo $Full_Name ?>" />
                        
                        <label for="email">Email address</label>
                        <input id="email" class="form-control" type="email" placeholder="User name" id ="khoyapaya_email" name="khoyapaya_email" value="<?php echo $Email_Id ?>"/>
                       
                        
                        <label>Mobile No.</label>
                        <input class="form-control" type="tel" placeholder="Mobile No" id ="no" name="no" value="<?php echo $Mobile_No ?>"/>
                        <label>Gender</label><br>
                        <input type="radio" value="Male" id ="gender" name="gender" <?php echo ($Gender=='Male')?'checked':'' ?>>Male <br>
                        <input type="radio" value="Female" id ="gender" name="gender" <?php echo ($Gender=='Female')?'checked':'' ?>>Female<br>
                        <label>Annual Income</label>
                        <input class="form-control" type="number" placeholder="Annual Income" id ="income" name="income" value="<?php echo $Income ?>"/>
                        <label>Address (Flat no.,society name/ Building name)</label>
                        <textarea class="form-control" id ="address" name="address" style="resize: none;" ><?php echo $Address ?> </textarea>
                        <label>State</label>
                        <select class="form-control" id ="state" name="state" id="state">
                          <option disabled="disabled" selected="true">Select State</option>
                            <?php
                           
                                while($ROW=mysqli_fetch_array($Q_state))
                                {
                                    //echo "<option value= ".$ROW['State_Id']."selected >".$ROW['Sname']."</option>";
                                //  echo "<option value= "$ROW['State_Id']"" if($ROW['Sname']==$State{echo "selected";} else {""})>"".$ROW['Sname']."</option>";
                                  ?>
                                    <option value="<?php echo $ROW['State_Id'];?>" <?php if($ROW['Sname']==$State){echo "selected='selected'";}?> ><?php echo $ROW['Sname'];?></option>
                                  <?php }
                            ?>
                        </select>
                        <label>City</label>
                        <select class="form-control" id ="city" name="city" id="city">
                        <option disabled="disabled" selected="true">Select city</option>
                        </select>
                        
                        <script>

                            $(document).ready(function(){
                                   
                                $('#state').one('mouseenter', function()
                                {
                                    var State_Id = $(this).val();
                                    var c= <?php echo json_encode($City); ?>; 
                                   //console.log(State_Id);
                                    if(State_Id)
                                    {
                                        $.ajax({
                                            type:'POST',
                                            url:'ajaxData2.php',
                                            /*data:'State_Id='+State_Id,*/
                                            data:{'State_Id': State_Id, 'ci': c},
                                            success:function(html){
                                                $('#city').html(html);

                                            }
                                        }); 
                                    }
                                });
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
                        <label>Profile Image</label>
                        <br>
                        <input type="file" accept="image/*" name="pro_img" id="pro_img" title="" style="color: transparent;width: 16%; margin:0px;display: inline-block;" />
                        <span><img id="imgid" width="60px" height="60px" src="<?php echo $Profile_Img;?>"></span>                       
                    <input type="hidden" name="uid" value="<?php echo $U_id; ?>">
                    <input type="hidden" name="Acc_Type" value="<?php echo $Acc_Type; ?>">
                    <input type="hidden" name="profile_img" value="<?php echo $Profile_Img; ?>">
                   
                   
                    <script type="text/javascript">
                        function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                
                                reader.onload = function (e) {
                                    $('#imgid').attr('src', e.target.result);
                                }
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                        $("#pro_img").change(function(){
                            readURL(this);
                        });
                </script>               

                <!-- user update  -->
                 <script type="text/javascript">
                            
                </script>    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" class="submit btn btn-default" id="MybtnModal" value="SAVE">
        </div>
      </div>
      
    </div>
  </div>

   </form>
 <script type="text/javascript">
$(document).ready(function() {
        $("#update_profile").on('submit', function (e) {

  var formData = new FormData($(this)[0]);

  $.ajax({
    url: "user_profie_update.php",
    type: "POST",
    data: formData,
    success: function (response) {
    
       $('#divid').load(document.URL +' #divid');
       $('#divid2').load(document.URL +' #divid2');
       $('#imgicon').load(document.URL +' #imgicon');
       // $('#myModal').modal('toggle');
        //$("#Closebtn").click();
        //$("#Closebtn").click(function(){ doStuff();});
        $("#Closebtn")[0].click();
      
       
       
    },
    cache: false,
    contentType: false,
    processData: false
  });

  e.preventDefault();
});
});
    </script>

<script>
$(document).ready(function(){
  $('#MybtnModal').click(function(){
      $('#myModal').modal('show');
  });
});
</script>
<script>
$(document).ready(function(){
  $('#Closebtn').click(function(){
   $('#myModal').removeData();
  });
});
</script>

</body>

<!-- Mirrored from lineartheme.com/themes/becharity/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:18:15 GMT -->
</html>
<?php
    include_once('footer.php');
?>
