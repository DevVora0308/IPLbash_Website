<?php
    session_start();
    include("Datasource.php");
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $flag = false;
        $id = $_GET['id'];
        $itemId = $id;
        $_POST["item_Id"] = $id;
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <link rel="stylesheet" type="text/css" href="footer.css"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="adminProductPage.js"></script>
		<script src="modal.js"></script>
		<link rel="stylesheet" type="text/css" href="adminModalcss">
		<link rel="stylesheet" type="text/css" href="adminTable.css">
		<link rel="stylesheet" type="text/css" href="adminUserPage.css">
		<link rel="stylesheet" type="text/css" href="adminUpdateProductPage.css">
		<title>IPLBash UpdatePage</title>
    </head>
	<body>      
        <div class="navBarr">
            <?php
                include 'adminSideBar.php';
                include 'Datasource.php'
            ?>
        </div>
        <?php
            $flag = false;
            $productNameErr = $descriptionErr = $imageErr = $quantityErr = $priceErr = "";
            if($_SERVER['REQUEST_METHOD'] === 'POST') 
            {
                $itemId = $_POST['id'];
                $flag = true;
                if(empty($_POST["ProductName"]))
                {
                    $productNameErr = "Error:Please Enter Product Name";
                    $flag = false;
                }
                else
                {
                    $itemName = $_POST['ProductName'];
                    $productNameErr = "";
                    $flag = true;
                }

                if(empty($_POST["description"]))
                {
                    $descriptionErr = "Error:Please Enter Description";
                    $flag = false;
                }
                else
                {
                    $itemDescription = $_POST['description'];
                    $descriptionErr = "";
                    $flag = true;
                }

                if(empty($_POST["quantity"]) || $_POST["quantity"]<1)
                {
                    $quantityErr = "Error: Please Enter Correct Quantity";
                    $flag = false;
                }
                else
                {
                    $itemQuantity = $_POST['quantity'];
                    $quantityErr = "";
                    $flag = true;
                }
                

                if(empty($_POST["price"]) || $_POST["price"]<1)
                {
                    $priceErr = "Error: Please Enter Correct Price";
                    $flag = false;
                }
                else
                {
                    $itemPrice = $_POST['price'];
                    $priceErr = "";
                    $flag = true;
                }

                if(!empty($_FILES['image']['name']))
                {
                    $imageName = $_FILES['image']['name'];
                    $imageErr = "";
                    $imageType = $_FILES['image']['type'];
                    $imageSize = $_FILES['image']['size'];
                    $image_tmp_loc = $_FILES['image']['tmp_name'];
                    $imageTargetDirectory = "../image/shop/".$imageName;
                    if(move_uploaded_file($image_tmp_loc,$imageTargetDirectory))
                    {
                        $flag = true;
                        $_POST['imageName'] = $imageName;
                        $itemImageName = $imageName;
                        $imageErr = "";
                    }
                    else{
                        $flag = false;
                        $imageErr = "Error in Uploading Image";
                    }
                }
                else{
                    // $_POST['imageName'] = $itemImage;
                    $itemImageName = "";
                }

                if($flag){
                    $currentUser = $_SESSION['mail'];
                    $currentTimeStamp = date("Y-m-d H:i:s");
                    if($itemImageName=="")
                    {
                        $query= "UPDATE product SET Product_Name=?, Product_Description=?, Quantity=?, Product_Price=?, Updated_By=?, Updated_At=? WHERE Product_Id=?";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param("ssiissi", $itemName, $itemDescription, $itemQuantity, $itemPrice, $currentUser, $currentTimeStamp, $itemId);
                    }
                    else{
                        $query= "UPDATE product SET Product_Name=?, Product_Description=?, Quantity=?, Product_Price=?, Image_URL=?, Updated_By=?, Updated_At=? WHERE Product_Id=?";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param("ssiisssi", $itemName, $itemDescription, $itemQuantity, $itemPrice, $itemImageName, $currentUser, $currentTimeStamp, $itemId);
                    }
                    $stmt->execute();
                    if(!$stmt->execute()) echo "<script>console.log('$stmt->error');</script>";
                    $stmt->close();
                    // $_POST['itemId'] = $id;
                    // echo "<script>console.log('$id');</script>";
                    // $_SESSION['item'] = $_POST; 
                    // echo "<script>console.log('$itemId');</script>";
                    // echo "<script>console.log('Hello, $itemId');</script>";
                    header("Location: adminProductPage.php");
                }
            }
        ?>
        <?php
            // This is to fetch user details from DataBase 
            $sql = "SELECT * FROM product WHERE Product_Id='$itemId'";
            $result = mysqli_query($conn, $sql);
            $totalItem = mysqli_num_rows($result);
            $var = 0;
            if($totalItem > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    $itemNo = ++$var;
                    $itemId = $row['Product_Id'];
                    $itemName = $row['Product_Name'] ;
                    $itemCategory = $row['Category_Id'] ;
                    $itemImage = $row['Image_URL'];
                    $itemImageURL = "../image/shop/".$row['Image_URL'];
                    $itemDescription = $row['Product_Description'] ;
                    $itemPrice = $row['Product_Price'] ;
                    $itemQuantity = $row['Quantity'];
                    $itemInsertedBy = $row['Inserted_By'];
                    $itemInsertedAt = $row['Inserted_At'];
                    $itemUpdatedBy = $row['Updated_By'];
                    $itemUpdatedAt = $row['Updated_At'];
                }
            }
        ?>

        <div class="mainContainer">
            <div class="pageHeader"> Edit Product: <?php echo $itemId; ?> </div>
            <div class="productContainer">
                <div class="productMainContainer">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                        <label for="id">Product Id: </label>
                        <input name="id" readonly type="number" value="<?php echo $itemId?>"> <br/><br/>
                        <label for="category">Product Category Id: </label>
                        <input name="category" readonly type="number" value="<?php echo $itemCategory?>"> <br/><br/>
                        <label for="ProductName">Product Name: </label>
                        <input name="ProductName" type="text" value="<?php echo $itemName?>"> 
                            <span class="error"><?php echo $productNameErr;?></span> <br/><br/>
                        <label for="description">Product Description: </label>
                        <textarea name="description" type="text" rows="1" cols="50"><?php echo $itemDescription?></textarea> 
                            <span class="error"><?php echo $descriptionErr;?></span> <br/><br/>
                        <label for="quantity">Product Quantity: </label>
                        <input name="quantity" type="number" value="<?php echo $itemQuantity?>"> 
                            <span class="error"><?php echo $quantityErr;?></span> <br/><br/>
                        <label for="price">Product Price: </label>
                        <input name="price" type="number" value="<?php echo $itemPrice?>"> 
                            <span class="error"><?php echo $priceErr;?></span> <br/><br/>
                        <label for="image">Product Image: <small>(If any new Image)</small> </label>
                        <input type="file" name="image"> 
                            <span class="error"><?php echo $imageErr;?></span> <br/><br/>
                        <input type="submit" value="UPDATE" name="update" class="button"> <br/><br/>
                    </form>
                </div>

                <?php 
                    mysqli_close($conn);
                ?>
            </div>
        </div>
	</body>
</html>