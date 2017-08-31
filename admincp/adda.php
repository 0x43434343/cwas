<?php include '../config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>لوحه التحكم</title>
		<meta charset='utf-8' />
		<link rel='stylesheet' type='text/css' href='template.css'
	</head>
	<body>
	<div class='headblock'>اضافه مدير</div>
	<div class='headblock'>
		<?
		$addadmin = isset($_POST['addadmin'])?$_POST['addadmin']:null;
		if ($addadmin){
			$p_username = trim($_POST['username']);
			$p_password = md5($_POST['password']);
			$newpass = md5($_POST['newpass']);
			$query = $db->query("select * from username where username='$p_username'");
			$sqli = @mysql_num_rows($query);
			if ($p_username == '' or $p_password == ''){
				
				print "<div class='error'>الرجاء ادخال جميع الحقول</div>";
				}else if ($p_password != $newpass) {
					echo "<div class='error'>كلمه السر غير متطابقه</div>";
				}
				else if ($sqli !=0){
					print "<div class='error'>اسم الاداري موجود</div>";
				}
				else{
					$insert = mysql_query("insert into username
					(username,password)
					value
					('$p_username','$p_password')");
					if ($insert){
						
						echo "<div class='ok'>تم اضافه المدير بنجاح</div>";
					echo "<meta http-equiv='Refresh' content='1; url='adda.php' />";
						exit;
						}
					
				}
			}
			
		
		?>
		<center>
	<form method='post'>
	<table width='100%' dir='rtl'>
	<tr>
		<td>اسم المدير</td>
		<td><input name='username' type='text' size='40' /></td>
	</tr>
	<tr>
		<td>كلمه المرور</td>
		<td><input name='password' type='text' size='40' /></td>
	</tr>
	<tr>
		<td>أعد كتابه كلمه المرور</td>
		<td><input name='newpass' type='text' size='40' /></td>
	</tr>
	<tr>
		<td colspan='2'>
			<input type='submit' name='addadmin' value = 'اضافه مدير' />
		
		</td>
	</tr>
	</table>
		</div>

	</form>
	</center>
	
	</body>
		</div>

</html>
