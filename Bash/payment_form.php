<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>IPLBash - Payment Gateway</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="dropdown.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="storePage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f7dfb76570.js" crossorigin="anonymous"></script>

    <style>
      .padder{
        padding-top: 15px;
      }

      .row{
        margin-Top: 100px;
      }
      label {
        color: navy;
        margin-bottom: 10px;
        display: block;
        font-weight: bolder;
        font-size: x-large;
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

      input[type=radio] {
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

      .icon-container, .fname {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
        color: navy;
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
        background-color: orange;
        border: 1px solid grey;
        box-shadow: 0 4px 18px 0 grey;
        color: navy;
      }

      .panel1{
        height: 700px;
      }

      .panel2{
        height: 900px;
      }

      button{
        padding: 20px;
      }

      button:hover{
        background-color: grey;
      }

      .itemContainer{
        height: 600px;
        overflow-y: scroll;
      }
      /* width */
      .itemContainer::-webkit-scrollbar {
          width: 20px;
      }
        
        /* Track */
      .itemContainer::-webkit-scrollbar-track {
          box-shadow: inset 0 0 5px grey; 
          border-radius: 10px;
      }
        
        /* Handle */
      .itemContainer::-webkit-scrollbar-thumb {
          background: white; 
          border-radius: 10px;
      }

      /* Handle on hover */
      .itemContainer::-webkit-scrollbar-thumb:hover {
          background: rgb(255, 195, 173); 
      }

      .confirm{
        border-radius: 20px;
        background-color: orangered;
        color: navy;
        font-weight: bolder;
        font-size: x-large;
      }

      .price{
        font-size: x-large;
      }

      /* .fa{
        position: absolute;
        left: 0px;
        top: 0px;
        z-index: 1;
      } */

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
        <div class="panel panel1"><br><br>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy; font-size: xx-large;"></i>
                <i class="fa fa-cc-amex" style="color:blue; font-size: xx-large;"></i>
                <i class="fa fab fa-cc-mastercard" style="color:red; font-size: xx-large;"></i>
                <i class="fa fa-cc-discover" style="color:green; font-size: xx-large;"></i>
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
              </div>
        

            <button class="accordion">Shipping Details</button>
            <div class="panel panel2">
            <div class="container">
          <form action="confirm_payment.php" method="POST">
          
            <div class="row">
                <label for="sameadr">
                  <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label> 
                <h1>Billing Address</h1>
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
      <div class="card card2">
        <div class="black">
            <?php echo"<h2>Bill :<br/><small>Thankyou</small>, <i> ".$_SESSION['fname']." ".$_SESSION['lname']."</i></h2>"; ?>
            <?php
                include 'Datasource.php';
                $mail=$_SESSION['mail'];
                $query1 = "SELECT * from cart WHERE mail=?";
                $stmt = $conn->prepare($query1); 
                $stmt->bind_param("s", $mail);
                $stmt->execute();
                $result1 = $stmt->get_result();
                $totalProduct = mysqli_num_rows($result1);
                $totalPrice = 0;
                if($totalProduct > 0)
                {
              ?>
                <span class="price" style="color: orange"><i class="fa fa-shopping-cart"></i> Cart: <b><?php echo $totalProduct; ?></b></span>
                  <div class="itemContainer" style="margin: 0px;">
                <?php
                      while($row = $result1->fetch_assoc()){
                          $Product_Id = $row['Product_Id'];
                          $productName = $row['Product_Name'];
                          $Category_Id = $row['Category_Id'];
                          $productImage = $row['Image_Url'];
                          $productImageURL = "../image/shop/".$row['Image_Url'];
                          $productDescription = $row['Product_Description'];
                          $quantity = $row['Quantity'];;
                          $productPrice = $row['Product_Price'];
                          $totalPrice += $productPrice;
              ?>
                  <div class="itemCard">
                      <div class="itemImageDiv">
                          <img class="itemImage" src="<?php echo $productImageURL; ?>" alt="<?php echo $productImage; ?>">
                      </div>
                          <!-- <span class="wishList tooltip">
                              <a href="addtowishlist.php?id=<?php echo $productId; ?>">
                                  <span class="fas fa-heart heart" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                                      <span class="tooltipText">Add to Wish-List</span>
                                  </span>
                              </a>
                          </span> -->
                      <div class="itemDescription">
                          <div class="itemName"><?php echo $productName; ?></div>
                          <div class="itemPrice">&#8377 <?php echo $productPrice; ?>/-</div>
                          <div class="itemName desc2"><?php echo $productDescription; ?></div>
                          <!-- <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                              <a href="addtocart.php?id=<?php echo $productId; ?>">
                                  <span class="cartText">Added To Cart</span>
                              </a>
                          </div>
                          <div class="buyNow fa fa-shopping-bag">
                              <span class="buyText ">Buy Now</span>
                          </div> -->
                      </div>
                  </div>
              <?php 
                      }
                  }
                  else{
              ?>
                  <div class="itemCard noItemCard">
                      <div class="noItem">No Items in Cart</div>
                  </div>
              <?php
                  }
              ?>
              </div>    
            <hr>
            <p><span class="price" style="color: orange"><b>Total: &#8377 <?php echo $totalPrice; ?>/-</b></span></p>
                  <button type="submit" class="confirm">Confirm Payment</button>
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