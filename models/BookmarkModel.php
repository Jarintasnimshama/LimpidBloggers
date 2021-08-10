<?php
require_once 'DBC.php';

function getCheckBookMark($blog_id, $bookmarked_by)
{
	$result=array();
	$result = null;
	try
	{
		$query = "SELECT * FROM `bookmarks` WHERE `blog_id`='$blog_id' AND bookmarked_by='$bookmarked_by'";

		$result=get($query);
		
		if($result != null)
		{
			return true;
		}
		
		else
		{
			return false;
		}
	}
	
	catch(Exception $e)
	{
		throw $e->getMessage();
		return false;
	}
}

?>