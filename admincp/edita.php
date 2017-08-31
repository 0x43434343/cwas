<?php require_once '../config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>لوحه التحكم</title>
		<meta charset='utf-8' />
		<link rel='stylesheet' type='text/css' href='template.css'>
	</head>
	<body>
	<div class='headblock'>تعديل الإداريين</div>
	<div class='error'>
		<?
		$action = isset($_REQUEST['action'])?$_REQUEST['action']:null;
		if ($action == 'delete'){
			
			$get_id = intval($_GET['id']);
			if ($get_id){
				
				$delete = $db->query("delete from username where id='$get_id'");
				if ($delete){
				echo "<div class='ok'>تم حــذف المدير بنجاح</div>";
				echo "<meta http-equiv='Refresh' content='1; url='edita.php' />";
				exit;
					}
				}
			}
		$action = isset($_REQUEST['action'])?$_REQUEST['action']:null;
		if ($action == 'edit'){
			$get_id = intval($_GET['id']);
			if($get_id){
				$sql3 = $db->query("select * from username where id='$get_id'");
				$row = mysql_fetch_object($sql3);
				echo "<form method='post'>
			<table width='100%' dir='rtl'>
	<tr>
		<td>اسم المدير</td>
		<td><input name='username' type='text' value='".$row->username."' size='40' /></td>
	</tr>
	<tr>
		<td>كلمه المرور</td>
		<td><input name='password' type='text' size='40' /></td>
	</tr>
	<tr>
		<td colspan='2'>
			<input type='submit' name='addadmin' value = 'اضافه مدير' />
		
		</td>
	</tr>
	</table>
		</div>

	</form>";
	exit;
			}
			}
		?>
		
	<table dir='rtl' width='100%'>
		<tr>
		<td width=10% id=error>#</td>
		<td width=10% id=error>الأداري</td>
		<td width=10% id=error>تعديل</td>
		<td width=10% id=error>حذف</td>
		</tr>
		
		<?
		$sql = $db->query('select * from username');
		while ($row = mysql_fetch_object($sql)){
echo"
<tr>
<td width='10%' id='td1'>".$row->id."</td>
<td width='10%' id='td2'>".$row->username."</td>
<td width='10%' id='td1'>
<a href='?action=edit&id=".$row->id."'>Edit</a>

</td>
</tr>";
}
		?>
			
	
	</table>
</html>
