<?php
include "connect.php";
if(isset($_GET['id'])){

    $deleteid=$_GET['id'];
    $sql="delete from imageshower where imageId=$deleteid";

    $result=mysqli_query($connect,$sql);
        if($result){
            header('location:display.php');
        }else{
            echo "WE ARE NOT ABLW TO FINISH YOUR REQUESTS";
        }
    
}


