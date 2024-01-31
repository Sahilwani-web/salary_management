<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* Sidebar Styles */
    .sidenav {
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 1;
      top: 50px;
      left: 0;
      background-color: #111;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 8px 8px 8px 16px;
      text-decoration: none;
      font-size: 18px;
      color: #818181;
      display: block;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    /* Page Content Styles */
    .content {
      margin-left: 200px;
      padding: 160px;
    }
  </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidenav">
  <a href="\salary_management\AddViewEmployee.php">Employee List</a>
  <a href="\salary_management\employeeDetails/employeeDisplay.php">Employee Details</a>
  <a href="#">Services</a>
  <a href="\salary_management\login.php">logout</a>
</div>
</body>
</html>
