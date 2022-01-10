<?php
session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ucas";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username= $_POST['username'];
    $password= $_POST['password'];

    $sql = "SELECT * FROM adminlogin WHERE username = '$username' and `password` = '$password'";
    $result = mysqli_query($con,$sql);
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
               header("location:adminhome.php");
    }
    else {
        echo '<script>alert("ivalid username or password")</script>';
    }

    $con->close();
    ?>



   