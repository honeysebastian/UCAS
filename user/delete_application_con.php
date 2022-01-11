<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$database_name="ucas";

$conn = mysqli_connect($servername,$username,$password,$database_name);
if(isset($_POST['submit']))
{
	$register_number=$_POST['register'];
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
	$query="DELETE from `application` WHERE register_number='$register_number'";
	$data=mysqli_query($con,$query);
	if(!$data)
	{
		echo " table error";
	}
	

} 
?>s