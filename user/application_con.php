
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="ucas";

$con = mysqli_connect($servername,$username,$password,$database_name);
// Check connection
if (mysqli_connect_errno())
 {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  
      
  $register_number = $_REQUEST['register'];  
  $name = $_REQUEST['name']; 
  $college_name = $_REQUEST['college'];  
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
  $course_4 = $_REQUEST['complementary'];  
  $cgpa_4 = $_REQUEST['cgpa'];  
  $grade_4 = $_REQUEST['grade'];   
  

  $sql = "INSERT INTO `application` (register_number, `name`, college_name, programme_name, model, complementarycourse,open_course, optional_or_vocational_course, `address`, phno, gender, course_1, cgpa_1, grade_1,course_2, cgpa_2, grade_2, course_3, cgpa_3, grade_3, course_4, cgpa_4, grade_4) 
   VALUES ('$register_number', '$name', '$college_name', '$programme_name', '$model', '$complementarycourse','$open_course', '$optional_or_vocational_course', '$address', '$phno', '$gender', '$course_1', '$cgpa_1', '$grade_1','$course_2', '$cgpa_2', '$grade_2', '$course_3', '$cgpa_3', '$grade_3', '$course_4', '$cgpa_4', '$grade_4')";

      if (mysqli_query($con, $sql))
      {
          echo "success";
          echo "<script>alert('submitted successfully')</script>";
      }
      else
      {
          echo "Error: " . $sql."<br>" . mysqli_error($con);
         
      }
      mysqli_close($con);
  ?>