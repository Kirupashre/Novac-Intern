<?php 
$con = mysqli_connect("localhost","root","","form1");

if(!$con){ //phpmyadmin connect of localhost
    die("Connection Failed:"); //die is used to stop in the place where error occurs
}
?>