 <html>
<head>
<title>Delete-Application</title>
</head>
<body>
    <style>
        body{
            background-image:url("../images/college.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

        }
        
    </style>
       
<a href="adminlogoin.php">
    <p align="right">HOME</p>
    </a>
<form align='center' style='color:black;margin-top:250px'method="POST" action="">
APLLICATION ID:<input type="text" name="id" ><br><br>
<button name="submit" value="submit">Submit</button><br>
</form>
<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$database_name="ucas";

$conn = mysqli_connect($servername,$username,$password,$database_name);
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$con = mysqli_connect("localhost","root","","ucas");
	if (!$con)
	{
		echo "<br>";
		die('Could not connect: ' . mysqli_connect_error());
	}
	
	$db=mysqli_select_db($con,"ucas");
	if (!$db)
	{
		die('Could not find database: ' . mysqli_connect_error());
	} 
	$query="delete from application where register_number='$id'";
	$query="delete from application ";
	$data=mysqli_query($con,$query);
	if(!$data)
	{
		echo " table error";
	}
	

} 
?>
</body>

</html>