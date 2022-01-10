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

    $name = $_REQUEST['name'];  
    $register_number = $_REQUEST['register'];  
    $email = $_REQUEST['email'];  
    $password = $_REQUEST['pass'];   
     
      
            
     
        // Performing insert query execution


      
        $sql = "INSERT INTO register(`name`,`register_number`,`email`,`password`) VALUES ('$name', 
            '$register_number','$email','$password')";
          
        if(mysqli_query($con, $sql)){
            echo "<h3>data stored in a database successfully.</h3>" ;
            echo "<script>alert('registered successfully')</script>";
            header("location:userlogin.php") ;
  
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
          
        // Close connection
        mysqli_close($con);
        ?>