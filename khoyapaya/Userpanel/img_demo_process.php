<?php

var_dump($_FILES['files']['name']);

echo "<br>";
echo "<br>";

echo $_FILES[0]['name'];

echo "<br>";
echo "<br>";



print_r($_FILES['files']['name']);

if(!empty(array_filter($_FILES['files']['name']))) { 
  
        foreach ($_FILES['files']['tmp_name'] as $key => $value) { 
              
            $info = pathinfo($_FILES['files['.$key.']']['name']);
			$ext = $info['extension']; 
			$newname = "1_ajay".$key.'.'.$ext; 

		 }
     }
     print_r($_FILES['files']['name']);
            


/*


	$info = pathinfo($_FILES['pro_img']['name']);
	$ext = $info['extension']; // to get an extension of the file
	$newname = $Uid."_".$fullname.'.'.$ext; 
	$target = 'img_all/'.$newname;
	move_uploaded_file($_FILES['pro_img']['tmp_name'], $target); 
	$Path="img_all/".$newname;

*/       



?>