<?php
include "../TopNavbar/TopNavbar.php";
// include "../SideNavbar/SideNavbar.php";

include "../dbconnect.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
     <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
   
  
    
    <title>Add view employee Details</title>
    
   

</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin-top: 200px;
                margin-left: 300px;
            }

            th,
            td {
                border: 1px solid #ddd;
                padding: 10px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }

            .container {
                display: flex;
            }

            .content {
                flex: 1;
                padding: 20px;
            }

            .search-tab {
                position: fixed;
                top: 50px;
                right: 0;
                padding: 20px;

                display: flex;
                align-items: center;
            }

            input {
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                margin-right: 8px;
            }

            button {
                padding: 8px 12px;
                background-color: #4caf50;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;

            }
        </style>
    </head>

    <body>
   
        <div class="container">
            <div class="content">
                <div class="button">Add view employee Details</div>
            </div>
            <div class="search-tab">
                <input type="text" placeholder="Search">
            </div>
        </div>
        <div class="container">
            <div class="content">
                <a href="../employeeDetails/user.php">
                    <button>Add employee details</button>
                </a>
            </div>
            <div class="search-tab" >
                <input type="button" placeholder="Search">
            </div>
        </div>

        <table id ="MyTable" >
            <thead>
                <tr>
                    <th>Employee id</th>
                    <th>Employee name</th>
                    <th>Employee role</th>
                    <th>Employee PAN</th>
                    <th>Contact Number</th>
                    <th>Employee Address</th>
                    <th>Basic salary</th>
                    <th>Provident fund</th>
                    <th>Security deposit</th>
                    <th>Update</th>
                    <th>Delete</th>
                    


                </tr>
            </thead>
            <tbody>

            </tbody>
            
            <?php

$sql = "select * from `employeedetails`";
$result = mysqli_query($dbconn, $sql);
if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {
        $emp_id = $row['emp_id'];
        $emp_name = $row['emp_name'];
        $emp_role= $row['emp_role'];
        $emp_pan = $row['emp_pan'];
        $emp_contact = $row['emp_contact'];
        $emp_address = $row['emp_address'];
        $emp_basic_salary = $row['emp_basic_salary'];
        $provident_fund = $row['provident_fund'];
        $security_deposit = $row['security_deposit'];
        echo '<tr>
<td>' . $emp_id  . '</td>
<td>' . $emp_name . '</td>
<td>' . $emp_role . '</td>
<td>' .  $emp_pan . '</td>
<td>' . $emp_contact . '</td>
<td>' . $emp_address . '</td>
<td>' . $emp_basic_salary . '</td>
<td>' . $provident_fund . '</td>
<td>' . $security_deposit  . '</td>
<td>
<button class = "btn btn-primary"><a href="update.php?editid=' . $emp_id . '" class ="text-light">Update</a></button> </td>
<td> <button id ="deletedata"  class = "btn btn-danger delete "   ><a href="delete.php?deleteid=' . $emp_id . '"  class ="text-light">Delete</a></button> </td>


</tr>';

    }
}
?>

        </table>
        <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#MyTable').DataTable();
        });
    </script>
        
    </body>
    

    </html> 