<?php
$query_string = $_SERVER['QUERY_STRING'];
$path = explode("/", $query_string);


//echo $query_string;
//echo "<pre>";
//print_r($path);

// if($path[1] == 'employees'){
//     echo "Shwo List of employees";
// }elseif($path[1] == 'employee'){
//     echo "Shwo details of one emplyee";
// }elseif($path[1] == 'newemployee'){
//     echo "Add new employee... SHow a form";
// }elseif($path[1] == 'newsalary'){
//     echo "Show form to add new salary";
// }elseif($path[1] == 'login'){
//     require_once("login.php");
// }elseif($path[1] == 'logout'){
//     echo "Logout the user";
// }
?>