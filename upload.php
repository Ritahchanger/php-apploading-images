<?php
if(isset($_POST["submit"])){

    $filename=$_POST['name'];
    $fileCategory=$_POST['categories'];


    if(!empty($filename) && !empty($fileCategory)){
        
        $file=$_FILES['file'];
        $originalFileName=$_FILES['file']['name'];
        $originalFileSize=$_FILES['file']['size'];
        $originalFileType=$_FILES['file']['type'];
        $fileTemporaryName=$_FILES['file']['tmp_name'];
        $fileError=$_FILES['file']['error'];
       
        $fileNameExt=explode(".",$originalFileName);
        $fileActualExtension=strtolower(end($fileNameExt));
        $filesExpected=array("jpg","jpeg","png");

  
        if(in_array($fileActualExtension,$filesExpected)){
            if($fileError===0){
                if($originalFileSize>2000000){
                    echo "THE FILE YOU'VE INPUTED IS TOO LARGE";
                }else{
                    $fileNewName=uniqid("",true).".".$fileActualExtension;
                    $fileDestination='uploads/'.$fileNewName;
                    move_uploaded_file($fileTemporaryName,$fileDestination);
                    include "connect.php";
                    $query="insert into imageshower(imageName,imageCategories) values('$fileNewName','$fileCategory');";
                    $realQuery=mysqli_query($connect,$query);
                    header("location:index.php");
                }
            }else{
                echo "The file you just enetered has an error: ";
            }
        }else{
            echo "INVALID INPUT FILE";
        }

    }
    else{
        echo "Error";
    }


}