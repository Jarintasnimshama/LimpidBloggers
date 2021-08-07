<?php
session_start();

setcookie("userInfo",$_COOKIE["userInfo"],time()-3600,"/");
unset($_COOKIE["userInfo"]);

session_destroy();
unset($_SESSION["loginInfo"]);

header("Location: http://localhost/LimpidBloggers/");
?>