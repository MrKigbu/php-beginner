<?php
$dir = "uploads/";
$file = $dir . basename($_FILES["fileimage"]["name"]);
if(move_uploaded_file($_FILES["fileimage"]["tmp_name"], $file ))
    {
        echo "Image uploaded Successfully";
    }else {
        echo "Error Uploading Image";
    }

?>