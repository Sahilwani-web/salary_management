<?php
include "dbconnect.php";
include "../salary_management/TopNavbar/TopNavbar.php";
include "../salary_management/SideNavbar/SideNavbar.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <title>Add view employee</title>
    
   

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
                <div class="button">Add view employee</div>
            </div>
            <div class="search-tab">
                <input type="text" placeholder="Search">
            </div>
        </div>
        <div class="container">
            <div class="content">
                <a href="/salary_management/user.php">
                    <button>Add new employee</button>
                </a>
            </div>
            <div class="search-tab">
                <input type="button" placeholder="Search">
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Employee id</th>
                    <th>Employee no</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>position</th>
                    <th>Operation</th>

                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "select * from `employee`";
                $result = mysqli_query($dbconn, $sql);
                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $employeeid = $row['employeeid'];
                        $employeeno = $row['employeeno'];
                        $firstname = $row['firstname'];
                        $lastname = $row['lastname'];
                        $position = $row['position'];
                        echo '<tr>
                <td>' . $employeeid . '</td>
                <td>' . $employeeno . '</td>
                <td>' . $firstname . '</td>
                <td>' . $lastname . '</td>
                <td>' . $position . '</td>
                <td>
        <button class = "btn btn-primary"><a href="update.php?editid=' . $employeeid . '" class ="text-light">Update</a></button>
        <button id ="deletedata"  class = "btn btn-danger delete "   ><a href="delete.php?deleteid=' . $employeeid . '"  class ="text-light">Delete</a></button>
    </td>
                
            </tr>';

                    }
                }
                ?>

            </tbody>
        </table>
        
    </body>
    
<script>
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) =>{
        element.addEventListener("click", (e)=>{
            e.preventDefault();
            tr = e.target.parentNode.parentNode;
            // employeeid = e.target.employeeid.substr(1,);
            
          if( confirm("Press the button!")){
            alert("Record delted ");
            window.location.href = e.target.querySelector("delete").getAttribute("href");
           }
           else{
            alert("Record not deleted");
           }
        })
    })
    
</script>

    </html> 