<?php
session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ucas";

    //Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $email= $_POST['email'];
    $password= $_POST['password'];

    $sql = "SELECT id FROM register WHERE email = '$email' and `password` = '$password'";
    $result = mysqli_query($con,$sql);
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count>0) {
      $_SESSION['id']=$fetch['id'];
        header('Location:userhome.php');
    }
    else {
      $_SESSION['tmp']="invalid username or password!";
      header('Location:userlogin.php');
      //echo '<script>alert("ivalid username or password")</script>';
    }

    $con->close();
    ?>