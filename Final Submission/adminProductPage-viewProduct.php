<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- <div class="content">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <label>Select the Category: </label> 
                <select class="category" name="searchCategoryOption" id="categoryOption">
                    <option value="all">All</option>
                    <?php 
                        // This is to fetch Product and Category Count from DataBase
                        $sql = "SELECT * FROM Category";
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
                    <option value="<?php echo $countProductOfCategoryId ?>"><?php echo $categoryName ?></option>
                    <?php 
                            }
                        }
                    ?>
                </select>
                <input type="submit" value="SEARCH" name="search" class="button">
            </form>
        </div> 
        <?php
            if(isset($_POST['searchCategoryOption'])){
                $currentCategory=$favteam=$_POST['searchCategoryOption'];
                echo "Current Category is: ".$currentCategory;
            }
        ?> -->
    
        <table class="userTables">
            <tr>
                <th>Sr. No.</th>
                <th>Id.</th>
                <th>Name</th>
                <th>Category</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Inserted By</th>
                <th>Inserted At</th>
                <th>Updated By</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>

            <?php 
            // This is to fetch user details from DataBase 
                // if($currentCategory!="")
                //     $sql = "SELECT * FROM product WHERE Category_Id='$currentCategory'";
                // else
                    $sql = "SELECT * FROM product";
                //echo "Category: ".$currentCategory;
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
                        $itemQuantity = $row['Quantity'];
                        $itemPrice = $row['Product_Price'];
                        $itemInsertedBy = $row['Inserted_By'];
                        $itemInsertedAt = $row['Inserted_At'];
                        $itemUpdatedBy = $row['Updated_By'];
                        $itemUpdatedAt = $row['Updated_At'];
                        //Refer: https://www.geeksforgeeks.org/how-to-encrypt-and-decrypt-a-php-string/
                        $encryptedId = openssl_encrypt($itemId, $ciphering, $encryption_key, $options, $encryption_iv);
            ?>
            <tr>
                <td class="srNo"><?php echo $itemNo; ?></td>
                <td class="id"><?php echo $itemId; ?></td>
                <td class="name"><?php echo $itemName; ?></td>
                <td class="id"><?php echo "".$itemCategory; ?></td>
                <td><img src="<?php echo $itemImageURL; ?>" alt="<?php echo $itemImage; ?>" class="itemImage"></td>
                <td class="itemDescription"><?php echo $itemDescription; ?></td>
                <td class="price">&#8377 <?php echo $itemPrice; ?>/-</td>
                <td><?php echo $itemQuantity; ?></td>
                <td class="userId"><?php echo $itemInsertedBy; ?></td>
                <td class="timeStamp"><?php echo $itemInsertedAt; ?></td>
                <td class="userId"><?php echo $itemUpdatedBy; ?></td>
                <td class="timeStamp"><?php echo $itemUpdatedAt; ?></td>
                <td>
                    <div class="editBtn" id="openModal">
                        <a href="adminProductPage-updateProduct.php?id=<?php echo $itemId; ?>">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                    </div>
                    <div class="deleteBtn" id="openModal">
                        <a href="adminProductPage-deleteProduct.php?id=<?php echo $itemId; ?>">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>

            <?php 
                    }
                }
            ?>
        </table>
    </body>
</html>