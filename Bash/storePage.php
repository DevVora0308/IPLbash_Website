<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" type="text/css" href="footer.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="navBar.css">
		<link rel="stylesheet" type="text/css" href="homePage.css">
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
            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/1_Jersey_MI_2020.webp" alt="Jersey_MI_2020"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">MI Jersey</div>
                    <div class="itemPrice">&#8377 5000/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/2_Jersey_CSK_2020.jpg" alt="Jersey_CSK_2020"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">CSK Jersey</div>
                    <div class="itemPrice">&#8377 5000/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/3_Jersey_SH_2020.png" alt="Jersey_CSK_2020"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">SH Jersey</div>
                    <div class="itemPrice">&#8377 5000/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/4_Jersey_KXIP_2020.png" alt="Jersey_CSK_2020"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">KXIP Jersey</div>
                    <div class="itemPrice">&#8377 5000/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/5_Jersey_KKR_2020.jpg" alt="Jersey_CSK_2020"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">KKR Jersey</div>
                    <div class="itemPrice">&#8377 5000/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/6_Jersey_DC_2020.webp" alt="Jersey_DC_2020"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">DC Jersey</div>
                    <div class="itemPrice">&#8377 5000/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/7_Jersey_RR_2020.png" alt="Jersey_RR_2020"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">RR Jersey</div>
                    <div class="itemPrice">&#8377 5000/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/8_Jersey_RCB_2020.png" alt="Jersey_RCB_2020"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">RCB Jersey</div>
                    <div class="itemPrice">&#8377 5000/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/9_Bat_1.png" alt="Bat_1"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">Cricket Bat</div>
                    <div class="itemPrice">&#8377 3500/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/9_Bat_2.png" alt="Bat_2"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">Cricket Bat</div>
                    <div class="itemPrice">&#8377 3500/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/9_Bat_3.png" alt="Bat_3"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">Cricket Bat</div>
                    <div class="itemPrice">&#8377 3500/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/9_Bat_4.png" alt="Bat_4"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">Cricket Bat</div>
                    <div class="itemPrice">&#8377 3500/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/10_ball_1.png" alt="Ball_1"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">Cricket Season Ball</div>
                    <div class="itemPrice">&#8377 2500/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/10_ball_2.png" alt="Ball_2"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">Cricket Season Ball</div>
                    <div class="itemPrice">&#8377 2500/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/10_ball_3.png" alt="Ball_3"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">Cricket Season Ball</div>
                    <div class="itemPrice">&#8377 2500/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

            <div class="itemCard">
                <div class="itemImageDiv"><img class="itemImage" src="image/shop/10_ball_4.png" alt="Ball_4"></div>
                <span class="wishList tooltip">
                    <span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                        <span class="tooltipText">Add to Wish-List</span>
                    </span>
                </span>
                <div class="itemDescription">
                    <div class="itemName">Cricket Season Ball</div>
                    <div class="itemPrice">&#8377 2500/-</div>
                    <div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
                        <span class="cartText">Add To Cart</span>
                    </div>
                    <div class="buyNow fa fa-shopping-bag">
                        <span class="buyText ">Buy Now</span>
                    </div>
                </div>
            </div>

        </div>

		<footer class="footer">
			<?php
				include 'Footer.html';
			?>
		</footer>
    </body>
</html>