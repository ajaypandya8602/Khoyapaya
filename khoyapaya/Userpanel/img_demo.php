<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form action="img_demo_process.php" method="POST"
            enctype="multipart/form-data"> 
  
        <h2>Upload Files</h2> 
          
        <p> 
            Select files to upload:  
              
          
            <input type="file" name="files[]" multiple> 
                      
            <input type="submit" name="submit" value="Upload" > 
        </p> 
    </form> 
</body>
</html>