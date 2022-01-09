<!DOCTYPE html> 
<html>
    <head>
        <title> Register</title>
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
             
    <br><br><br><br><br> <br><br><br><br><br>

    <br><br><br><br>
    
        <div class ="registration" >
            <form text-align="center" method="POST"  action="register_con.php" align-items="center "  >
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
