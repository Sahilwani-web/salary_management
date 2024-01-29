<?php
include 'dbconnect.php';
if(isset($_GET['deleteid'])){
    $employeeid =$_GET['deleteid'];

    $sql = "DELETE FROM `employee` WHERE `employee`.`employeeid` = $employeeid";
    $result = mysqli_query($dbconn,$sql);
    if($result){
        header('location:AddViewEmployee.php');
        
    }else{
        die("deletion was not successfull: ");
    }
}


?>