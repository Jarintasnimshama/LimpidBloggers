<?php
include "../../controllers/PostBlogController.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LimpidBlogger | Profile</title>

        <link rel="icon" href="http://localhost/LimpidBloggers/assets/image/Project Icon/LimpidBloggers.ico">

        <!-- Adding External CSS -->
        <link rel="stylesheet" href="http://localhost/LimpidBloggers/assets/css/navigationbar.css">
        <link rel="stylesheet" href="http://localhost/LimpidBloggers/assets/css/divs.css">
        <link rel="stylesheet" href="http://localhost/LimpidBloggers/assets/css/texts.css">
        <link rel="stylesheet" href="http://localhost/LimpidBloggers/assets/css/forms.css">
        <link rel="stylesheet" href="http://localhost/LimpidBloggers/assets/css/buttons.css">
        <link rel="stylesheet" href="http://localhost/LimpidBloggers/assets/css/tables.css">

        <!-- Adding External JS -->
        <script src="http://localhost/LimpidBloggers/assets/js/MyProfileJS.js"></script>
    </head>

    <body>
        <form method="POST">
           <!-- Adding Navbar Layout -->
            <?php 
            if($_SESSION['loginInfo']['usertype_id'] == 3)
            {
                include "./navbar.php";
            }
            ?>

            <div class="remainDiv">
                <div style="padding-top: 3vh;"></div>
               
            </div>
        </form>
    </body>
</html>