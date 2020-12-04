<?php
    if(isset($_GET['open'])) {
        echo "<script>onclick='document.getElementById('modal').style.display='block''<script>";
        $userEmailId = $_GET['id'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="adminModal.css">
		<script src="modal.js"></script>
		<title>IPLBash HomePage</title>
    </head>
    <body>
        <?php
            function delete(){
                echo "<script></script>";
            }
        ?>
        <div id="modal" class="modal">
        <a href="adminUserPage.php"><span onclick="document.getElementById('modal').style.display='none'" class="close" title="Close Modal">×</span></a>
        <form class="modal-content" action="/action_page.php">
            <div class="container">
            <h1>Delete User</h1>
            <p>Are you sure you want to delete the User?</p>
            
            <div class="clearfix">
                <a href="adminUserPage.php"><button type="button" onclick="closeModal()" class="cancelbtn">Cancel</button></a>
                <a href="deleteUser.php?id=<?php echo $userEmailId; ?>"><button type="button" onclick="closeModal()" class="deletebtn">Delete</button></a>
            </div>
            </div>
        </form>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('modal');
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </body>
</html>