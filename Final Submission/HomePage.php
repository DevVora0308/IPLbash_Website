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
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
		<script src="slideShow.js"></script>
		<script src="storePage.js"></script>
		<link rel="stylesheet" type="text/css" href="slideShow.css">
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
				<img class="imgSlide" src="../image/0_All_8_Teams.jpg" alt="img1" style="width: 100%;">
				<div class="imgCaption"></div>
			</div>
			<div class="slides fade">
				<img class="imgSlide" src="../image/0_2_img.jpg" alt="img2" style="width: 100%;">
				<div class="imgCaption"></div>
			</div>
			<div class="slides fade">
				<img class="imgSlide" src="../image/0_All_8_Teams_2.jpg" alt="img3" style="width: 100%;">
				<div class="imgCaption"></div>
			</div>
			<div class="slides fade">
				<img class="imgSlide" src="../image/0_1_Trophy.jpg" alt="img4" style="width: 100%;">
				<div class="imgCaption"></div>
			</div>
			<div class="slides fade">
				<img class="imgSlide" src="../image/0_All_8_Teams_3.jpg" alt="img5" style="width: 100%;">
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

        <?php
            function teamImage($team){
                switch($team){
                    case "Chennai Super Kings": return "../image/Team1_CSK/1_0_CSK.jpg";
                    break;
                    case "Delhi Capitals": return "../image/Team2_DC/2_0_DC.jpg";
                    break;
                    case "Kings XI Punjab": return "../image/Team3_KXIP/3_0_KXIP.jpg";
                    break;
                    case "Kolkata Knight Riders": return "../image/Team4_KKR/4_0_KKR.jpg";
                    break;
                    case "Mumbai Indians": return "../image/Team5_MI/5_0_MI.png";
                    break;
                    case "Rajasthan Royals": return "../image/Team6_RR/6_0_RR.png";
                    break;
                    case "Royal Challengers Bangalore": return "../image/Team7_RCB/7_0_RCB.png";
                    break;
                    case "Sunrisers Hyderabad": return "../image/Team8_SH/8_0_SH.png";
                    break;
                }
            }
        ?>
		
		<div class="mainContainer">
			<div class="matchHistory">
				<div class="matchHistoryHeading">Match History</div>
					<div class="match js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": true, "autoPlay": true }'>
						<?php
							$match_id = 1175356;
							$matchNo = 0;
							while($match_id<=1175372)
							{
								// $api_url  = "http://cricapi.com/api/matches?apikey=0LgrVaqCqpenw6c3xh2iB2lTmPp1";
								$api_url = "https://cricapi.com/api/cricketScore?apikey=0LgrVaqCqpenw6c3xh2iB2lTmPp1&unique_id=$match_id";
								// $api_url = "https://cricapi.com/api/cricket?apikey=0LgrVaqCqpenw6c3xh2iB2lTmPp1";
								//  Initiate curl
								$ch = curl_init();
								// Disable SSL verification
								curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
								// Will return the response, if false it print the response
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								// Set the url
								curl_setopt($ch, CURLOPT_URL,$api_url);
								// Execute
								$result=curl_exec($ch);
								// Closing
								curl_close($ch);
								// Will dump a json - you can save in variable and use the json
								$currentMatch=json_decode($result,true);
								// echo "<pre>";
								// print_r($cricketMatches); 
								$matchNo++;
								$match_id++;
								$team1 = $currentMatch['team-1'];
								$team2 = $currentMatch['team-2'];
								$score = $currentMatch['score'];
						?>
							<div class="prevMatch">
								<div class="teamNo">T20 <?php echo $matchNo;?> of 24</div>
								<div class="teamDetails">
									<div class="team1">
										<div class="teamLogo"><img src="<?php echo teamImage($team1);?>" height="100px" width="100px" alt="<?php echo $team1;?>"></div>
										<div class="teamName"><?php echo $team1;?></div>
									</div>
									<div class="vs">vs</div>
									<div class="team2">
										<div class="teamLogo"><img src="<?php echo teamImage($team2);?>" height="100px" width="100px" alt="<?php echo $team2;?>"></div>
										<div class="teamName"><?php echo $team2;?></div>
									</div>
								</div>
								<div class="winDetails"><?php echo $score;?></div>
							</div>
						<?php
							}
						?>
					</div>
			</div>

			<div class="productList">
				<div class="productListHeading">Shop Gears and Jerseys</div>
				<div class="productContainer  js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": true, "autoPlay": true }'>
					
					<?php 
						// This is to fetch user details from DataBase 
						// if($currentCategory!="")
						//     $sql = "SELECT * FROM product WHERE Category_Id='$currentCategory'";
						// else
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
								//Refer: https://www.geeksforgeeks.org/how-to-encrypt-and-decrypt-a-php-string/
								// $encryptedId = openssl_encrypt($productId, $ciphering, $encryption_key, $options, $encryption_iv);
					?>

						<div class="productCard">
							<div class="productDescriptionDiv">
								<img class="productImage" src="<?php echo $productImageURL; ?>" alt="<?php echo $productImage; ?>">
							</div>
                            <span class="wishList tooltip">
                                <a href="addtowishlist.php?id=<?php echo $productId; ?>">
                                    <span class="far fa-heart heart" onmouseover="solidHeart(this)" onmouseout="borderHeart(this)" onclick="addWishList(this)">
                                        <span class="tooltipText">Add to Wish-List</span>
                                    </span>
                                </a>
                            </span>
							<div class="productName"><?php echo $productName; ?></div>
							<div class="productPrice">&#8377 <?php echo $productPrice; ?> /-</div>
							<div class="productButton">
								<a href="addtocart.php?id=<?php echo $productId; ?>">
									<div class="cart fa fa-shopping-cart" onmouseover="cartPlus(this)" onmouseout="normalCart(this)">
										<span class="cartText">Add To Cart</span>
									</div>
								</a>
							</div>
						</div>

					<?php 
							}
						}
					?>
					
				</div>
			</div>

			<div class="latestNews">
				<div class="latestNewsHeading">Latest News</div>
				<div class="newsContainer js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": true, "autoPlay": true }'>
					
					<?php 
						$sql = "SELECT * FROM news";
						$result = mysqli_query($conn, $sql);
						$totalItem = mysqli_num_rows($result);
						$var = 0;
						if($totalItem > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								$newsNo = ++$var;
								$newsId = $row['Id'];
								$newsHeadLine = $row['Headline'] ;
								$newsContent = $row['NewsContent'];
								$newsAuthor = $row['Author'];
								$newsInsertedBy = $row['Inserted_By'];
								$newsInsertedAt = $row['Inserted_At'];
								$newsUpdatedBy = $row['Updated_By'];
								$newsUpdatedAt = $row['Updated_At'];
					?>
						<div class="news">
							<div class="newsHeadline"><?php echo $newsHeadLine; ?></div>
							<div class="newsAuthor"><?php echo $newsAuthor; ?></div>
							<div class="newsContent">
								<?php echo $newsContent; ?>
							</div>
						</div>
					<?php 
							}
						}
					?>
			</div>
		</div>

		<footer class="footer">
			<?php
				include('Footer.html');
			?>
		</footer>

	</body>
</html>