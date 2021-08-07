<?php
require_once 'DBC.php';

function getBloggerByLoginID($data)
{
	$result=array();
	$result = null;
	try
	{
		$query= "SELECT * FROM `bloggers` WHERE `login_id` = '$data';";
	
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

function insertBlogger($data)
{
	$query = "INSERT INTO `bloggers`(`name`, `contact`, `blood_group`, `gender`, `birth_date`, `login_id`) VALUES ('".$data['name']."','+880".$data['contact']."','".$data['blood_group']."','".$data['gender']."','".$data['birth_date']."','".$data['login_id']."');";
	
	try
	{
		execute($query);
		return true;
	}
	
	catch(Exception $e)
	{
		throw $e->getMessage();
		return false;
	}	
}
?>