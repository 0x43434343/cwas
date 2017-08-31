
<?php
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Admin Login!!</title>
	<meta charset='utf-8' />
	<link rel='stylesheet' type='text/css'  href='template.css'/>
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <script>
	  $(document).ready(function(){ 
	$(function(){
		$('.headblock').click(function()
		{
			$(this).next('.bodyblock').toggle()
			});
		});
		});
		</script>
	</head>
	<center>
	<a href='../index.php' target='_blank'></a>
	<a href='logout.php'>logout</a>
	</center>
		
		<div class='headblock'>
		conntact us
		</div>
		<div class='bodyblock'>
		<ul>
			<li><a target='home' href='showcon.php'>contact</a></li>
			
		</ul>
		</div>
		
		<div class='headblock'>
		add Administrator
		</div>
		<div class='bodyblock'>
		<ul>
			<li><a target='home' href='adda.php'>add admin !</a></li>
			<li><a target='home' href='edita.php'>change permission</a></li>
		</ul>
		</div>
		

		
	
</html>
