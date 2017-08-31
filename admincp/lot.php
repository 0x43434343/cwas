<?php
session_start();
if (!$_SESSION['admin']){
	header('Location:index.html');
	}

?>
<!DOCTYPE html>
<html>
	<head>
	<title>Admin Login!!</title>
	
	<meta charset='utf-8' />
	<link rel='stylesheet' type='text/css'  href='template.css'/>

	</head>
<frameset border='1'  cols='*,25%'>
	<frame  noresize ='noresize' name='home' src='home.php' />
	<frame  src='menu.php' />
</frameset>
</html>
