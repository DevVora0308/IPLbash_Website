<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Payment Gateway</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  
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
    width: 95%;
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
	<div class="row">
  <div class="column2">
    <div class="card">
    <br>
    <?php
        include 'payment_nav.php';
      ?>
         <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa"></i>
              <i class="fa fa-cc-amex"></i>
              <i class="fa fa-cc-mastercard"></i>
              <i class="fa fa-cc-discover"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
              <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
            </div>
            <br>
            <p style="padding-right:30px;"><button style="padding:15px;" type="button">Confirm Payment!</button></p>
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
</body>
</html>