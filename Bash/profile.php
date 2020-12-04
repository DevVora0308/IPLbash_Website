<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="navBar.css">
  <link rel="stylesheet" type="text/css" href="teamPage.css">
  <link rel="stylesheet" type="text/css" href="homePage.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>

*{
	 box-sizing: border-box;
}

body {
	background-color: navy;
  font-family: Times new roman;
  color: white;
  font-family: sans-sarif;
}

.column1 {
    float: left;
    width: 28%;
    padding: 0 10px;
   
   
}
.column2 {
    float: left;
    width: 100%;
    padding: 0 30px;
   margin-top:100px;
}

input[type=text] {
  width: 25%;
  margin-right: 20px;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

 Clear floats after the columns 
.row:after {
  content: "";
  display: table;
  clear: both;
}

.card {
  border-top: 1px solid white;
  border-radius: 5px;
  box-shadow: 0 4px 8px 0 white;
  padding: 30px;
  text-align: left;
  background-color: transparent;
  height:1300px;
}

@media screen and (max-width: 600px) {
  .column1 .column2 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

.column2 hr{
    border: 1px dashed silver;
}

input {
  width: 300px;
  height: 3em;
  color: navy;
}
 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden; 
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.navright {
    float:right;
}
.modal-body {
  color:black;
}
.modal-title {
  color:black;
}
input[type=radio] {
    border: 0px;
    width: 10%;
    height: 2em;
}
button, option, select{
    color: navy;
}
select, input{
  padding: 10px;
  border-radius: 10px;
}
	</style>
</head>  
<body>
		<div class="navBarr" onload="activePage('fa-home')">
			<?php
				include 'navBar.html';
			?>
		</div>
    <?php
      $flag = true;
      $fNameErr = $lNameErr = $genderErr = $mobileNoErr = $emailErr = $dobErr = $password1Err = $password2Err = $addressErr = $favTeamErr = "*";
      if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST['update']))
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
          if(empty($_POST['favTeam'])) { 
              $favTeamErr = "Please select your favourite Team"; 
              $flag = false;
          }
          else
          {
              $favTeam= $_POST['favTeam'];
              $favTeamErr = "";
          }
          if($flag)
          {
              $_SESSION['data'] = $_POST; 
              echo "<script>window.location.href='updateProfile.php';</script>";
              exit;
          }
      }
      $mail=$_SESSION['mail'];
      include 'Datasource.php';
        $query1 = "SELECT * from signup WHERE mail='$mail'";
        $result1 = mysqli_query($conn,$query1);
        $count = mysqli_num_rows($result1);
        if($count>=0){
          while($row=mysqli_fetch_assoc($result1)){
            $mail=$row['mail'];
            $pass=$row['pass'];
            $fname=$row['fname'];
            $lname=$row['lname'];
            $gender=$row['gender'];
            $dob=$row['dob'];
            $mobile=$row['mobile'];
            $address=$row['address'];
            $usertype=$row['user'];
            $favteam=$row['favteam'];
          }
        }
        mysqli_close($conn);
    ?>
  <div class="column2">
    <div class="card">
        <?php echo"<h2>WELCOME ".$_SESSION['fname']." ".$_SESSION['lname']." ;</h2>"; ?>
    	<p align="left" style="color: white;"><b><i><u>PERSONAL INFORMATION</u></i></b></p><br><br>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <fieldset>
            <label class="inpText" for="fName">First Name: </label>
            <input type="text" class="inpText" name="fName" id="fname" autocomplete="Off" placeholder="First Name" value="<?php echo $fname?>">
            <span class="error"><?php echo $fNameErr;?></span>
            <br><br>
            <label class="inpText" for="lName">Last Name: </label>
            <input type="text" class="inpText" name="lName" id="lname" autocomplete="Off" placeholder="Last Name" value="<?php echo $lname?>">
            <span class="error"><?php echo $lNameErr;?></span>
            <br><br>
            <label class="inpText" for="gender">Gender: </label>
            <input class="inpText" type="text" name="gender" id="gender" value="<?php echo $gender?>">
            <span class="error"><?php echo $genderErr;?></span>
            <br><br>
            <label class="inpText" for="dob">Birth Date: </label>
            <input type="date" name="birthDate" id="dob" max="2010-12-31" min="1910-12-31" value="<?php echo $dob?>">
            <span class="error"><?php echo $dobErr;?></span>
            <br><br>
            <label class="inpText" for="Contact_Mobile">Mobile No.: </label>
            <input class="inpText" type="tel" id="mobile" name="Mobile_No" autocomplete="On" placeholder="9857641895" pattern="[0-9]{10}"  value="<?php echo $mobile?>"> 
            <span class="error"><?php echo $mobileNoErr;?></span> 
            <br><br>
            <label class="inpText" for="mail">Email Id.: </label>
            <input class="inpText" type="email" name="email" id="mail" readonly autocomplete="On" placeholder="example@air.com" value="<?php echo $mail?>">
            <span class="error"><?php echo $emailErr;?></span> 
            <br><br>
            <label class="inpText address" for="Address">Address: </label>
            <input type="text" class="inpText" name="Address" id="address" rows="3" cols="30" placeholder="Enter Your Address..." autocomplete="off" value="<?php echo $address?>">
            <span class="error address"><?php echo $addressErr;?></span> 
            <br><br>
            <label>Your favorite Team: </label>
            <input class="inpText" name="favTeam" id="favteam" value="<?php echo $favteam?>">
            <span class="error"><?php echo $favTeamErr;?></span> 
        </fieldset>
        <br><br>
        <input type="submit" value="UPDATE" name="update" class="button">
    </form>
    </div>
  </div>
</body>
</html>