<?php
include "../../controllers/BlogsController.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LimpidBlogger | Blogs</title>

        <link rel="icon" href="http://localhost/LimpidBloggers/assets/image/Project Icon/LimpidBloggers.ico">

        <!-- Adding External CSS -->
        <link rel="stylesheet" href="http://localhost/LimpidBloggers/assets/css/navigationbar.css">
        <link rel="stylesheet" href="http://localhost/LimpidBloggers/assets/css/divs.css">
        <link rel="stylesheet" href="http://localhost/LimpidBloggers/assets/css/texts.css">
        <link rel="stylesheet" href="http://localhost/LimpidBloggers/assets/css/forms.css">
        <link rel="stylesheet" href="http://localhost/LimpidBloggers/assets/css/buttons.css">
        <link rel="stylesheet" href="http://localhost/LimpidBloggers/assets/css/tables.css">

        <!-- Adding External JS -->
    </head>

    <body>
        <form method="POST">
            <!-- Adding Navbar Layout -->
            <?php 
            if($_SESSION['loginInfo']['usertype_id'] == 1)
            {
                include "../Admin/navbar.php";
            }
            if($_SESSION['loginInfo']['usertype_id'] == 2)
            {
                include "../Moderator/navbar.php";
            }
            if($_SESSION['loginInfo']['usertype_id'] == 3)
            {
                include "../Blogger/navbar.php";
            }
            ?>

            <div class="remainDiv2">
                <div style="padding-top: 1vh;">
                   <?php 
                        if($_SESSION['loginInfo']['usertype_id'] == 3)
                        {
                            echo '<a class="linkBtn2" href="#">Post New Blog</a>';
                        } 
                   ?>
                </div>
                <!-- <center>
                    <div class="blogsDiv">
                        <h1 class="blogTitle">Title</h1>
                        <p class="blogSub">By- <a class="ancorText2" href="#">User Name</a></p>
                        <span class="blogContent">yufyvjhvjv.....</span>
                        <br>
                        <center>
                            <a class="linkBtn1" href="#">Read Full Blog</a>
                        </center>
                        <p class="blogTime">dd/mm/yy t</p>
                    </div>
                </center> -->
                <?php
                    loadApprovedBlogs();
                    // echo $_SESSION['loginInfo']['email'];
                    // echo "<br>";
                    // echo unserialize($_COOKIE['userInfo'])["name"];
                ?>
            </div>
        </form>
    </body>
</html>