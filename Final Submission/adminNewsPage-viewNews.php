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
                <th>HeadLine</th>
                <th>News Content</th>
                <th>Author</th>
                <th>Inserted By</th>
                <th>Inserted At</th>
                <th>Updated By</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
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
            <tr>
                <td><?php echo $newsNo; ?></td>
                <td><?php echo $newsId; ?></td>
                <td class="itemDescription"><?php echo $newsHeadLine; ?></td>
                <td><?php echo $newsContent; ?></td>
                <td class="author"><?php echo $newsAuthor; ?></td>
                <td class="userId"><?php echo $newsInsertedBy; ?></td>
                <td class="timeStamp"><?php echo $newsInsertedAt; ?></td>
                <td class="userId"><?php echo $newsUpdatedBy; ?></td>
                <td class="timeStamp"><?php echo $newsUpdatedAt; ?></td>
                <td>
                    <div class="editBtn" id="openModal">
                        <a href="adminUpdateNews.php?id=<?php echo $newsId; ?>">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                    </div>
                    <div class="deleteBtn" id="openModal">
                        <a href="adminDeleteNews.php?id=<?php echo $newsId; ?>">
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