<html>
    <head>
        <title> application form</title>
        <link rel="stylesheet" href="../css/application.css">
    </head>

       <body>
           <h1 align="center">UNIVERSITY CERTIFICATE ALLOTMENT SYSTEM</h1>
    <br>


            <body>
        <div class ="application" >
            <form action="./application_con.php" method="POST" text-align="center"  align-items="center " >
                <h2>
                    APPLICATION FORM
                </h2>
                <input type="text" name="register" placeholder="Register number" required autofocus><br><br>
                <input type="text" name="name"  placeholder="Name" pattern="[A-Za-Z]" required>&emsp;&emsp;&emsp;
                <input type="text" name="commoncourse"  placeholder="common course 1" required>&emsp;
                <input type="number" name="cgpa"  placeholder="CGPA" required>&emsp;
                <input type="text" name="grade"  placeholder="grade" required><br><br>
                <input type="text" name="college"  placeholder="College Name" required>&emsp;&emsp;&emsp;
                <input type="text" name="commoncourse2"  placeholder="common course 2" required>&emsp;
                <input type="number" name="cgpa"  placeholder="CGPA" required>&emsp;
                <input type="text" name="grade"  placeholder="grade" required><br><br>
                <input type="text" name="programme"  placeholder="Name of programme" required>&emsp;&emsp;&emsp;
                <input type="text" name="corecourse"  placeholder="core course" required>&emsp;
                <input type="number" name="cgpa"  placeholder="CGPA" required>&emsp;
                <input type="text" name="grade"  placeholder="grade" required><br><br>
                <input type="text" name="model" placeholder="Model" required>&emsp;&emsp;&emsp;
                <input type="text" name="complementary"  placeholder="complementary course" required>&emsp;
                <input type="number" name="cgpa"  placeholder="CGPA" required>&emsp;
                <input type="text" name="grade"  placeholder="grade" required ><br><br>
                <input type="text" name="course1" placeholder="Complementary Course" required><br><br>
                <input type="text" name="course2"  placeholder="Open course " required><br><br>
                <input type="text" name="course3" placeholder="Optional/vocational course" required><br><br>
                <input type="text" name="address" placeholder="Address for Communication" required><br><br>
                <input type="text" name="phno"  placeholder="phone number" pattern="[0-9]+" maxlength="10" minlength="10" required><br><br>
                <input type="text" name="gender" placeholder="Gender" required autofocus><br><br>
                <button type="submit"  value="submit">SUBMIT</button> 
                <button type="reset"  value="clear">CLEAR</button>
            </form>
              <button>  <a href="./userhome.php">HOME</a></button>
           </div>
   </body>
</html>
