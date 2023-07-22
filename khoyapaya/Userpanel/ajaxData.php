<?php 
require_once('config.php');
   
    if(!empty($_POST["State_Id"])){ 
    $result=mysqli_query($conn,"SELECT * FROM city_master WHERE State_Id = ".$_POST['State_Id']."");
        
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option disabled="disabled" selected="true">Select city</option>'; 
        while($row = mysqli_fetch_array($result)){  
            echo '<option value="'.$row['City_Id'].'">'.$row['Cname'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">City not available</option>'; 
    } 
} 
?>