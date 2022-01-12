<!DOCTYPE html>
<html>
<head>
<title>view-application</title>
</head>
<body>
    <style>
        body{
            background-image:url("../images/list.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

        }
        
    </style>
    <form align='center' style='color:black;margin-top:250px'method="POST" action="">
REGISTER NUMBER:<input type="text" name="register" ><br><br>
<button name="submit" value="submit">Submit</button><br>
</form>
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
if(isset($_POST['submit']))
{
	$register_number=$_POST['register'];

$query="select from application where register_number=$register_number";
$l=mysqli_query($con,$query);
echo "<h1><center>APPLICATION LIST</center></h1>";
echo "<table border='1'> <tr><td>ID</td><td>Register Number</td><td>Name</td><td>College_Name</td><td>Programme_name</td><td>Model</td>
<td>Complementary_course</td><td>Open_course</td><td>optional/vocational course</td><td>Address</td><td>phno</td><td>Gender</td><td>common course_1</td>
<td>cgpa</td><td>grade</td><td>common course_2</td><td>cgpa</td><td>grade</td><td>core course</td><td>cgpa</td><td>grade</td><td>complementary course</td><td>cgpa</td><td>grade</td></tr>";
while($row=mysqli_fetch_array($l)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['register_number']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['college_name']."</td>";
    echo "<td>".$row['programme_name']."</td>";
    echo "<td>".$row['model']."</td>";
    echo "<td>".$row['complementarycourse']."</td>";
    echo "<td>".$row['open_course']."</td>";
    echo "<td>".$row['optional_or_vocational_course']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['phno']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['course_1']."</td>";
    echo "<td>".$row['cgpa_1']."</td>";
    echo "<td>".$row['grade_1']."</td>";
    echo "<td>".$row['course_2']."</td>";
    echo "<td>".$row['cgpa_2']."</td>";
    echo "<td>".$row['grade_2']."</td>";
    echo "<td>".$row['course_3']."</td>";
    echo "<td>".$row['cgpa_3']."</td>";
    echo "<td>".$row['grade_3']."</td>";
    echo "<td>".$row['course_4']."</td>";
    echo "<td>".$row['cgpa_4']."</td>";
    echo "<td>".$row['grade_4']."</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
