<?php
session_start();

require_once '../../models/BlogModel.php';

$id = $_GET['id'];

$urlValidate = true;

$allData = getBlogByID($id);

if(isset($_SESSION['loginInfo']) && isset($_COOKIE['userInfo']) && $_SESSION['loginInfo']['usertype_id'] == 3)
{
    if($allData == null)
    {
        $urlValidate = false;
    }
    if (!isset($_GET['id'])) 
    {
        $urlValidate = false;
    }

    if(!$urlValidate)
    {
        header("Location: http://localhost/LimpidBloggers/views/Common/SignIn.php");
    }
    else
    {
        if($allData[0]["blogged_by"] == unserialize($_COOKIE['userInfo'])['id'])
        {
            deleteBlog($id);
            header("Location: http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?id=".unserialize($_COOKIE["userInfo"])["id"]);
        }
        else
        {
            header("Location: http://localhost/LimpidBloggers/views/Common/SignIn.php");
        }
    }
}
else
{
    header("Location: http://localhost/LimpidBloggers/views/Common/SignIn.php");
}
?>