<!DOCTYPE html>
<html>
    <head>
        <title>IPL Login Form</title>
	    <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <div class="container">
                <div class="img1"></div>
                <div class="img2"></div>

            <div class="regForm">
                <form action="dblogin.php" method="POST">
                    <fieldset>
                        <?php
                            echo"<br><h4>Password <em>successfully</em> Changed!!</h4>";
                        ?>
                        <a href="login2.php" class="button">LOGIN</a>
                    </fieldset>
                </form>
            </div>
        </div>

    </body>
</html>