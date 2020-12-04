<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src='gallery.js'></script>
		<link rel="stylesheet" type="text/css" href="gallery.css">
        <title>IPL-T20: Gallery</title>
    </head>
    <body>
        <?php
            include 'navBar.html';
        ?>
        <div class="row">
            <?php
                include 'Datasource.php';
                $sql = "SELECT * FROM image";
                $result = mysqli_query($conn, $sql);
                $totalImage = mysqli_num_rows($result);
                $var = 0;
                if($totalImage > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $imageNo = ++$var;
                        $imageId = $row['Id'];
                        $imageName = $row['Name'] ;
                        //Refer: https://www.geeksforgeeks.org/how-to-encrypt-and-decrypt-a-php-string/
                        // $encryptedId = openssl_encrypt($categoryId, $ciphering, $encryption_key, $options, $encryption_iv);
            ?>
                <div class="column">
                    <img class="galleryImage" src="../image/<?php echo $imageName;?>" alt="<?php echo $imageName;?>" onclick="openModal();currentSlide(<?php echo $imageId;?>)" class="hover-shadow cursor">
                </div>
            <?php
                    }
                }
            ?>
        </div>

        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">  
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <?php
                        include 'Datasource.php';
                        $sql = "SELECT * FROM image";
                        $result = mysqli_query($conn, $sql);
                        $totalImage = mysqli_num_rows($result);
                        $var = 0;
                        if($totalImage > 0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $imageNo = ++$var;
                                $imageId = $row['Id'];
                                $imageName = $row['Name'] ;
                                //Refer: https://www.geeksforgeeks.org/how-to-encrypt-and-decrypt-a-php-string/
                                // $encryptedId = openssl_encrypt($categoryId, $ciphering, $encryption_key, $options, $encryption_iv);
                    ?>
                        <div class="mySlides">
                            <div class="numbertext"><?php echo $imageId;?> / <?php echo $totalImage;?></div>
                            <img class="slideImage" src="../image/<?php echo $imageName;?>" alt="<?php echo $imageName;?>">
                        </div>

                        <!-- <div class="column">
                            <img class="demo cursor galleryImage" src="../image/<?php echo $imageName;?>" alt="<?php echo $imageName;?>" onclick="currentSlide(1)">
                        </div> -->
                    <?php
                            }
                        }
                    ?>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>

    </body>
</html>