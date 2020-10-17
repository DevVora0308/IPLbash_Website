<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <link rel="stylesheet" type="text/css" href="footer.css"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
		<script src="slideShow.js"></script>
		<link rel="stylesheet" type="text/css" href="slideShow.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		<link rel="stylesheet" type="text/css" href="homePage.css">
		<title>IPLBash HomePage</title>
	</head>
	<body onload="currentSlide(1)">

		<div class="navBarr" onload="activePage('fa-home')">
			<?php
				include 'navBar.html';
			?>
		</div>
		
		<div class="slideShowContainer">
			<div class="slides fade">
				<img class="imgSlide" src="image/0_All_8_Teams.jpg" alt="img1" style="width: 100%;">
				<div class="imgCaption"></div>
			</div>
			<div class="slides fade">
				<img class="imgSlide" src="image/0_2_img.jpg" alt="img2" style="width: 100%;">
				<div class="imgCaption"></div>
			</div>
			<div class="slides fade">
				<img class="imgSlide" src="image/0_All_8_Teams_2.jpg" alt="img3" style="width: 100%;">
				<div class="imgCaption"></div>
			</div>
			<div class="slides fade">
				<img class="imgSlide" src="image/0_1_Trophy.jpg" alt="img4" style="width: 100%;">
				<div class="imgCaption"></div>
			</div>
			<div class="slides fade">
				<img class="imgSlide" src="image/0_All_8_Teams_3.jpg" alt="img5" style="width: 100%;">
				<div class="imgCaption"></div>
			</div>
			<!-- <div> Next and Previous Button </div> -->
			<a onclick="pushSlides(-1)" class="prev">&#10094;</a>
			<a onclick="pushSlides(1)" class="next">&#10095;</a>
			<div class="slideShowDot">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
				<span class="dot" onclick="currentSlide(4)"></span>
				<span class="dot" onclick="currentSlide(5)"></span>
			</div>
		</div>
		
		<div class="mainContainer">

			<div class="matchHistory">
				<div class="matchHistoryHeading">Match History</div>
				<div class="match js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": true, "autoPlay": true }'>
					<div class="prevMatch">
						<div class="teamNo">T20 1 of 56</div>
						<div class="matchDate">Sat, 19/09</div>
						<div class="teamDetails">
							<div class="team1">
								<div class="teamLogo"><img src="image/Team5_MI/5_0_MI.png" height="80px" width="80px" alt="team1"></div>
								<div class="teamName">MI</div>
								<div class="score">162/9 (20)</div>
							</div>
							<div class="vs">vs</div>
							<div class="team2">
								<div class="teamLogo"><img src="image/Team1_CSK/1_0_CSK.jpg" height="80px" width="80px" alt="team2"></div>
								<div class="teamName">CSK</div>
								<div class="score">166/5 (19.2)</div>
							</div>
						</div>
						<div class="winDetails">CSK Won by 5 wickets (4 balls left).</div>
					</div>

					<div class="prevMatch">
						<div class="teamNo">T20 2 of 56</div>
						<div class="matchDate">Sun, 20/09</div>
						<div class="teamDetails">
							<div class="team1">
								<div class="teamLogo"><img src="image/Team2_DC/2_0_DC.jpg" height="80px" width="80px" alt="team1"></div>
								<div class="teamName">DC</div>
								<div class="score">157/8 & 3/0 Target 3</div>
							</div>
							<div class="vs">vs</div>
							<div class="team2">
								<div class="teamLogo"><img src="image/Team3_KXIP/3_0_KXIP.jpg" height="80px" width="80px" alt="team2"></div>
								<div class="teamName">KXIP</div>
								<div class="score">157/8 & 2/2</div>
							</div>
						</div>
						<div class="winDetails">DC Won the Super Over (4 balls left).</div>
					</div>
					<div class="prevMatch">
						<div class="teamNo">T20 3 of 56</div>
						<div class="matchDate">Mon, 21/09</div>
						<div class="teamDetails">
							<div class="team1">
								<div class="teamLogo"><img src="image/Team7_RCB/7_0_RCB.png" height="80px" width="80px" alt="team1"></div>
								<div class="teamName">RCB</div>
								<div class="score">163/5 (20)</div>
							</div>
							<div class="vs">vs</div>
							<div class="team2">
								<div class="teamLogo"><img src="image/Team8_SH/8_0_SH.png" height="80px" width="80px" alt="team2"></div>
								<div class="teamName">SRH</div>
								<div class="score">153 (19.4)</div>
							</div>
						</div>
						<div class="winDetails">RCB Won by 10 runs.</div>
					</div>
					<div class="prevMatch">
						<div class="teamNo">T20 4 of 56</div>
						<div class="matchDate">Tue, 22/09</div>
						<div class="teamDetails">
							<div class="team1">
								<div class="teamLogo"><img src="image/Team6_RR/6_0_RR.png" height="80px" width="80px" alt="team1"></div>
								<div class="teamName">RR</div>
								<div class="score">216/7 (20)</div>
							</div>
							<div class="vs">vs</div>
							<div class="team2">
								<div class="teamLogo"><img src="image/Team1_CSK/1_0_CSK.jpg" height="80px" width="80px" alt="team2"></div>
								<div class="teamName">CSK</div>
								<div class="score">200/6 (20)</div>
							</div>
						</div>
						<div class="winDetails">RR Won by 16 runs.</div>
					</div>
				</div>
			</div>

			<div class="productList">
				<div class="productListHeading">Shop Gears and Jerseys</div>
				<div class="productContainer  js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": true, "autoPlay": true }'>
					<div class="productCard">
						<div class="productDescriptionDiv">
							<img class="productImage" src="image/shop/1_Jersey_MI_2020.webp" alt="Jersey_MI_2020">
						</div>
						<span class="wishList tooltip">
							<span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
								<span class="tooltipText">Add to Wish-List</span>
							</span>
						</span>
						<div class="productName">MI Jersey</div>
						<div class="productPrice">&#8377 5000/-</div>
						<div class="productButton">
							<div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
								<span class="cartText">Add To Cart</span>
							</div>
							<div class="buyNow fa fa-shopping-bag">
								<span class="buyText ">Buy Now</span>
							</div>
						</div>
					</div>

					<div class="productCard">
						<div class="productDescriptionDiv">
							<img class="productImage" src="image/shop/2_Jersey_CSK_2020.jpg" alt="Jersey_CSK_2020">
						</div>
						<span class="wishList tooltip">
							<span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
								<span class="tooltipText">Add to Wish-List</span>
							</span>
						</span>
						<div class="productName">CSK Jersey</div>
						<div class="productPrice">&#8377 5000/-</div>
						<div class="productButton">
							<div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
								<span class="cartText">Add To Cart</span>
							</div>
							<div class="buyNow fa fa-shopping-bag">
								<span class="buyText ">Buy Now</span>
							</div>
						</div>
					</div>

					<div class="productCard">
						<div class="productDescriptionDiv">
							<img class="productImage" src="image/shop/3_Jersey_SH_2020.png" alt="Jersey_SH_2020">
						</div>
						<span class="wishList tooltip">
							<span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
								<span class="tooltipText">Add to Wish-List</span>
							</span>
						</span>
						<div class="productName">SRH Jersey</div>
						<div class="productPrice">&#8377 5000/-</div>
						<div class="productButton">
							<div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
								<span class="cartText">Add To Cart</span>
							</div>
							<div class="buyNow fa fa-shopping-bag">
								<span class="buyText ">Buy Now</span>
							</div>
						</div>
					</div>

					<div class="productCard">
						<div class="productDescriptionDiv">
							<img class="productImage" src="image/shop/4_Jersey_KXIP_2020.png" alt="Jersey_KXIP_2020">
						</div>
						<span class="wishList tooltip">
							<span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
								<span class="tooltipText">Add to Wish-List</span>
							</span>
						</span>
						<div class="productName">KXIP Jersey</div>
						<div class="productPrice">&#8377 5000/-</div>
						<div class="productButton">
							<div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
								<span class="cartText">Add To Cart</span>
							</div>
							<div class="buyNow fa fa-shopping-bag">
								<span class="buyText ">Buy Now</span>
							</div>
						</div>
					</div>

					<div class="productCard">
						<div class="productDescriptionDiv">
							<img class="productImage" src="image/shop/5_Jersey_KKR_2020.jpg" alt="Jersey_KKR_2020">
						</div>
						<span class="wishList tooltip">
							<span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
								<span class="tooltipText">Add to Wish-List</span>
							</span>
						</span>
						<div class="productName">KKR Jersey</div>
						<div class="productPrice">&#8377 5000/-</div>
						<div class="productButton">
							<div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
								<span class="cartText">Add To Cart</span>
							</div>
							<div class="buyNow fa fa-shopping-bag">
								<span class="buyText ">Buy Now</span>
							</div>
						</div>
					</div>

					<div class="productCard">
						<div class="productDescriptionDiv">
							<img class="productImage" src="image/shop/6_Jersey_DC_2020.webp" alt="Jersey_DC_2020">
						</div>
						<span class="wishList tooltip">
							<span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
								<span class="tooltipText">Add to Wish-List</span>
							</span>
						</span>
						<div class="productName">DC Jersey</div>
						<div class="productPrice">&#8377 5000/-</div>
						<div class="productButton">
							<div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
								<span class="cartText">Add To Cart</span>
							</div>
							<div class="buyNow fa fa-shopping-bag">
								<span class="buyText ">Buy Now</span>
							</div>
						</div>
					</div>

					<div class="productCard">
						<div class="productDescriptionDiv">
							<img class="productImage" src="image/shop/bat.png" alt="bat_2020">
						</div>
						<span class="wishList tooltip">
							<span class="fa fa-heart-o" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
								<span class="tooltipText">Add to Wish-List</span>
							</span>
						</span>
						<div class="productName">Cricket Bat</div>
						<div class="productPrice">&#8377 3500/-</div>
						<div class="productButton">
							<div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
								<span class="cartText">Add To Cart</span>
							</div>
							<div class="buyNow fa fa-shopping-bag">
								<span class="buyText ">Buy Now</span>
							</div>
						</div>
					</div>
					
				</div>
			</div>

			<div class="latestNews">
				<div class="latestNewsHeading">Latest News</div>
			</div>
		</div>

		<footer class="footer">
			<?php
				include 'Footer.html';
			?>
		</footer>

	</body>
</html>