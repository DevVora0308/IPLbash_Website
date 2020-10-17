<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="navBar.css">
    <link rel="stylesheet" type="text/css" href="teamPage.css">
    <link rel="stylesheet" type="text/css" href="homePage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
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

    /* Clear floats after the columns  */
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
      height:1000px;
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
	</style>
</head>

<body>
		<div class="navBarr" onload="activePage('fa-home')">
			<?php
				include 'navBar.html';
			?>
		</div>
    <div class="column2">
      <div class="card">
          <?php echo"<h2>WELCOME ".$_SESSION['fname']." ".$_SESSION['lname']." ;</h2>"; ?>
        <p align="left" style="color: black;"><b><i><u>PERSONAL INFORMATION</u></i></b></p><br><br>
        <label for="fname"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Full Name</label>
              <input type="text" id="fname" name="firstname" value='<?php echo$_SESSION["fname"];?>'>
              <input type="text" id="lname" name="lastname" value='<?php echo$_SESSION["lname"];?>'><br><hr><br>
          <label for="dob"><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;Date of Birth</label>
              <input type="text" id="dob" name="dob" value='<?php echo$_SESSION["dob"];?>'>
              <br><hr><br>
              <label for="mail"><i class="fa fa-envelope"></i>&nbsp;&nbsp;EMAIL ID</label>
              <input type="text" id="mail" name="mail" value='<?php echo$_SESSION["mail"];?>'><br><hr>
              <label for="mobile"><i class="fa fa-mobile"></i>&nbsp;&nbsp;Mobile No.</label>
              <input type="text" id="mob" name="mob" value='<?php echo$_SESSION["mobile"];?>'><br><hr>
              <label for="gender"><i class="fa fa-user"></i>&nbsp;&nbsp;GENDER</label>
              <input type="text" id="gender" name="gender" value='<?php echo$_SESSION["gender"];?>'><br><hr>
              <label for="address"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;ADDRESS</label>
              <input type="text" id="address" name="address" value='<?php echo$_SESSION["address"];?>'><br><hr>
              <label for="favteam"><i class="fas fa-heart"></i>&nbsp;&nbsp;FAVOURITE TEAM</label>
              <input type="text" id="favteam" name="favteam" value='<?php echo$_SESSION['favteam'];?>'><br><hr>
      </div>
    </div>
</body>
</html>