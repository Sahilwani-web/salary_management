<?php

$host="localhost";
$user="root";
$password="";
$db="salary";

session_start();


$dbconn=mysqli_connect($host,$user,$password,$db);

if(!$dbconn)
{
	die("connection error");
}

?>
