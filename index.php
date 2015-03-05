<?php
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
		> <input type="text" id="flogin"> </input>
		> <input type="password" id="fpassword"></input>
		<form method="post">
		  > <input type="submit"  id="loginin" name="create" value="Вход">
		</form> 
	</div>
</body>
</html>