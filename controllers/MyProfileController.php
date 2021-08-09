<?php
session_start();

require_once '../../models/EmployeeModel.php';
require_once '../../models/BloggerModel.php';

$data = array("id"=>"", "name"=>"", "contact"=>"", "blood_group"=>"", "gender"=>"", "birth_date"=>"", "login_id"=>"", "email"=>"", "salary"=>"", "designation"=>"");

function getDetails()
{
    global $data;

    if($_SESSION['loginInfo']['usertype_id'] != 3)
    {
        $user = getEmployeeByID(unserialize($_COOKIE["userInfo"])["id"]);

        $data = array("id"=>$user[0]["id"], "name"=>$user[0]["name"], "contact"=>$user[0]["contact"], "blood_group"=>$user[0]["blood_group"], "gender"=>$user[0]["gender"], "birth_date"=>$user[0]["birth_date"], "login_id"=>$user[0]["login_id"], "email"=>$user[0]["email"], "salary"=>$user[0]["salary"], "designation"=>$user[0]["type"]);
    }
    else
    {
        $user = getBloggerByID(unserialize($_COOKIE["userInfo"])["id"]);

        $data = array("id"=>$user[0]["id"], "name"=>$user[0]["name"], "contact"=>$user[0]["contact"], "blood_group"=>$user[0]["blood_group"], "gender"=>$user[0]["gender"], "birth_date"=>$user[0]["birth_date"], "login_id"=>$user[0]["login_id"], "email"=>$user[0]["email"], "salary"=>"", "designation"=>"");
    }
}

if(isset($_SESSION['loginInfo']) && isset($_COOKIE['userInfo']))
{
    getDetails();
}
else
{
    header("Location: http://localhost/LimpidBloggers/views/Common/SignIn.php");
}
?>