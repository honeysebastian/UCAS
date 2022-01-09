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

    $register_number = $_REQUEST['register'];  
    $name = $_REQUEST['name']; 
    $ucollege_name = $_REQUEST['college'];  
    $programme_name = $_REQUEST['programme'];   
    $model = $_REQUEST['model']; 
    $complementarycourse = $_REQUEST['course1'];  
    $open_course = $_REQUEST['course2']; 
    $optional_or_vocational_course = $_REQUEST['course3'];  
    $address = $_REQUEST['address'];   
    $phno = $_REQUEST['phno']; 
    $gender = $_REQUEST['gender'];  
    $course_1 = $_REQUEST['commoncourse']; 
    $cgpa_1 = $_REQUEST['cgpa'];  
    $grade_1 = $_REQUEST['grade'];   
    $course_2 = $_REQUEST['commoncourse2'];  
    $cgpa_2 = $_REQUEST['cgpa'];  
    $grade_2 = $_REQUEST['grade'];   
    $course_3 = $_REQUEST['corecourse']; 
    $cgpa_3 = $_REQUEST['cgpa'];  
    $grade_3 = $_REQUEST['grade'];   
    $course_4 = $_REQUEST['complementarycourse'];  
    $cgpa_4 = $_REQUEST['cgpa'];  
    $grade_4 = $_REQUEST['grade'];   
    
      
      
        $sql = "INSERT INTO  `application` (`register_name`,`name`,`college`,`programme`,`model`,`course1`,`course2`,`course3`,`address`,`phno`,`gender`,`commoncourse`, `cgpa`,`grade`,`commoncourse2`,`cgpa`,`grade`,`corecourse`,`cgpa`,`grade`,`complementarycourse`,`cgpa`,`grade`)
        VALUES ('$register_number','$name','$college_name','$programme_name','$model','$complementarycourse','$open_course','$optional_or_vocational_course','$address','$phno','$gender','$course_1','$cgpa_1','$grade_1','$course_2','$cgpa_2','$grade_2','$course_3','$cgpa_3','$grade_3','$course_4','$cgpa_4','$grade_4' )";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.</h3>" ;  
            echo "<script>alert('submitted successfully')</script>";
            header("location:userhome.php");
        }
        else{  
            echo "<script>alert('submission failed.')</script>";  
        }     
?>  