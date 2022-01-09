 <html>
<head>
<title>Deleteuser</title>
</head>
<body>
    <style>
        body{
            background-image:url("userlog_img.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

        }
        
    </style>
       
<a href="user_home.php">
    <p align="right">HOME</p>
    </a>
<form align='center' style='color:black;margin-top:250px'method="POST" action="">
EMAIL:<input type="text" name="email" ><br><br>
<button name="submit" value="submit">Submit</button><br>
</form>
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="online_pet_shop";

$conn = mysqli_connect($servername,$username,$password,$database_name);
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$con = mysqli_connect("localhost","root","","ucas");
	if (!$con)
	{
		echo "<br>";
		die('Could not connect: ' . mysqli_error());
	}
	
	$db=mysqli_select_db($con,"ucas");
	if (!$db)
	{
		die('Could not find database: ' . mysqli_error());
	}
	$query="delete from user where email='$email'";
	$data=mysqli_query($con,$query);
	if(!$data)
	{
		echo " table error";
	}
	

    

}
?>
</body>

</html>