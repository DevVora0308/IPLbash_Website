<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>IPL Registration Form</title>
	    <link rel="stylesheet" type="text/css" href="signUp.css">
    </head>
    <body>
        <div class="container">
                <div class="img1"></div>
                <div class="img2"></div>
            <?php
                $flag = true;
                $fNameErr = $lNameErr = $genderErr = $mobileNoErr = $emailErr = $dobErr = $password1Err = $password2Err = $addressErr = $favTeamErr = "*";
                if ($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    if(empty($_POST["fName"]))
                    {
                        $fNameErr = "Error:Please Enter First Name";
                        $flag = false;
                    }
                    else
                    {
                        $fName = $_POST['fName'];
                        $fNameErr = "";
                    }

                    if(empty($_POST["lName"]))
                    {
                        $lNameErr = "Error:Please Enter Last Name";
                        $flag = false;
                    }
                    else
                    {
                        $lName = $_POST['lName'];
                        $lNameErr = "";
                    }

                    if(empty($_POST["gender"]))
                    {
                        $genderErr = "Error:Please Select Gender";
                        $flag = false;
                    }
                    else
                    {
                        $sex = $_POST['gender'];
                    }

                    if(empty($_POST["birthDate"]))
                    {
                        $dobErr = "Error:Please Birth Date";
                        $flag = false;
                    }
                    else
                    {
                        $dob = $_POST['birthDate'];
                        $dobErr = "";
                    }

                    if(empty($_POST["Mobile_No"]))
                    {
                        $mobileNoErr = "Error:Please Enter Mobile No";
                        $flag = false;
                    }
                    else
                    {
                        $mobileNo = $_POST['Mobile_No'];
                        $mobileNoErr = "";
                    }

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

                    if(empty($_POST["Address"]))
                    {
                        $addressErr = "Error:Please Enter Address";
                        $flag = false;
                    }
                    else
                    {
                        $address = $_POST['Address'];
                        $addressErr = "";
                    }

                    if(empty($_POST["password1"]))
                    {
                        $password1Err = "Error:Please Enter Password";
                        $flag = false;
                    }
                    // else if(!preg_match("/^(?=.*\d)(?=.*?[a-zA-Z])(?=.*?[\W_]).{6,10}$",$_POST["password1"])) 
                    // {
                    //     $password1Err = "Please rewrite the password with required format.<small>(Hover to see the format)</small>".($_POST["password1"]);
                    //     $flag = false;
                    // }
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
                    // else if(!preg_match("/^(?=.*\d)(?=.*?[a-zA-Z])(?=.*?[\W_]).{6,10}$",$_POST["password2"])) 
                    // {
                    //     $password2Err = "Please rewrite the password with required format.<small>(Hover to see the format)</small>".($_POST["password2"]);
                    //     $flag = false;
                    // }
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

                    if(isset($_REQUEST['favTeam']) && $_REQUEST['favTeam'] == 'default') { 
                        $favTeamErr = "Please select your favourite Team"; 
                        $flag = false;
                    }
                    else
                    {
                        $favTeamErr = "";
                    }
                    if($flag)
                    {
                        $_SESSION['data'] = $_POST; 
                        header('Location: dbsignup.php');
                    }
                }
            ?>
            <div class="regForm">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <fieldset>
                            <input type="text" class="inpText" name="fName" id="fname" autocomplete="Off" placeholder="First Name">
                            <span class="error"><?php echo $fNameErr;?></span>
                            <br><br>
                            <input type="text" class="inpText" name="lName" id="lname" autocomplete="Off" placeholder="Last Name">
                            <span class="error"><?php echo $lNameErr;?></span>
                            <br><br>
                            Gender:
                            <span class="error"><?php echo $genderErr;?></span>
                            <input class="inpText" type="radio" name="gender" id="gender" value="Male">
                            <label class="inpText" for="male">Male</label>
                            <input class="inpText" type="radio" name="gender" id="gender" value="Female">
                            <label class="inpText" for="female">Female</label>
                            <input class="inpText" type="radio" name="gender" id="gender" value="Other">
                            <label class="inpText" for="other">Other</label> 
                            <br><br>
                            <label class="inpText" for="dob">Birth Date: </label>
                            <span class="error"><?php echo $dobErr;?></span>
                            <input type="date" name="birthDate" id="dob" max="2010-12-31" min="1910-12-31">
                            <br><br>
                            <label class="inpText" for="Contact_Mobile">Mobile No.: </label>
                            <span class="error"><?php echo $mobileNoErr;?></span> 
                            <input class="inpText" type="tel" id="mobile" name="Mobile_No" autocomplete="On" placeholder="9857641895" pattern="[0-9]{10}"> 
                            <br><br>
                            <label class="inpText" for="mail">Email Id.: </label>
                            <span class="error"><?php echo $emailErr;?></span> 
                            <input class="inpText" type="email" name="email" id="mail" autocomplete="On" placeholder="example@air.com">
                            <br><br>
                            <label class="inpText address" for="Address">Address: </label>
                            <span class="error address"><?php echo $addressErr;?></span> 
                            <textarea class="inpText" name="Address" id="address" rows="3" cols="30" placeholder="Enter Your Address..." autocomplete="off"></textarea>
                            <br><br>
                            <label class="inpText" for="psd1">Password: </label>
                            <span class="error"><?php echo $password1Err;?></span> 
                            <input class="inpText" type="Password" name="password1" id="password1" placeholder="********" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
                            <br><br>
                            <label class="inpText" for="psd2">Confirm Password: </label>
                            <span class="error"><?php echo $password2Err;?></span> 
                            <input class="inpText" type="Password" name="password2" id="paassword2" placeholder="********" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                            <br><br>
                            <label>Your favorite Team: </label>
                            <span class="error"><?php echo $favTeamErr;?></span> 
                            <select class="team" name="favTeam" id="favteam">
                                <option value="default" diabled></option>
                                <option value="Chennai Super Kings">Chennai Super Kings</option>
                                <option value="Mumbai Indians">Mumbai Indians</option>
                                <option value="Royal Challengers Bangalore">Royal Challengers Bangalore</option>
                                <option value="Kolakata Knight Riders">Kolakata Knight Riders</option>
                                <option value="Sunrises Hyderabad">Sunrises Hyderabad</option>
                                <option value="Kings XI Punjab">Kings XI Punjab</option>
                                <option value="Delhi Capitals">Delhi Capitals</option>
                                <option value="Rajasthan Royals">Rajasthan Royals</option>
                            </select>
                            <p>ALREADY A USER...?<a href="login.php"> LOGIN</a></p>
                        </fieldset>
                        <input type="submit" value="REGISTER" name="register" class="button">
                    </form>
                </div>
        </div>
    </body>
</html>