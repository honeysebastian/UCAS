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
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> updated successfully </center></h1>";
            header('location:userlogin.php');
        }
            
        else{  
            echo "<h1> failed.</h1>"; 
        }     
?>  