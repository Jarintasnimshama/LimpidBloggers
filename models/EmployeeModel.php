<?php
require_once 'DBC.php';

function getEmployeeByLoginID($data)
{
	$result=array();
	$result = null;
	try
	{
		$query= "SELECT * FROM `employees` WHERE `login_id` = '$data';";
	
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