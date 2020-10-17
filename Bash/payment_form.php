<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Payment Gateway</title>
  <link rel="stylesheet" type="text/css" href="dropdown.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
.padder{
  padding-top: 15px;
}

.row{
  margin-Top: 100px;
}
label {
  color: orange;
  margin-bottom: 10px;
  display: block;
}

*{
	 box-sizing: border-box;
}

body {
	background-color: navy;
  font-family: Times new roman;
  color: orange;
  font-size: 17px;
}

.column1 {
    float: left;
    width: 30%;
    padding: 0 15px;
   
   
}
.column2 {
    float: left;
    width: 70%;
    padding: 0 15px;
}

input[type=checkbox] {
  width: 17%;
  margin-right: 5px;
}

input {
  width: 25%;
  margin-right: 20px;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.card {
  border-top: 1px solid white;
  border-radius: 5px;
  box-shadow: 0 4px 18px 0 white;
  padding: 20px;
  text-align: left;
  height:1100px;
  background-color: navy;
}

@media screen and (max-width: 600px) {
.column1 .column2 {
    width: 200%;
    display: block;
    margin-bottom: 20px;
  }
}

.column2 hr{
    border: 1px dashed silver;
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

.accordion {
  background-color: #eee;
  color: navy;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: 1.5px solid black;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  
}

.active, .accordion:hover {
  background-color: grey;
  opacity: 0.7; 
}

.panel {
  padding: 0 50px;
  display: none;
  overflow: hidden;
  height: 850px;
  background-color: orange;
  border: 1px solid grey;
  box-shadow: 0 4px 18px 0 grey;
  color: navy;
}

button{
  padding: 20px;
}

button:hover{
  background-color: grey;
}

	</style>
</head>

<body>
<div class="navBar">
      <?php
        include 'navBar.html';
        
      ?>
</div>
        <br>
	<div class="row">
  <div class="column2">
    <div class="card">
    <br>
    <button class="accordion">Payment Details </button>
    <div class="panel"><br><br>
         <label for="fname">Accepted Cards</label>
            <div class="icon-container">
            <input type="checkbox" class="check" id="card1" name="card1" value="Visa"><i class="fa fa-cc-visa" style="color:navy;"></i>
            <input type="checkbox" class="check" id="card2" name="card2" value="Amex"><i class="fa fa-cc-amex" style="color:blue;"></i>
            <input type="checkbox" class="check" id="card3" name="card3" value="Mastercard"><i class="fa fa-cc-mastercard" style="color:red;"></i>
            <input type="checkbox" class="check" id="card4" name="card4" value="Other"><i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" value="<?php echo''.$_SESSION['fname'].' '.$_SESSION['lname']; ?>">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <div class="padder">
              <label for="expmonth">Exp Month</label>
              <div class="custom-select" style="width:200px;">
              <select name="expmonth" id="expmonth">
              <option value="#">Month:</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
              </div>     
            </div>
            <div class="padder">
                <label for="expyear">Exp Year</label>
                <div class="custom-select" style="width:200px;">
                  <select name="expyear" id="expyear">
                    <option value="#">Year</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>  
                  </select>
              </div>   
            </div>
            <div class="padder">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="***">
            </div>
              <label>
              <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
            </label>
            <br>
            <form method="post" action="confirm_payment.php">
              <button type="submit">Confirm Payment</button>
            </form>
          </div>
     

        <button class="accordion">Shipping Details</button>
        <div class="panel">
        <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" value="<?php echo''.$_SESSION['fname'].' '.$_SESSION['fname']; ?>">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo''.$_SESSION['mail']; ?>">
            <label for="adr"><i class="fa fa-address-card"></i> Address</label>
            <input type="text" id="adr" name="address" value="<?php echo''.$_SESSION['address']; ?>">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Mumbai">
            <label for="state"><i class="fa fa-map-marker"></i> State</label>
            <div class="custom-select" style="width:200px;">
            <select name="state" id="state" class="form-control">
              <option value="#">State</option>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Chhattisgarh">Chhattisgarh</option>
              <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
              <option value="Daman and Diu">Daman and Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Lakshadweep">Lakshadweep</option>
              <option value="Puducherry">Puducherry</option>
              <option value="Goa">Goa</option>
              <option value="Gujarat">Gujarat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerala">Kerala</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Odisha">Odisha</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Telangana">Telangana</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Uttarakhand">Uttarakhand</option>
              <option value="West Bengal">West Bengal</option>
              </select>
              </div>
          
            <label for="zip">Zip</label>
            <input type="text" id="zip" name="zip" placeholder="400011">
            </div>
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
  <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

<script>
$(document).ready(function(){
    $('.check').click(function() {
        $('.check').not(this).prop('checked', false);
    });
});
</script>

<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
document.addEventListener("click", closeAllSelect);
</script>



</body>
</html>