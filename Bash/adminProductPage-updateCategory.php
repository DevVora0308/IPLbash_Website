<?php
    session_start();
    include("Datasource.php");
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $flagCategory = false;
        $id = $_GET['id'];
        $categoryId = $id;
        $_POST["categoryId"] = $id;
    }
    $categoryNameErr = $categoryIdErr = $categoryQuantityErr = "*";
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateCategory'])) 
    {
        $categoryId = $_POST["categoryId"];
        if(empty($_POST["categoryName"]))
        {
            $categoryNameErr = "Error: Please Enter Category Name";
            $flagCategory = false;
        }
        else
        {
            $categoryName = $_POST['categoryName'];
            $categoryNameErr = "";
            $flagCategory = true;
        }

        if(empty($_POST["quantity"]) || $_POST["quantity"]<1)
        {
            $categoryQuantityErr =  "Error: Please Enter Correct Quantity";
            $flagCategory = false;
        }
        else
        {
            $categoryQuantity = $_POST['quantity'];
            $categoryQuantityErr = "";
            $flagCategory = true;
        }
        if($flagCategory){
            // $_SESSION['category'] = $_POST; 
            // header("Location: adminProductPage-addCategory-2.php");
            // include("Datasource.php");
            // $_POST = $_SESSION['category'];
            $currentUser = $_SESSION['mail'];
            $currentTimeStamp = date("Y-m-d H:i:s");
            $query= "UPDATE category SET Name=?, Quantity=?, Updated_By=?, Updated_At=? WHERE Id=?";
            $stmt = $conn->prepare($query);
            // echo "".$categoryId;
            // echo "".$categoryName;
            // echo "".$categoryQuantity;
            // echo "".$categoryUser;
            // echo "".$categoryTimeStamp;
            $stmt->bind_param("sissi", $categoryName, $categoryQuantity, $currentUser, $currentTimeStamp, $categoryId);
            $stmt->execute();
            $stmt->close();
            echo "<script>alert('Category $categoryName is updated!!');</script>";
            header( "refresh:0;url=adminProductPage.php");
        }
        else if(!$flagCategory){
            echo "<script>alert('Please resolve the ERRORS, first!!');</script>";
        }
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

        <div class="mainContainer">
            <div class="pageHeader"> Edit Category: <?php echo $id; ?> </div>
            <div class="productContainer">
                <?php
                    // This is to fetch user details from DataBase 
                    $sql = "SELECT * FROM category WHERE Id='$id'";
                    $result = mysqli_query($conn, $sql);
                    $totalcategory = mysqli_num_rows($result);
                    $var = 0;
                    if($totalcategory > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $categoryNo = ++$var;
                            $categoryId = $row['Id'];
                            $_POST['categoryId'] = $categoryId;
                            $categoryName = $row['Name'] ;
                            $categoryQuantity = $row['Quantity'];
                        }
                    }
                ?>
                <div class="productMainContainer">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                        <label for="categoryId">Category Id: </label>
                        <input name="categoryId" readonly type="number" value="<?php echo $categoryId?>">
                            <span class="error"><?php echo $categoryIdErr;?></span><br/><br/>
                        <label for="categoryName">Category Name: </label>
                        <input name="categoryName" type="text" value="<?php echo $categoryName?>"> 
                            <span class="error"><?php echo $categoryNameErr;?></span> <br/><br/>
                        <label for="quantity">Quantity: </label>
                        <input name="quantity" type="number" value="<?php echo $categoryQuantity?>"> 
                            <span class="error"><?php echo $categoryQuantityErr;?></span> <br/><br/>
                        <input type="submit" value="UPDATE" name="updateCategory" class="button"> <br/><br/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>