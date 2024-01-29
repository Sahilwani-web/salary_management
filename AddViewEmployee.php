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
    <title>Add view employee Details</title>

    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#MyTable').DataTable();
        });
    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin-top: 8%;
            padding: 0;
           
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        button a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        
        <a href="/salary_management/user.php">
            <button>Add New Employee</button>
        </a>

        <table id="MyTable">
            <thead>
                <tr>
                <th>Employee id</th>
                    <th>Employee no</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>position</th>
                    <th>Update</th>
                    <th>Delete</th>
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
<button class = "btn btn-primary"><a href="update.php?editid=' . $employeeid . '" class ="text-light">Update</a></button></td>
<td><button id ="deletedata"  class = "btn btn-danger delete "   ><a href="delete.php?deleteid=' . $employeeid . '"  class ="text-light">Delete</a></button>
</td>

</tr>';
    }
}
?>
            </tbody>
        </table>
    </div>
</body>

</html>