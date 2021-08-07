<?php
require_once 'DBC.php';

function getAllBlogsByBlogStatus($data)
{
	$result=array();
	$result = null;
	try
	{
		$query = "SELECT blogs.*, categories.category as category, bloggers.name as blogger_name FROM `blogs` ";
		$query .= "INNER JOIN `categories` ON blogs.category_id = categories.id ";
		$query .= "INNER JOIN `bloggers`ON blogs.blogged_by = bloggers.id ";
		$query .= "WHERE `blogstatus_id`='".$data."' ORDER BY post_time DESC;";
	
		$result=get($query);
		
		if($result != null)
		{
			return $result;
		}
		
		else
		{
			return $result;
		}
	}
	
	catch(Exception $e)
	{
		throw $e->getMessage();
		return $result;
	}
}

?>