<?php      
    include('register_con.php'); 
    $name = $_POST['name'];  
    $register_number = $_POST['register'];  
    $username = $_POST['user'];  
    $password = $_POST['pass'];   
    $confirm_password = $_POST['confirmpass'];  
      
        /*to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password); */ 
      
        $sql = "insert into login where (name,register_number,username,password,confirm_password)";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> registration successful. </center></h1>";  
        }  
        else{  
            echo "<h1> registration failed.</h1>";  
        }     
?>  