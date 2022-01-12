<?php      
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

    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        
      
        $sql = "UPDATE register SET `password` = '$password' WHERE `email` = '$email'";
        $result = mysqli_query($con, $sql); 
          
            header('location:userlogin.php');

?>  