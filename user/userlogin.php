<!DOCTYPE html>
<html>
    <head>
        <title>User-Login</title>
        <link rel="stylesheet"  href="../css/login.css">
       <!-- <style>
    body{
        background-image: url("../images/certificate.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style> -->
    </head>

   <body>
       
    <h1><marquee>UNIVERSITY CERTIFICATE ALLOTMENT SYSTEM</marquee></h1>
    <br><br><br><br><br> <br><br>

    <form align='center' action= "./userlogin_con.php"  method="POST" style=' background-color:rgb(220,220,220); opacity:0.75;
    height: 400px; margin-top: 25px; 
    margin-left: 500px; margin-right: 500px; ; font-size: 20px;font-weight: 300;border-radius: 20px ;'>
         <h2>LOGIN</h2>
         <table align="center">
<tr>
<td>Email:</td>
<td><input type="email" name="email" required autofocus/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" required maxlength="10" minlength="10"/></td>
</tr>
<tr><td><input type="submit" value="Login"/></td>
</table>
<center><a href="./forgot password.php">Forgot Password</a></center>
<br>
<h4>New Account?</h4>
<br>
<center><a href="./register.php">Sign Up</a></center>
  
</body>
</html>
