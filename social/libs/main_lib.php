<?php
	require "db.php";
	function Load_Account($func, $value) 
	{	
		if(trim($func) == '' || trim($value) == '')
		{
			echo '<script> alert("ERROR! Function or Value Not Found! [Main_Lib] [Load_Account]"); </script>';
		}
		
		if($func == 'login')	
		{
			$user = R::findOne('users', 'login = ?', array($value));		
			if($user) return $user;
			else return false;
		}
		else if($func == 'id')
		{
			$user = R::findOne('users', 'id = ?', array($value));
			if($user) return $user;
			else return false;
		}
		else echo '<script> alert("ERROR! Function Not Found! [Main_Lib]"); </script>';
	}
	function AlertMSG($type, $text, $number = '')
	{
		 if(trim($type) == '' || trim($text) == '')
		{
			echo '<script> alert("ERROR! Type or Text Not Found! [Main_Lib] [AlertMSG]"); </script>';
		}
		
		if($type == 'info')
			echo '<script> alert("[Информация] ' . $text . ' "); </script>';
		if($type == 'error' && trim($number) == '') 
			echo '<script> alert("[ERROR] ' . $text .' "); </script>';
			
		 if($type == 'error' && trim($number) != '') 
			echo '<script> alert("[ERROR] ['. $number . '] ' . $text .' "); </script>';
	} 
	function Redirect($url)
	{
		if(trim($url) == '')
		{
			echo '<script> alert("ERROR! Function or Value Not Found! [Main_Lib]"); </script>';
		}
		
		echo '<script> location.href= "' . $url . ' "; </script>';
	}
	?>