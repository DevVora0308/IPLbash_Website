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
		<link rel="stylesheet" type="text/css" href="adminUserPage.css">
		<link rel="stylesheet" type="text/css" href="adminProductPage.css">
		<link rel="stylesheet" type="text/css" href="adminTable.css">
		<link rel="stylesheet" type="text/css" href="adminNewsPage.css">
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
            <div class="pageHeader"> IPL News </div>

            <?php 
            // This is to access DataBase 
                include("Datasource.php");
            ?>

            <div class="productContainer">
                <button class="tabLink tabLink2" onclick="openPage('updateNewsTab', this)" id="defaultOpen">Update or View A News</button>
                <button class="tabLink tabLink2" onclick="openPage('addNewNewsTab', this)">Add New News</button>
                <div class="productMainContainer">

                    <div id="updateNewsTab" class="tabContent activeTabContent"> 
                        <?php 
                            include("adminNewsPage-viewNews.php");
                        ?>
                    </div>

                    <div id="addNewNewsTab" class="tabContent activeTabContent">
                        <?php 
                            include("adminNewsPage-addNews.php");
                        ?>
                    </div>

                </div>

                <?php 
                    mysqli_close($conn);
                ?>
            </div>

	</body>
</html>