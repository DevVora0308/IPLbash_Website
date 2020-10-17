<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>IPL Login Form</title>
	    <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <div class="container">
                <div class="img1"></div>
                <div class="img2"></div>

            <div class="regForm">
                    <form action="dblogin.php" method="POST">
                        <fieldset>
                        <?php
                            echo"<h2>WELCOME ".$_SESSION['fname']." ".$_SESSION['lname']." ;</h2>";
                            echo"<br><h4>Please Login to continue</h4>";
                        ?>
                        <label class="inpText" for="mail">Email ID:</label>
                            <input type="text" class="inpText" name="mail" id="mail" autocomplete="Off" value="<?php echo"".$_SESSION['mail']; ?>">
                            <br><br>
                            <label class="inpText" for="psd1">Password:</label>
                            <input class="inpText" type="Password" name="password" id="password" placeholder="********" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
                            <br><br>
                        <input type="submit" value="LOGIN" class="submitButton"><br><br>
                        <a href="forgottenPassword.php" class="forgotten">Forgotten Password?</a>
                    </fieldset>
                </form>
                <a href="login2.php" class="button">Login Using Another Account</a><br><br><br><br>
                <a href="signin.php" class="button">Create New Account</a>
        </div>

    </body>
</html>