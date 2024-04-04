<?php
require_once('config/db.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from crud where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        include 'deletepg.php';
    }else{
        die("Connection Failed:");
    }
}
?>