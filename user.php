<?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
    $employeeno =$_POST['employeeno'];
    $firstname = $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $position = $_POST['position'];

    $sql = "INSERT INTO `employee` ( `employeeno`, `firstname`, `lastname`, `position`) VALUES ('$employeeno', '$firstname', '$lastname', '$position')";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
    //     echo '<div class="alert alert-success" role="alert">
    //     Data inserted successfully!
    //   </div>';
        header('location:\salary_management\salary_management\AddViewEmployee.php');
    }
    else {
        die(mysqli_error($dbconn));
    }



}
$EmployeenoError = "";
$firstnameError= "";
$lastnameError = "";
$positionError = "";

if(isset($_POST['submit'])){
    $employeeno =$_POST['employeeno'];
    $firstname = $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $position = $_POST['position'];
}

if(empty($employeeno)){
    $EmployeenoError = "Employee is required";
}
if(empty($firstname)){
    $firstnameError = "first name  is required";
}
if(empty($lastname)){
    $lastnameError = "last name is required";
}
if(empty($position)){
    $positionError = "position is required";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Employee no</label>
                <input type="text" class="form-control" id="name" name="employeeno" placeholder="Enter your employee number"
                    autocomplete="off" required>
                    <span style ="color:red"><?php echo $EmployeenoError?></span>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="text" class="form-control" id="Fname" name="firstname" placeholder="Enter your First Name" required
                    autocomplete="off">
                    <span style ="color:red"><?php echo $firstnameError?></span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your Last Name" name="lastname" required
                    autocomplete="off">
                    <span style ="color:red"><?php echo $lastnameError?></span>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" placeholder="Enter your position"
                    name="position"  autocomplete="off" required>
                    <span style ="color:red"><?php echo $positionError?></span>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Is Admin</label>
                <input type="checkbox" name="is_admin">
            </div>      

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>