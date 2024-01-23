
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "salary";


$dbconn = mysqli_connect($host, $user, $password, $db);

if ($dbconn === false) {
    die("connection error");
}



