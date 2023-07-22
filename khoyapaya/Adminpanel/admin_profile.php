<div id="alldiv"></div>
<?php
   require_once('config.php');
   include_once('header.php');
?>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <div id="content-wrapper alldiv">

        <div class="container-fluid">

        	 <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Profile</li>
          </ol><div class="row" id="divid">
          
          

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

               
                  
					  <div class="col-xl-6" id="divid2">
                         <img class="col-md-12" src="<?php echo $Profile_Img?>">
                   </div>
                  
                   <div class="col-sm-6 col-md-6">
                    <?php
                        echo "<h5> Name : $Full_Name </h5>";
                     	echo "<h5> Email_Id : $Email_Id </h5>";
                     	echo "<h5> Mobile No : $Mobile_No </h5>";
                     	echo "<h5> Gender : $Gender </h5>";
                     	echo "<h5> Income : $Income </h5>";
                     	echo "<h5> Address : $Address </h5>";
                     	echo "<h5> State : $State </h5>";
                     	echo "<h5> City : $City </h5>";
                    ?>  
                    <div>

                      <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Edit Profile</button>    
                    </div>
                </div>
            </div>

            <form enctype="multipart/form-data" id="update_profile"  method="POST">              
    <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-header">
        	<h5 class="modal-title">Edit Profile</h5>
          <button type="button" class="close" id="Closebtn" name="Closebtn" data-dismiss="modal">&times;</button>
          
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


</div>
<?php }
	include_once('footer.php');
?>
</div>
<script type="text/javascript">
$(document).ready(function() {
        $("#update_profile").on('submit', function (e) {

  var formData = new FormData($(this)[0]);

  $.ajax({
    url: "user_profile_update.php",
    type: "POST",
    data: formData,
    success: function (response) {
    
      $('#imgicon').load(document.URL +' #imgicon');
       $('#alldiv').load(document.URL +' #alldiv');
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
