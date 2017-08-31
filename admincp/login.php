<?php
ob_start();
session_start();
 
$username = $_POST['username'];
$password = $_POST['password'];
 include '../config.php';
$username = mysql_real_escape_string($username);
$query = "SELECT id, username, password
FROM username
WHERE username = '$username';";
 
$result = $db->query($query);
 
if(mysql_num_rows($result) == 0) // 
{
header('Location: index.html');
print "error";
}
 
$userData = mysql_fetch_array($result);
 
if($password != $userData['password'] or $username !=$userData['username']) 
{
header('Location: index.html');
}else{ 
session_regenerate_id();
$_SESSION['sess_user_id'] = $userData['id'];
$_SESSION['admin'] = $userData['username'];
session_write_close();
header('Location: lot.php');
}
?>




