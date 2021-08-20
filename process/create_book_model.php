


<?php

    include_once('../inc/database.php');

    if($_SERVER['REQUEST_METHOD']==="POST"){
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if(in_array($fileActualExt, $allowed)){
            if($fileError===0){
                if($fileSize < 100000){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = '../assets/images/'.$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);

                }else {
                    echo "Cannot file too big";
                }
            }else {
                echo "Error";
            }
        }else {
            echo "Cannot upload this types";
        }
    }
    

?> 