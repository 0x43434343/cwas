<html>
	<head>
		<title>لوحه التحكم</title>
		<meta charset='utf-8' />
		<link rel='stylesheet' type='text/css' href='template.css'
	</head>
	<body>
	<div class='headblock'>show the comments</div>
	<div class='headblock'>
<?php

require_once '../config.php';

?>
	<table dir='rtl' width='100%'>
		<tr>
		<td width=10% id=error>#</td>
		<td width=10% id=error>subject</td>
		<td width=10% id=error>display comments</td>
		<td width=10% id=error>delete the comments</td>
		
		</tr>
		
		<?
		$action = isset($_GET['action'])?$_GET['action']:null;
		if ($action == 'delete'){
			
			$id= intval($_GET['id']);
			if ($id){
				
				$delete = $db->query("delete from connect where id='$id'");
				if ($delete){
				echo "<div class='ok'>تم حذف التعليق بنجاًح</div>";
				echo "<meta http-equiv='Refresh' content='2; url='showcon.php' />";
				exit;
					}
				}
			}
			?>
			
		<?
		
		$sql = $db->query('select * from connect');
		while ($row = mysql_fetch_object($sql)){
echo"
<tr>
<td width='10%' id='td1'>".$row->id."</td>
<td width='10%' id='td2'>".$row->title."</td>
<td width='10%' id='td1'>
<a href='?action=show&id=".$row->id."'>
<a href='?action=show&id=".$row->id."'>
مشاهده التعليقات
</a> </td>
<td>
<a href='?action=delete&id=".$row->id."'>
حذف
</a>
</td>
</tr>";
if (isset($_REQUEST['action']) == 'show') 
{
	print $row->subject;

		

		

		
}

}
?>
		
	</body>
		</div>

</html>
