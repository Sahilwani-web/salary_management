<?php
include '../dbconnect.php';
if (isset($_POST['submit'])) {
    $emp_number =  str_replace('YI-', '' , $_POST['emp_number']); 
    $emp_name = $_POST['emp_name'];
    $emp_role = $_POST['emp_role'];
    $emp_pan = $_POST['emp_pan'];
    $emp_contact = $_POST['emp_contact'];
    $emp_address = $_POST['emp_address'];
    $emp_basic_salary = $_POST['emp_basic_salary'];
    $provident_fund = $_POST['provident_fund'];
    $security_deposit = $_POST['security_deposit'];
    

    $sql = "INSERT INTO `employeedetails` ( `emp_name`, `emp_role`, `emp_pan`, `emp_contact`, `emp_address`, `emp_basic_salary`, `provident_fund`, `security_deposit`, `emp_number`) VALUES ('$emp_name', '$emp_role', '$emp_pan', '$emp_contact', '$emp_address', '$emp_basic_salary', '$provident_fund', '$security_deposit','$emp_number')";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        //     echo '<div class="alert alert-success" role="alert">
        //     Data inserted successfully!
        //   </div>';
        header('location:\salary_management\salary_management\EmployeeDetails\employeeDisplay.php?insert_msg= Your data has been added successfully !!');
    } else {
        die(mysqli_error($dbconn));
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>

<body>
    <div class="container my-5">
        <form method="post">
        <div class="mb-3">
                <label for="name" class="form-label">Employee number</label>
                <input type="text" class="form-control" id="name" name="emp_number"  autocomplete="off" required>

            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Employee name</label>
                <input type="text" class="form-control" id="name" name="emp_name" placeholder="Enter your name" autocomplete="off" required>

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Employee role</label>
                <input type="text" class="form-control" id="Fname" name="emp_role" placeholder="Enter your role " required autocomplete="off">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Employee PAN number</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your PAN number " name="emp_pan" required autocomplete="off">

            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Employee contact number</label>
                <input type="text" class="form-control" id="position" placeholder="Enter your contact number" name="emp_contact" autocomplete="off" required>

            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Employee address</label>
                <input type="text" class="form-control" id="position" placeholder="Enter your address" name="emp_address" autocomplete="off" required>

            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Employee basic salary</label>
                <input type="text" class="form-control" id="position" placeholder="Enter your basic salary" name="emp_basic_salary" autocomplete="off" required>

            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Employee Provident Fund</label>
                <input type="text" class="form-control" id="position" placeholder="Enter your Provident fund" name="provident_fund" autocomplete="off" required>

            </div>
            <div class="mb-3">
                <label for="security_deposit" class="form-label">Employee Security deposit</label>
                <input type="text" class="form-control" id="position" placeholder="Enter your security deposit" name="security_deposit" autocomplete="off" required>

            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>