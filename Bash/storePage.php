<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" type="text/css" href="footer.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="navBar.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		<link rel="stylesheet" type="text/css" href="storePage.css">
		<script src="storePage.js"></script>
		<title>IPlBash - Store</title>
	</head>
	<body >
		<div class="navBarr" onload="activePage('')">
			<?php
				include 'navBar.html';
			?>
        </div>
        
        <div class="itemContainer">
            <?php 
                include('Datasource.php');
                $sql = "SELECT * FROM product";
                //echo "Category: ".$currentCategory;
                $result = mysqli_query($conn, $sql);
                $totalProduct = mysqli_num_rows($result);
                $var = 0;
                if($totalProduct > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $productNo = ++$var;
                        $productId = $row['Product_Id'];
                        $productName = $row['Product_Name'] ;
                        $productCategory = $row['Category_Id'] ;
                        $productImage = $row['Image_URL'];
                        $productImageURL = "../image/shop/".$row['Image_URL'];
                        $productDescription = $row['Product_Description'];
                        $productQuantity = $row['Quantity'];
                        $productPrice = $row['Product_Price'];
                        $productInsertedBy = $row['Inserted_By'];
                        $productInsertedAt = $row['Inserted_At'];
                        $productUpdatedBy = $row['Updated_By'];
                        $productUpdatedAt = $row['Updated_At'];
                ?>
                    <div class="itemCard">
                        <div class="itemImageDiv">
                            <img class="itemImage" src="<?php echo $productImageURL; ?>" alt="<?php echo $productImage; ?>">
                        </div>
                            <span class="wishList tooltip">
                                <a href="addtowishlist.php?id=<?php echo $productId; ?>">
                                    <span class="fas fa-heart heart" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                                        <span class="tooltipText">Add to Wish-List</span>
                                    </span>
                                </a>
                            </span>
                        <div class="itemDescription">
                            <div class="itemName"><?php echo $productName; ?></div>
                            <div class="itemPrice">&#8377 <?php echo $productPrice; ?>/-</div>
                            <div class="itemName desc2"><?php echo $productDescription; ?></div>
                            <a class="carty" href="addtocart.php?id=<?php echo $productId; ?>">
                                <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                                    <span class="cartText">Add To Cart</span>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php 
                        }
                    }
                    else{
                ?>
                    <div class="itemCard noItemCard">
                        <div class="noItem">No Items in Store</div>
                    </div>
                <?php
                    }
                ?>
        </div>
        <a href="payment_form.php">
            <div class="buyNow payment2">
                <span class="payText fa  fa-credit-card"> Proceed to Payment  <i class="fa fa-arrow-right"></i></span>
            </div>
        </a>
		<footer class="footer">
			<?php
				include 'Footer.html';
			?>
		</footer>
    </body>
</html>