<?php
require_once 'DBC.php';

function deleteCommentForBlogDelete($data)
{

	$query = "DELETE FROM `comments` WHERE `blog_id`= $data";
	
	try
	{
		execute($query);
	}
	
	catch(Exception $e)
	{
		throw $e->getMessage();
	}	
}

?>