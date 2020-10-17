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

            ?>
            <div class="regForm">
                    <form action="dbsignup.php" method="POST">
                        <fieldset>
                            <input type="text" class="inpText" name="fname" id="fname" autocomplete="Off" placeholder="First Name">
                            <br><br>
                            <input type="text" class="inpText" name="lname" id="lname" autocomplete="Off" placeholder="Last Name">
                            <br><br>
                            Gender: 
                            <input class="inpText" type="radio" name="gender" id="gender" value="Male">
                            <label class="inpText" for="male">Male</label>
                            <input class="inpText" type="radio" name="gender" id="gender" value="Female">
                            <label class="inpText" for="female">Female</label>
                            <input class="inpText" type="radio" name="gender" id="gender" value="Other">
                            <label class="inpText" for="other">Other</label> 
                            <br><br>
                            <label class="inpText" for="dob">Birth Date: </label>
                            <input type="date" name="dob" id="dob" max="2010-12-31" min="1910-12-31">
                            <br><br>
                            <label class="inpText" for="Contact_Mobile">Mobile No.:</label>
                            <input class="inpText" type="tel" id="mobile" name="mobile" autocomplete="On" placeholder="54-454-68-452" pattern="[0-9]{10}"> 
                            <br><br>
                            <label class="inpText" for="mail">Email Id.: </label>
                            <input class="inpText" type="email" name="mail" id="mail" autocomplete="On" placeholder="Example@air.com">
                            <br><br>
                            <label class="inpText address" for="Address">Address: </label>
                            <textarea class="inpText" name="address" id="address" rows="3" cols="30" placeholder="Enter Your Address..." autocomplete="off"></textarea>
                            <br><br>
                            <label class="inpText" for="psd1">Password:</label>
                            <input class="inpText" type="Password" name="password1" id="password1" placeholder="********" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
                            <br><br>
                            <label class="inpText" for="psd2">Confirm Password:</label>
                            <input class="inpText" type="Password" name="password2" id="paassword2" placeholder="********" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                            <br><br>
                            <label>Your favorite Team:</label> 
                            <select class="team" name="favteam" id="favteam">
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
                        <input type="submit" value="REGISTER" class="button">
                    </form>
                </div>
        </div>
    </body>
</html>