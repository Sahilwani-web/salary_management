<?php
    include('dbconnect.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($dbconn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location:\salary_management\salary_management\adminhome.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "/salary_management/salary_management/index.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>