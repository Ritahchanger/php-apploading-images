<?php

$connect=mysqli_connect("localhost","root","","gallery");

if(!$connect){
    die("Connection error:".mysqli_connect_error($connect));
}
