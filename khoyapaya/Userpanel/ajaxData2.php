<?php 
require_once('config.php');
   $city=$_POST['ci'];
    if(!empty($_POST["State_Id"])){ 
    $result=mysqli_query($conn,"SELECT * FROM city_master WHERE State_Id = ".$_POST['State_Id']."");
        
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option disabled="disabled" selected="true">Select city</option>'; 
        while($ROW = mysqli_fetch_array($result)){  
            /*echo '<option value="'.$row['City_Id'].'">'.$row['Cname'].'</option>'; */
            //echo '<option value="hiii">'.$city.'</option>'; ?>
            <!DOCTYPE html>
            <html>
            <head>
                <title></title>
            </head>
            <body>
                <option value=<?php echo $ROW['City_Id']; echo " ";
                if($ROW['Cname']==$city)
                {
                    echo "selected=selected";
                }?>
                >
                <?php echo $ROW['Cname'];?></option>
                <!--  <option value="<?php echo $ROW['City_Id'];?>"<?php if($ROW['Cname']==$c){echo "selected='selected'";}?> ><?php echo $ROW['Cname'];?></option> -->
            </body>
            </html>
          
          <?php  
        } 
    }else{ 
        echo '<option value="">City not available</option>'; 
    } 
} 
?>