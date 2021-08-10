<?php
session_start();

require_once '../../models/EmployeeModel.php';
require_once '../../models/BloggerModel.php';


if(isset($_SESSION['loginInfo']) && isset($_COOKIE['userInfo']) && $_SESSION['loginInfo']['usertype_id'] == 3)
{
    
}
else
{
    header("Location: http://localhost/LimpidBloggers/views/Common/SignIn.php");
}
?>