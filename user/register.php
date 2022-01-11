<!DOCTYPE html> 
<html>
    <head>
        <title> Register</title>
        <link rel="stylesheet" href="../css/login.css">
    </head>
    <body>

    <h1><center><marquee>UNIVERSITY CERTIFICATE ALLOTMENT SYSTEM</marquee></center></h1>
             
    <br><br><br><br><br> <br><br>
    
        <div class ="registration" >
            <form text-align="center" align="center" method="POST"  action="./register_con.php" align-items="center "  style=' background-color:rgb(220,220,220); opacity:0.75;
    height: 400px; margin-top: 25px; 
    margin-left: 500px; margin-right: 500px; ; font-size: 20px;font-weight: 300;border-radius: 20px ;'>
                <h1> SIGN UP </h1>
                <input type="text" name="name"  placeholder="Enter Name"required autofocus/> <br><br>
                <input type="text" name="register" placeholder="Enter Register number" maxlength="20" minlength="10" required/><br><br>
                <input type="email" name="email" placeholder="Enter email"required/><br><br>
                <input type="password" name="pass"  placeholder="Enter Password" maxlength="10" minlength="10" required/><br><br>
                <input type="submit"  value="REGISTER"/> 
                <br>
            </form>
        </div>
    </body>
</html>
