<?php
    include("Datasource.php");
    $flagProduct = false;
    echo "<script>console.log('File Loaded');</script>";
    $productNameErr = $productIdErr = $categoryIdErr = $productDescriptionErr = $productQuantityErr = $productPriceErr = $productImageErr = "*";
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addProduct']))
    {
        if(empty($_POST["productId"]))
        {
            $productIdErr = "Error: Please Enter Product Id.";
            $flagProduct = false;
        }
        else
        {
            $productId= $_POST['productId'];
            $productIdErr = "";
            $flagProduct = true;
        }

        if(empty($_POST["productName"]))
        {
            $productNameErr = "Error: Please Enter Product Name";
            $flagProduct = false;
        }
        else
        {
            $productName = $_POST['productName'];
            $productNameErr = "";
            $flagProduct = true;
        }

        if(isset($_REQUEST['categoryId']) && $_REQUEST['categoryId'] == 'default') { 
            $categoryIdErr = "Error: Please select appropriate 'Category'"; 
            $flagProduct = false;
        }
        else
        {
            // $categoryId = $_REQUEST['categoryId'];
            $categorySelected = $_POST['categoryId'];
            $categoryIdErr = "";
            $flagProduct = true;
        }

        if(empty($_POST["productDescription"]))
        {
            $productDescriptionErr = "Error: Please Enter Product Description";
            $flagProduct = false;
        }
        else
        {
            $productDescription = $_POST['productDescription'];
            $productDescriptionErr = "";
            $flagProduct = true;
        }

        if(empty($_POST["quantity"]) || $_POST["quantity"]<1)
        {
            $productQuantityErr =  "Error: Please Enter Correct Quantity";
            $flagProduct = false;
        }
        else
        {
            $productQuantity = $_POST['quantity'];
            $productQuantityErr = "";
            $flagProduct = true;
        }

        if(empty($_POST["price"]) || $_POST["price"]<1)
        {
            $productPriceErr =  "Error: Please Enter Correct Price";
            $flagProduct = false;
        }
        else
        {
            $productPrice = $_POST['price'];
            $productPriceErr = "";
            $flagProduct = true;
        }

        if($flagProduct)
        {   //To check if any product with same Id and Same Name exists or not.
            $sql = "SELECT * FROM product WHERE Product_Id='$productId'";
            $result = mysqli_query($conn, $sql);
            $totalproduct = mysqli_num_rows($result);
            $var = 0;
            if($totalproduct > 0)
            {
                $productIdErr = "Error: Id. Already Used!!";
                $flagProduct = false;
            }
            $sql = "SELECT * FROM product WHERE Product_Name='$productName'";
            $result = mysqli_query($conn, $sql);
            $totalproduct = mysqli_num_rows($result);
            $var = 0;
            if($totalproduct > 0)
            {
                $productNameErr = "Error: Name Already Used!!";
                $flagProduct = false;
            }
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
                $flagProduct = true;
                $_POST['imageName'] = $imageName;
                $productImageName = $imageName;
            }
            else{
                $flagProduct = false;
                $productImageErr = "Error in Uploading Image";
            }
        }
        else{
            $productImageErr =  "Error: Please Enter Product Image";
            $flagProduct = false;
        }

        if($flagProduct){
            // $_SESSION['product'] = $_POST; 
            // header("Location: adminProductPage-addproduct-2.php");
            // include("Datasource.php");
            // $_POST = $_SESSION['product'];
            include("Datasource.php");
            $currentUser = $_SESSION['mail'];
            $currentTimeStamp = date("Y-m-d H:i:s");
            $query= "INSERT INTO product (Product_Id, Image_URL, Category_Id, Product_Name, Product_Description, Quantity, Product_Price, Inserted_At, Inserted_By) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("isissiiss", $productId, $productImageName, $categoryId, $productName, $productDescription, $productQuantity, $productPrice ,$currentTimeStamp, $currentUser);
            $stmt->execute();
            $stmt->close();
            // Redirect('adminHomePage.php');
            // echo "<script>alert('Product $productName is added!!');</script>";
            //storing the data in your database
            // unset ($_SESSION["product"]);
            // header( "Refresh:3; url=adminProductPage.php",true,303);
            echo "<script>alert('Product $productName is added!! \\n Refresh To view the Changes');</script>";
            header( "refresh:1;url=adminProductPage.php");
        }
        else if(!$flagProduct){
            echo "<script>alert('Please resolve the ERRORS, first!!');</script>";
        }
    }
?>
<html>
    <form class="addDetails" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
        <label for="productId">Product Id: </label>
        <input name="productId" type="number" placeholder="Ex.: 5568"> 
            <span class="error"><?php echo $productIdErr;?></span><br/><br/>
        <label for="productName">Product Name: </label>
        <input name="productName" type="text" placeholder="Ex.: Team-XYZ-Cricket-Bat"> 
            <span class="error"><?php echo $productNameErr;?></span> <br/><br/>
        <label for="categoryId">Category: </label>
        <select class="categoryId" name="categoryId" id="categoryOption">
            <option value="default" disabled selected>Select the product category</option>
            <?php 
                // This is to fetch Product and Category Count from DataBase
                $sql = "SELECT * FROM category";
                $result = mysqli_query($conn, $sql);
                $countCategory = mysqli_num_rows($result);
                $totalProducts = 0;
                if($countCategory > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $categoryId = $row['Id'];
                        $categoryName = $row['Name'];
                        $countProductOfCategoryId = $row['Quantity'];
                        $totalProducts += $countProductOfCategoryId;
            ?>
            <option value="<?php echo $categoryId ?>"><?php echo $categoryName ?></option>
            <?php 
                    }
                }
            ?>
        </select> 
            <span class="error"><?php echo $categoryIdErr;?></span><br/><br/>
        <label for="productDescription">Product Description: </label>
        <textarea name="productDescription" type="text" rows="2" cols="60" placeholder="Write Product Desciption, here...."></textarea> 
            <span class="error"><?php echo $productDescriptionErr;?></span> <br/><br/>
        <label for="quantity">Quantity: </label>
        <input name="quantity" type="number" placeholder="Ex.: 15"> 
            <span class="error"><?php echo $productQuantityErr;?></span> <br/><br/>
        <label for="price">Price: </label>
        <input name="price" type="number" placeholder="Ex.: 5000"> 
            <span class="error"><?php echo $productPriceErr;?></span> <br/><br/>
        <label for="image">Product Image: </label>
        <input type="file" name="image">
            <span class="error"><?php echo $productImageErr;?></span> <br/><br/>
        <input type="submit" value="ADD" name="addProduct" class="button"> <br/><br/>
    </form>
</html>