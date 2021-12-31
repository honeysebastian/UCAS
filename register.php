<?php      
    include('register_con.php'); 
    $name = $_REQUEST['name'];  
    $register_number = $_REQUEST['register'];  
    $username = $_REQUEST['user'];  
    $password = $_REQUEST['pass'];   
    $confirm_password = $_REQUEST['confirmpass'];  
      
            
     
        // Performing insert query execution
      
        $sql = "INSERT INTO register  VALUES ('$name', 
            '$register_number','$username','$password','$confirm_password')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n $register_number\n "
                . "$username\n $password\n $confirm_password");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>