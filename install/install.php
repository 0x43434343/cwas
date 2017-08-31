<!DOCTYPE html>
<html>
	<head>
		<title>install database</title>
		<meta charset='utf-8' />
		<link rel='stylesheet' type='text/css' href='template.css'
	</head>
	<body>
		
		<div class='headblock'>
	<center>
		<table width='100%' dir='rtl'>
		<tr>
			
<?php

require_once '../includes/class/config.class.php';
$db = new DB($_POST['host'],$_POST['user'],$_POST['pass'],$_POST['db']);
if ($db){
	
$username = $db->query 
("
CREATE TABLE IF NOT EXISTS `connect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(253) NOT NULL,
  `subject` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
");


$connect = $db->query 
("
CREATE TABLE IF NOT EXISTS `username` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
");

$insert = $db->query(
"INSERT INTO `username` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');"
);

if ($username) {
echo "<br>";
echo "<div class='ok'>تم اضافه جدول username</div>";
}
// else (3)
 else {
echo '<p>';
echo "<div class='error'>حدث خطا ..</div>";     };

if ($connect) {
echo "<br>";
echo "<div class='ok'>تم اضافه جدول connect</div>";
}
if ($insert){
	echo "<br";
echo "<div class='ok'>تم اضافه اليوزر والأدمن ل القاعده</div>";
echo "<br>";
echo "<br>";
echo "<div class='ok'>توجه الآن إلى لوحه التحكم </div>";
echo "<div class='ok'>admin : admin </div>";
echo "<div class='ok'>http://localhost/z3r0day/admincp/</div>";
	}
}else {
	
	echo "<div class='error'>كلمه السر غير لم يتصل ب القاعده</div>";
	}


?>

		</td>
	</tr>
	</table>
		</div>

	</form>
	</center>
	
	</body>
		</div>

</html>
