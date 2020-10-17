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

            <?php
                $flag = true;
               $emailErr = $password1Err = $password2Err = "*"; 
               if ($_SERVER["REQUEST_METHOD"] == "POST")
               {
                   if(empty($_POST["email"]))
                    {
                        $emailErr = "Error:Please Enter Email Id";
                        $flag = false;
                    }
                    else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
                    {
                        $emailErr = "Invalid email format";
                        $flag = false;
                    }
                    else
                    {
                        $emailId = $_POST['email'];
                        $emailErr = "";
                        $userName = $emailId;
                    }

                    if(empty($_POST["password1"]))
                    {
                        $password1Err = "Error:Please Enter Password";
                        $flag = false;
                    }
                    else
                    {
                        $password1 = $_POST['password1'];
                        $password1Err = "";
                    }

                    if(empty($_POST["password2"]))
                    {
                        $password2Err = "Error:Please Enter Password";
                        $flag = false;
                    }
                    else if($password1!=$_POST['password2']) 
                    {
                        $password2Err = "Both Passwords do <b>not</b> match";
                        $flag = false;
                    }
                    else
                    {
                        $password2 = $_POST['password2'];
                        $password1Err = "";
                    }
                    if($flag)
                    {
                        include("Datasource.php");

                        $query1 = "UPDATE signup SET pass= '$password1' WHERE mail='$emailId'";
                        $result1 = mysqli_query($conn,$query1);
                    
                        mysqli_close($conn);
                        header('Location: passwordChanged.php');
                    }
               }
            ?>

            <div class="regForm">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <fieldset>
                        <br><br>
                        <label class="inpText" for="mail">Email Id.: </label>
                        <span class="error"><?php echo $emailErr;?></span> 
                        <input class="inpText" type="email" name="email" id="mail" autocomplete="On" placeholder="example@air.com">
                        <br><br>
                        <label class="inpText" for="psd1">Password: </label>
                        <span class="error"><?php echo $password1Err;?></span> 
                        <input class="inpText" type="Password" name="password1" id="password1" placeholder="********" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
                        <br><br>
                        <label class="inpText" for="psd2">Confirm Password: </label>
                        <span class="error"><?php echo $password2Err;?></span> 
                        <input class="inpText" type="Password" name="password2" id="password2" placeholder="********" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                        <br><br>
                        <input type="submit" value="Change Password" class="submitButton"><br><br>
                    </fieldset>
                </form>
            </div>
        </div>

    </body>
</html>