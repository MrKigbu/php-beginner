<?php
//delete file
$filename ="uploads/Sammy faceShot.jpg";
if(unlink($filename)){
    echo "file Deleted";
}else {
    echo "Unable to delete file";
}
?>
