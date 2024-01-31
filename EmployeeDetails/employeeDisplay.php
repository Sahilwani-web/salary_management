<?php
include "../TopNavbar/TopNavbar.php";
include "../SideNavbar/SideNavbar.php";
include "../dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add view employee Details</title>

        <!-- Include DataTables CSS -->
        <link rel="stylesheet"
            href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>

        <!-- Include DataTables JS -->
        <script
            src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

        <script>
        $(document).ready(function() {
            $('#MyTable').DataTable();
        });
    </script>

        <style>
        <?php
        if (isset($_GET["delete"])) {
        }

        if (isset($_POST['insert_msg'])) {
            echo "<h6>" . $_POST['insert_msg'] . "</h6>";
        }
        ?>body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin-top: 8%;
            padding: 0;

        }

        .container {
            max-width: 1500px;
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

            <a href="\salary_management\EmployeeDetails\user.php">
                <button>Add New Employee</button>
            </a>

            <table id="MyTable">
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee Number</th>
                        <th>Employee Name</th>
                        <th>Employee Role</th>
                        <th>Employee PAN</th>
                        <th>Contact Number</th>
                        <th>Employee Address</th>
                        <th>Basic Salary</th>
                        <th>Provident Fund</th>
                        <th>Security Deposit</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = "select * from `employeedetails`";
                    $result = mysqli_query($dbconn, $sql);
                    $emp_id = 0;
                    if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                    $emp_id = $emp_id + 1;
                    // $emp_id = $row['emp_id'];
                    $emp_number = $row['emp_number'];
                    $emp_name = $row['emp_name'];
                    $emp_role = $row['emp_role'];
                    $emp_pan = $row['emp_pan'];
                    $emp_contact = $row['emp_contact'];
                    $emp_address = $row['emp_address'];
                    $emp_basic_salary = $row['emp_basic_salary'];
                    $provident_fund = $row['provident_fund'];
                    $security_deposit = $row['security_deposit'];
                    echo '<tr>

                        <td>' . $emp_id . '</td>
                        <td>' . $emp_number . '</td>
                        <td>' . $emp_name . '</td>
                        <td>' . $emp_role . '</td>
                        <td>' . $emp_pan . '</td>
                        <td>' . $emp_contact . '</td>
                        <td>' . $emp_address . '</td>
                        <td>' . $emp_basic_salary . '</td>
                        <td>' . $provident_fund . '</td>
                        <td>' . $security_deposit . '</td>
                        <td>
                            <button class="btn btn-primary"><a
                                    href="update.php?editid=' . $emp_id . '"
                                    class="text-light">Update</a></button> </td>
                        <td> <button id="delete"><a
                                    href="?deleteid=' . $emp_id . '"
                                    class="delete">Delete</a></button> </td>

                    </tr>';
                    }
                    }
                    ?>
                </tbody>
            </table>
            <?php
        $query = "select max(emp_number)+1 as new_emp_code from employeedetails order by emp_id desc limit 1";
        
        $result = mysqli_query($dbconn, $query);
        $row = mysqli_fetch_assoc($result);

        $newEmployeeCode = "";
        if (null === $row['new_emp_code']) {
        $newEmployeeCode = "YI-" . "10001";
        } else {
        $newEmpCode = $row['new_emp_code'];
        $newEmployeeCode = "YI-" . $newEmpCode;
        } ?>
        </div>
        <script>
        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                sno = e.target.id.substr(1);

                if (confirm("Are you sure you want to delete this note!")) {
                    console.log("yes");
                    window.location = `salary_management/EmployeeDetails/employeeDisplay.php?delete=${emp_id}`;
                } else {
                    console.log("no");
                }
            })
        })
    </script>

    </body>

</html>