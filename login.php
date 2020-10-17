<!DOCTYPE html>
<html>
    <head>
        <title>IPL Login Form</title>
	    <link rel="stylesheet" type="text/css" href="SignUp.css">
    </head>
    <body>
        <div class="container">
                <div class="img1"></div>
                <div class="img2"></div>

            <div class="regForm">
                    <form action="dblogin.php" method="POST">
                        <fieldset>
                        <?php
                            echo"<h2>WELCOME ".$_COOKIE['fname']." ".$_COOKIE['lname']." ;</h2>";
                            echo"<br><h4>Please Login to continue</h4>";
                        ?>
                        <label class="inpText" for="mail">Email ID:</label>
                            <input type="text" class="inpText" name="mail" id="mail" autocomplete="Off" placeholder="Email ID" value="<?php echo"".$_COOKIE['mail']; ?>">
                            <br><br>
                            <label class="inpText" for="psd1">Password:</label>
                            <input class="inpText" type="Password" name="password" id="password" placeholder="********" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
                            <br><br>
                            <p>NEW USER...?<a href="signin.php"> SIGNIN</a></p><br><br>
                            <p>LOGIN USING ANOTHER ACCOUNT..<a href="login2.php"> CLICK HERE</a></p><br><br>
                        </fieldset>
                        <input type="submit" value="LOGIN" class="button">
                    </form>
                </div>
        </div>

    </body>
</html>