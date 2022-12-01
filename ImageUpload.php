<?php  
if(isset($_FILES['image'])){
   
    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
   
    if(move_uploaded_file($file_tmp,"upload-images/".$file_name)){
        echo "Successfull uploaded.";
    }
    else{
        echo "Could not upload the file";
    }  }
  
?>  

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>


<form action="" method="POST" enctype="multipart/form-data">  
    <label>Uploading File</label> 
    <input type="file" name="image"/>  
   <input type="submit" /> 
</form>  
</body>
</html>
