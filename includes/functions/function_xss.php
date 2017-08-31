<?php
function xss1() {
	$get = isset($_POST['get'])?$_POST['get']:null;

	
	echo 'Xss 1<form method="POST" action="">
	Search<br>
<input name="get" type="search">
		<input value="search" name="submit" type="submit">
		</form><br><br><br>';
	if (isset($_POST['submit'])) {
		echo $get;
	}
}

function xss2()
{
	

print "<br />";
		echo "</form><br><br><br><br>?what is your name<br><form method='POST' action=''>
		<select name='xss'>
		<option value='1'>str_replace</options>
		<option value='2'>addslashes</options>
		</select>
		<input type='text' name='name'>
		<input type='submit' name='submit'>
		</form><br>";
		if (isset($_POST['submit']) and $_POST['xss'] == '1'){
			$xss1 = str_replace(array('script',''),"*",$_POST['name']);
			echo $xss1;
		}
		else if (isset($_POST['submit']) and $_POST['xss'] == '2') {
			echo addslashes($_POST['name']);
		}		

		?>

		<?
		
	}


?>

	

