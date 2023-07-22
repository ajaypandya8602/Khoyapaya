<?php
require_once('config.php');
	$title=$_POST['title'];
	$about=$_POST['about'];
	$venue=$_POST['venue'];
	$date=$_POST['date'];

	$ins_query=mysqli_query($conn,"INSERT INTO event_master(Ename, Date, Venue, About_Event) VALUES ('".$title."', '".$date."', '".$venue."','".$about."')");
	if($ins_query)
	{
		$id = mysqli_insert_id($conn);
		foreach($_FILES["pro_img"]["tmp_name"] as $key=>$tmp_name)
		{	
			$info = pathinfo($_FILES['pro_img']['name'][$key]);
			$ext = $info['extension']; // to get an extension of the file
			$newname = "event_$id"."_".$key.'.'.$ext; 
			$target = 'C://xampp/htdocs/khoyapaya2/Userpanel/img_all/event/'.$newname;
			move_uploaded_file($_FILES['pro_img']['tmp_name'][$key], $target); 
			$query=mysqli_query($conn,"INSERT INTO event_image_master(E_id,image)VALUES('".$id."','".$newname."')");
		}
	}
	else
	{
		echo 'not done';
	}
	echo '<script>alert("Event Added Successfully !!")</script>'; 
	header( "refresh:0;url=addevent.php" );
	//header('Location:addevent.php');

/*print_r($_POST);
print_r($_FILES["pro_img"]["tmp_name"]);*/
/*extract($_POST);
$error=array();
$extension=array("jpeg","jpg","png","gif");
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
    $file_name=$_FILES["files"]["name"][$key];
    $file_tmp=$_FILES["files"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

    if(in_array($ext,$extension)) {
        if(!file_exists("photo_gallery/".$txtGalleryName."/".$file_name)) {
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"photo_gallery/".$txtGalleryName."/".$file_name);
        }
        else {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"photo_gallery/".$txtGalleryName."/".$newFileName);
        }
    }
    else {
        array_push($error,"$file_name, ");
    }
}*/
?>