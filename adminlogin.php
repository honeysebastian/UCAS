<!DOCTYPE html>
<html>
    <head>
        <title>Admin-Login</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

   <body>
       
    <h1><marquee>UNIVERSITY CERTIFICATE ALLOTMENT SYSTEM</marquee></h1>
    <br><br><br><br><br> <br><br>

    <form align='center' name="f1" action= "adminlogin_con.php"  method="POST" style='background-color:rgb(247, 138, 104); opacity:0.75;
    height: 400px; margin-top: 25px; 
    margin-left: 500px; margin-right: 500px; ; font-size: 20px;font-weight: 300;border-radius: 20px ;'>
    <center>LOGIN</center>
    <br><br><br>
         <table align="center">
<tr>
<td>Username:</td>
<td><input type="text" name="username" required autofocus/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" required/></td>
</tr>
<tr><td><input type="submit" value="Login"/></td>
</table>
            
     </form>
   </body>
</html>
