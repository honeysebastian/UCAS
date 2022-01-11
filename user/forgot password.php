<html>
    <head>
        <title>Forgot Password</title>
        <link rel="stylesheet" href="../css/login.css">
    </head>
   <body>
       <h1><center><marquee>UNIVERSITY CERTIFICATE ALLOTMENT SYSTEM</marquee></center></h1>
    <br><br><br><br><br><br><br>


    <form align="center" action= "./forgotpassword_con.php" method="POST" style='background-color:rgb(220, 220, 220); opacity:0.75;
    height: 350px; margin-top: 25px; 
    margin-left: 500px; margin-right: 500px; ; font-size: 20px;font-weight: 300;border-radius: 20px ;'>
   
    <br><br>
    
    <h2>FORGOT PASSWORD</h2>
         <table align="center">
<tr>
<td>Email:</td>
<td><input type="email" name="email" placeholder="enter email" required autofocus/></td>
</tr>
<tr>
<td>New Password:</td>
<td><input type="password" name="password" placeholder="enter new password" required maxlength="10" minlength="10"/></td>
</tr>
<tr><td><center><input type="submit" value="RESET"/></center></td>
</table> 
    </form>
   </body>
</html>
