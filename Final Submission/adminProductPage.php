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
        <script src="adminProductPage.js"></script>
        <script src="adminUserPage.js"></script>
		<script src="modal.js"></script>
		<link rel="stylesheet" type="text/css" href="adminUpdateProductPage.css">
		<link rel="stylesheet" type="text/css" href="adminModalcss">
		<link rel="stylesheet" type="text/css" href="adminTable.css">
		<link rel="stylesheet" type="text/css" href="adminUserPage.css">
		<link rel="stylesheet" type="text/css" href="adminProductPage.css">
		<link rel="stylesheet" type="text/css" href="SignUp.css">
        <title>IPLBash HomePage</title>
        <style>
            .error{
                color: red;
                font-weight: bold;
            }
            form{
                padding-top: 100px;
            }
        </style>
    </head>
	<body onload="openDefaultTab()">

        <?php
            //Refer: https://www.geeksforgeeks.org/how-to-encrypt-and-decrypt-a-php-string/
            $ciphering = "AES-128-CTR"; // Store the cipher method             
            $iv_length = openssl_cipher_iv_length($ciphering); // Use OpenSSl Encryption method 
            $options = 0; 
            $encryption_iv = '1234567891011121'; // Non-NULL Initialization Vector for encryption 
            $encryption_key = "iplBASH"; // Store the encryption key 
        ?>
        
        <div class="navBarr">
            <?php
                include 'adminSideBar.php';
            ?>
        </div>

        <div class="mainContainer">
            <div class="pageHeader"> Product </div>

            <?php 
            // This is to access DataBase 
                include("Datasource.php");
            ?>

            <div class="productContainer">
                <button class="tabLink tabLink2" onclick="openPage('updateCategoryTab', this)" id="defaultOpen">Update or View A Category</button>
                <button class="tabLink tabLink2" onclick="openPage('updateProductTab', this)">Update or View A Product</button>
                <button class="tabLink tabLink2" onclick="openPage('addNewCategoryTab', this)">Add New Category</button>
                <button class="tabLink tabLink2" onclick="openPage('addNewProductTab', this)">Add New Product</button>
                <div class="productMainContainer">

                    <div id="updateCategoryTab" class="tabContent activeTabContent"> 
                        <?php 
                            include("adminProductPage-viewCategory.php");
                        ?>
                    </div>

                    <div id="updateProductTab" class="tabContent activeTabContent">
                        <?php 
                            include("adminProductPage-viewProduct.php");
                        ?>
                    </div>

                    <div id="addNewCategoryTab" class="tabContent activeTabContent">
                        <?php 
                            include("adminProductPage-addCategory.php");
                        ?>
                    </div>

                    <div id="addNewProductTab" class="tabContent activeTabContent">
                        <?php 
                            include("adminProductPage-addProduct.php");
                        ?>
                    </div>

                </div>

                <?php 
                    mysqli_close($conn);
                ?>
            </div>

	</body>
</html>