<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment Gateway</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<style>

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}


*{
	 box-sizing: border-box;
}

body {
	background-color: grey;
  font-family: Times new roman;
  color: white;
  font-size: 17px;
}

.column1 {
    float: left;
    width: 30%;
    padding: 0 10px;
   
   
}
.column2 {
    float: left;
    width: 70%;
    padding: 0 30px;
}

input[type=text] {
  width: 35%;
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
  height:1000px;
}

@media screen and (max-width: 600px) {
  .column1 .column2 {
    width: 95%;
    display: block;
    margin-bottom: 20px;
  }
}

.column2 hr{
    border: 1px dashed silver;
}

input {
  width: 500px;
  height: 3em;
}
input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.black {
  color: black;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.container {
  padding: 5px 20px 15px 20px;
  border-radius: 3px;
}

	</style>
</head>

<body>
		<div class="navBarr" onload="activePage('fa-home')">
			<?php
				include 'navBar.html';
			?>
		</div>
</div>
	<div class="row">
    <div class="column2">
    <div class="card">
    <br>
    <?php
        include 'payment_nav_payment.php';
      ?>
       
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">
            <label for="state"><i class="fa fa-map-marker"></i>State</label>
            <input type="text" id="state" name="state" placeholder="NY">
            <label for="zip">Zip</label>
            <input type="text" id="zip" name="zip" placeholder="10001">
            </div>
        </div>
        </div>
    </div>
   
  

  <div class="column1">
    <div class="card">
      <div class="black">
        <?php echo"<h2> Please Checkout :</h2><h3><i><u>".$_SESSION['fname']." ".$_SESSION['lname']."</i></u></h3>"; ?>
        <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>

    
    
    </div>   
  </div>
</div>
</body>
</html>