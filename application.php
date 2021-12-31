<?php      
    include('application_con.php'); 
    $register_number = $_POST['register'];  
    $name = $_POST['name']; 
    $ucollege_name = $_POST['college'];  
    $programme_name = $_POST['programme'];   
    $model = $_POST['model']; 
    $complementarycourse = $_POST['course1'];  
    $open_course = $_POST['course2']; 
    $optional_or_vocational_course = $_POST['course3'];  
    $address = $_POST['address'];   
    $phno = $_POST['phno']; 
    $gender = $_POST['gender'];  
    $course_1 = $_POST['commoncourse']; 
    $cgpa_1 = $_POST['cgpa'];  
    $grade_1 = $_POST['grade'];   
    $course_2 = $_POST['ccommoncourse2'];  
    $cgpa_2 = $_POST['cgpa'];  
    $grade_2 = $_POST['grade'];   
    $course_3 = $_POST['corecourse']; 
    $cgpa_3 = $_POST['cgpa'];  
    $grade_3 = $_POST['grade'];   
    $course_4 = $_POST['complementarycourse'];  
    $cgpa_4 = $_POST['cgpa'];  
    $grade_4 = $_POST['grade'];   
    
      
      
        /*to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password); */ 
      
        $sql = "insert into application where (register_number,name,college_name,programme_name,model,complementarycourse,open_course,optional_or_vocational_course,address,phno,gender,course_1,cgpa_1,grade_1,course_2,cgpa_2,grade_2,course_3,cgpa_3,grade_3,course_4,cgpa_4,grade_4  )";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> submitted successfully. </center></h1>";  
        }  
        else{  
            echo "<h1> subission failed.</h1>";  
        }     
?>  