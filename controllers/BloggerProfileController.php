<?php
session_start();

require_once '../../models/BloggerModel.php';

$id = $_GET['id'];

$allData = getBloggersInfoAlongBlogsByBloggerID($id);

function loadBloggersPosts()
{
    global $allData;
    $content = "";
    $Sl = 1;
    if(sizeof($allData) > 0 && $allData != null)
    {
        if($allData[0]['title']!=null)
        {
            foreach($allData as $data)
            {
                $content .= '<tr>';
                $content .=        '<td>'.$Sl.'</td>';
                $content .=        '<td>'.$data["title"].'</td>';
                $content .=        '<td>'.$data["category"].'</td>';
                $content .=        '<td>'.$data["post_time"].'</td>';
                $content .=        '<td>'.$data["blog_status"].'</td>';
                $content .=        '<td>'.$data["comment_count"].'</td>';
                $content .=        '<td>'.$data["bookmark_count"].'</td>';
                $content .=        '<td align="middle"><a class="linkBtn1" href="#'.$data["blog_id"].'">View Blog</a></td>';
                $content .='</tr>';	
                $Sl += 1;
            }
        }
        else
        {
            $content .= '<tr><td colspan="6" align="middle"><h2 class="error2">NO BLOGS FOUND.</h2></td></tr>';
        }
    }
    else
    {
        $content .= '<tr><td colspan="6" align="middle"><h2 class="error2">NO BLOGS FOUND.</h2></td></tr>';
    }

    echo $content;
}

function loadBloggersPostsMyPanel()
{
    global $allData;
    $content = "";
    $Sl = 1;
    if(sizeof($allData) > 0 && $allData != null)
    {
        foreach($allData as $data)
        {
            $content .= '<tr>';
            $content .=        '<td>'.$Sl.'</td>';
            $content .=        '<td>'.$data["title"].'</td>';
            $content .=        '<td>'.$data["category"].'</td>';
            $content .=        '<td>'.$data["post_time"].'</td>';
            $content .=        '<td>'.$data["blog_status"].'</td>';
            $content .=        '<td>'.$data["comment_count"].'</td>';
            $content .=        '<td>'.$data["bookmark_count"].'</td>';
            $content .=        '<td align="middle">';
            $content .=                '<a class="linkBtn1" href="#'.$data["blog_id"].'">View Blog</a>&nbsp;';
            $content .=                '<a class="linkBtn3" href="#'.$data["blog_id"].'">Update</a>&nbsp';
            $content .=                '<a class="linkBtn4" href="#'.$data["blog_id"].'">Delete</a>';
            $content .=        '</td>';
            $content .='</tr>';	
            $Sl += 1;
        }
    }
    else
    {
        $content .= '<tr><td colspan="6" align="middle"><h2 class="error2">NO BLOGS FOUND.</h2></td></tr>';
    }

    echo $content;
}

if(isset($_SESSION['loginInfo']) && isset($_COOKIE['userInfo']))
{
    if($allData == null)
    {
        header("Location: http://localhost/LimpidBloggers/views/Common/SignIn.php");
    }
    else
    {
        // echo serialize($allData);
    }
}
else
{
    header("Location: http://localhost/LimpidBloggers/views/Common/SignIn.php");
}
?>