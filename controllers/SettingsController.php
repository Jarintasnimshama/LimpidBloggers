<?php
session_start();

require_once '../../models/LoginModel.php';

$msg = "";

if(isset($_SESSION['loginInfo']) && isset($_COOKIE['userInfo']))
{
    
}
else
{
    header("Location: http://localhost/LimpidBloggers/views/Common/SignIn.php");
}
?>