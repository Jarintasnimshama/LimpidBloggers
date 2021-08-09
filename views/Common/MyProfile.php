<?php
include "../../controllers/MyProfileController.php";
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
        <script src="http://localhost/LimpidBloggers/assets/js/SignUpJS.js"></script>
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

            <div class="remainDiv">
                <div style="padding-top: 3vh;"></div>
               <center>
                    <div class="infoDiv">
                        <h1 class="loginHeader">My Information</h1>
                        <input type="text" name="nameTB" id="nameTB" class="inputText1" placeholder="Full Name" value="" readonly>
                        <input type="text" class="inputText1" placeholder="Contact" value="+880" style="width: calc(15%);" readonly>
                        <input type="text" name="contactTB" id="contactTB" class="inputText1" placeholder="1XXXXXXXXX" value="" style="width: calc(80%);" readonly>
                        <input type="text" name="dateTB" id="dateTB" class="inputText1" value="" onfocus="(this.type='date')" onfocusout="(this.type='text')" placeholder="Date of Birth" readonly>
                        <select id="gender" name="gender" class="inputText1" style="width: calc(47.5%);" disabled>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Male">Female</option>
                            <option value="Male">Other</option>
                        </select>
                        <select id="bloodgroup" name="bloodgroup" class="inputText1" style="width: calc(47.5%);" disabled>
                            <option value="">Select Bloog Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                        <input type="text" name="emailTB" id="emailTB" class="inputText1" placeholder="Email" value="" readonly>
                        <?php
                        if($_SESSION['loginInfo']['usertype_id'] != 3)
                        {
                            echo '<input type="text" name="salaryTB" id="salaryTB" class="inputText1" placeholder="Salary" value="" readonly>';
                        }
                        ?>
                        <span class="error"><?php //echo $msg; ?></span>
                        <span class="success"><?php //echo $success; ?></span>
                        <br>
                        <button type="button" name="enableBTN" id="enableBTN" class="btnEn" onclick=""><b>ENABLE UPDATE</b></button>
                        <button type="submit" name="updateBTN" id="updateBTN" class="btnReg" onclick="" hidden><b>UPDATE INFO</b></button>
                    </div>
               </center>
            </div>
        </form>
    </body>
</html>