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
		<div class="navBarr">
			<?php
				include 'navBar.html';
			?>
        </div>
        
        <div class="itemContainer">
            <div class="itemCard noItemCard">
                <div class="noItem">
                <i class="fas fa-exclamation-triangle" style="font-size: 100px; color: orangered;"></i><br><br><h5>This feature is Not yet available!!</h5>Please Contact Admin!!</div>
            </div>
        </diV>
		<footer class="footer">
			<?php
				include 'Footer.html';
			?>
		</footer>
    </body>
</html>