<?php
    include("Datasource.php");
    $flagCategory = false;
    $categoryNameErr = $categoryIdErr = $categoryQuantityErr = "*";
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addCategory'])) 
    {
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

        if(empty($_POST["categoryId"]))
        {
            $categoryIdErr = "Error: Please Enter Category Id.";
            $flagCategory = false;
        }
        else
        {
            $categoryId= $_POST['categoryId'];
            $categoryIdErr = "";
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
        if($flagCategory && isset($_POST['addCategory']))
        {
            $sql = "SELECT * FROM category WHERE Id='$categoryId'";
            $result = mysqli_query($conn, $sql);
            $totalcategory = mysqli_num_rows($result);
            $var = 0;
            if($totalcategory > 0)
            {
                $categoryIdErr = "Error: Id. Already Used!!";
                $flagCategory = false;
            }
            $sql = "SELECT * FROM category WHERE Name='$categoryName'";
            $result = mysqli_query($conn, $sql);
            $totalcategory = mysqli_num_rows($result);
            $var = 0;
            if($totalcategory > 0)
            {
                $categoryNameErr = "Error: Name Already Used!!";
                $flagCategory = false;
            }
        }
        if($flagCategory){
            // $_SESSION['category'] = $_POST; 
            // header("Location: adminProductPage-addCategory-2.php");
            // include("Datasource.php");
            // $_POST = $_SESSION['category'];
            $categoryId = $_POST["categoryId"];
            $categoryName = $_POST["categoryName"];
            $categoryQuantity = $_POST["quantity"];
            $currentUser = $_SESSION['mail'];
            $currentTimeStamp = date("Y-m-d H:i:s");
            $query= "INSERT INTO category (Id,Name,Quantity,Inserted_By,Inserted_At) VALUES (?,?,?,?,?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("isiss", $categoryId, $categoryName, $categoryQuantity, $currentUser, $currentTimeStamp);
            $stmt->execute();
            $stmt->close();
            // Redirect('adminProductPage.php');
            // header("Location: adminProductPage.php");
            //storing the data in your database
            // unset ($_SESSION["category"]);
            echo "<script>alert('Category $categoryName is added!! \\n Refresh To view the Changes');</script>";
            header( "refresh:1;url=adminProductPage.php");
        }
        else if(!$flagCategory){
            echo "<script>alert('Please resolve the ERRORS, first!!');</script>";
        }
    }
?>
<html>
    <form class="addDetails" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
        <label for="categoryId">Category Id: </label>
        <input name="categoryId" type="number" placeholder="Ex.: 5568"> 
            <span class="error"><?php echo $categoryIdErr;?></span><br/><br/>
        <label for="categoryName">Category Name: </label>
        <input name="categoryName" type="text" placeholder="Ex.: Cricket-Bat"> 
            <span class="error"><?php echo $categoryNameErr;?></span> <br/><br/>
        <label for="quantity">Quantity: </label>
        <input name="quantity" type="number" placeholder="Ex.: 15"> 
            <span class="error"><?php echo $categoryQuantityErr;?></span> <br/><br/>
        <input type="submit" value="ADD" name="addCategory" class="button"> <br/><br/>
    </form>
</html>