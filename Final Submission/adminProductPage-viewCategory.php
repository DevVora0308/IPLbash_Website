<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table class="userTables">
            <tr>
                <th class="srNo">Sr. No.</th>
                <th>Id.</th>
                <th>Name</th>
                <th>Quantity</th>
                <th class="userId">Inserted By</th>
                <th class="timeStamp">Inserted At</th>
                <th class="userId">Updated By</th>
                <th class="timeStamp">Updated At</th>
                <th>Actions</th>
            </tr>

            <?php 
                $sql = "SELECT * FROM category";
                $result = mysqli_query($conn, $sql);
                $totalItem = mysqli_num_rows($result);
                $var = 0;
                if($totalItem > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $categoryNo = ++$var;
                        $categoryId = $row['Id'];
                        $categoryName = $row['Name'] ;
                        $categoryQuantity = $row['Quantity'];
                        $categoryInsertedBy = $row['Inserted_By'];
                        $categoryInsertedAt = $row['Inserted_At'];
                        $categoryUpdatedBy = $row['Updated_By'];
                        $categoryUpdatedAt = $row['Updated_At'];
                        //Refer: https://www.geeksforgeeks.org/how-to-encrypt-and-decrypt-a-php-string/
                        $encryptedId = openssl_encrypt($categoryId, $ciphering, $encryption_key, $options, $encryption_iv);
            ?>
            <tr>
                <td><?php echo $categoryNo; ?></td>
                <td><?php echo $categoryId; ?></td>
                <td><?php echo $categoryName; ?></td>
                <td><?php echo $categoryQuantity; ?></td>
                <td><?php echo $categoryInsertedBy; ?></td>
                <td><?php echo $categoryInsertedAt; ?></td>
                <td ><?php echo $categoryUpdatedBy; ?></td>
                <td><?php echo $categoryUpdatedAt; ?></td>
                <td>
                    <div class="editBtn" id="openModal">
                        <a href="adminProductPage-updateCategory.php?id=<?php echo $categoryId; ?>">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                    </div>
                    <div class="deleteBtn" id="openModal">
                        <a href="adminProductPage-deleteCategory.php?id=<?php echo $categoryId; ?>">
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