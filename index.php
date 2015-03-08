<?php

	function db_connect()
	{
		$host = 'localhost';
		$user = 'user';
		$pswd = 'MxzH7wHhSXA8GqEn';
		$db   = 'aut';

		$connection = mysql_connect($host, $user, $pswd);

		if (!$connection || !mysql_select_db($db, $connection))
		{
			return false;
		}

		return true;
	}

	function db_result_to_array($result)
	{
		$res_array = array();

		$count = 0;

		while( $row = mysql_fetch_array($result) )
		{
			$res_array[$count] = $row;
			$count++;
		}

		return $res_array;
	}

	function get_students()
	{
		db_connect();

		$query = "SELECT * FROM mem";

		$result = mysql_query($query);

		$result = db_result_to_array($result);

		return $result;
	}

		if($_POST){
			header( 'Refresh: 0; url=/home.html');
		}
?>
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BD</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/in.css">
</head>
<body>
	<div class="login_form">
		> <input type="text" id="flogin" name="login_in">
		<form method="post">
			> <input type="submit"  id="loginin" name="create" value="Вход">

		</form> 
	</div>
</body>
</html>