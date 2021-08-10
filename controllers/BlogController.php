<?php
session_start();

require_once '../../models/BlogModel.php';

$urlValidate = true;
$id = $_GET['id'];
$blogs = getReadableBlog($id,3);

function loadBlog($id)
{
    global $blogs;
    $content = "";
    if(sizeof($blogs) > 0 && $blogs != null)
    {
        foreach($blogs as $data)
        {
            $content .= '<center>';
            $content .=        '<div class="blogsDiv">';
            $content .=            '<h1 class="blogTitle">'.$data["title"].'</h1>';
            $content .=            '<p class="blogSub">By- <a class="ancorText2" href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?id='.$data["blogged_by"].'">'.$data["blogger_name"].'</a></p>';
            $content .=            '<span class="blogContent">'.$data["content"].'</span>';
            $content .=            '<br>';
            $content .=            '<p class="blogTime">'.$data["post_time"].' ('.$data["category"].')</p>';
            $content .=        '</div>';
            $content .='</center>';	
        }
    }
    else
    {
        $content .= '<center><h1 class="error2">NO BLOGS FOUND.</h1></center>';
    }

    echo $content;
}
if(isset($_SESSION['loginInfo']) && isset($_COOKIE['userInfo']))
{
    if($blogs == null)
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

    }
}
else
{
    header("Location: http://localhost/LimpidBloggers/views/Common/SignIn.php");
}
?>