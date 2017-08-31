<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="author" content="ToniTuli" />
	<title>CWAS</title>
    <script type="text/javascript" src="jquery-1.3.2.min_.js"></script>
    <script type="text/javascript">
	$(function(){
		$('#box-slide-1 .box-content .title').click(function(){
			// Remove .current class from all titles
			$('#box-slide-1 .box-content .title').removeClass('current');
			
			// Add .hide class to all elements of .contain class
			$('#box-slide-1 .box-content .contain').addClass('hide');
			
			// Remove .hide class from current element that appears
			$(this).next().removeClass('hide');
			
			// slide up all elements of .hide class
			$('#box-slide-1 .box-content .contain.hide').slideUp(300);
			
			// Add class .current to current element
			$(this).addClass('current');
			
			// Slide down current element that will appear
			$(this).next().slideDown(300);
		});
		
		$('#box-slide-2 .box-content .title').click(function(){
			// Remove .current class from all titles
			$('#box-slide-2 .box-content .title').removeClass('current');
			
			// Add .hide class to all elements of .contain class
			$('#box-slide-2 .box-content .contain').addClass('hide');
			
			// Remove .hide class from current element that appears
			$(this).next().removeClass('hide');
			
			// slide up all elements of .hide class
			$('#box-slide-2 .box-content .contain.hide').slideUp(300);
			
			// Add class .current to current element
			$(this).addClass('current');
			
			// Slide down current element that will appear
			$(this).next().slideDown(300);
		});
		
		$('#box-slide-3 .box-content .title').click(function(){
			$(this).next().slideToggle(300);
		});
        
        $('#box-slide-4 .box-content .title').click(function(){
             $(this).next().slideToggle(0);
         });
        
	});
        
    </script>
    <style type="text/css">
form {
 	background:#111; 
  width:300px;
  margin:30px auto;
  border-radius:0.4em;
  border:1px solid #191919;
  overflow:hidden;
  position:relative;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
}

form:after {
  content:"";
  display:block;
  position:absolute;
  height:1px;
  width:100px;
  left:20%;
  background:linear-gradient(left, #111, #444, #b6b6b8, #444, #111);
  top:0;
}

form:before {
 	content:"";
  display:block;
  position:absolute;
  width:8px;
  height:5px;
  border-radius:50%;
  left:34%;
  top:-7px;
  box-shadow: 0 0 6px 4px #fff;
}

.inset {
 	padding:20px; 
  border-top:1px solid #19191a;
}

input[type="submit"] {
    background: none repeat scroll 0 0 #FFAA00;
    border: 1px solid rgba(0, 0, 0, 0.4);
    border-radius: 0.3em 0.3em 0.3em 0.3em;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 10px 10px rgba(255, 255, 255, 0.1) inset;
    color: #FFFFFF;
    cursor: pointer;
    float: right;
    font-size: 13px;
    font-weight: bold;
    padding: 5px 20px;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
}



		h1
{
text-shadow: 2px 2px #FBFE00;
}
p {
	margin: 0; padding: 0; list-style: none;
        color:#EA0BAD;
        margin:50px 0px; padding:0px;
		text-align:center;
	}
    body, ul, li, h2, h3, h4 {
        margin: 0; padding: 0; list-style: none;
        text-shadow: 1px 1px #3914AF;
        color:#FFAA00;
        margin:50px 0px; padding:0px;
		text-align:center;
    }
    body {
        direction: rtl;
        text-align: center;
        background-image:url('images/ss.png');
        background-color:#cccccc;
    }
    a { text-decoration: none; }
    .slide {
        padding: 15px;
        float: right;
        
    }

    .slid2 {
        
        float: left;
        
    }
    #box-slide-1, #box-slide-2, #box-slide-3, #box-slide-4{
        margin: 10px auto;
        width: 250px;
        text-align: right;
    }
    .ok{
	width:20%;
	margin-left:auto;
	margin-right:auto;
	background:#f1f1f1;
	color:green;
	border:1px solid green;
	text-align:center;
	padding:12px;
}
.error{

    background-color: #FFEBE8;
    border-color: #CC0000;

}
    .box-content .title {
		border:1px solid #FF0000
        margin: 1px 0 0;
        padding: 1.5px 5px 1px;
        width: 300px;
        height: 70px;
background:linear-gradient(#ff0000, #27292c);
color :#fff;
text-align: center;
font-size: 17px;
padding:4px;
margin-top:7px;
    }
    .box-content .title h3 {
        margin: 0;
        padding: 4px 5px;
        font: bold 15px "Times New Roman";
        color: #E5FB00;
    }
    .box-content .title h3 a {
        padding: 5px 0;
        color: #FFFF00;
    }
    .box-content .title h3 a:hover {
        color: #ffffff;
    }
    .box-content .title.current {
        background-color: #5f5f5f;
    }
    .box-content .title.current h3 a {
        color: #fff;
    }
    .box-content .contain {
        margin: 1px 0 0;
        padding: 5px 5px;
        width: 300px;
        display: none;
        border: 1px solid #25D500;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
    }
    .box-content .contain p {
        font: 16px tahoma;
        color: #FFF;
    }
    #box-slide-2 .box-content .contain {
        border-color: #E5FB00;
    }
    #box-slide-2 .box-content .contain .hide { display: none; }
	.contain.display { display: block; }
    </style>
<!--[if IE 7]>
    <style type="text/css" media="screen">
    #box-slide-1, #box-slide-2, #box-slide-3{ display: inline; }
    </style>
<![endif]-->

</head>


<body>

<?php



include 'includes/style.php';
require_once 'includes/class/config.class.php';
include 'config.php';
include 'includes/functions/function_xss.php';

if (empty($_GET)){
	echo  "<h1>camel web application security ->{ CWAS }</h1>";
	exit;
	}
$get = isset($_GET['get'])?$_GET['get']:null;
if ($get == 'xss1'){
	xss1();
	
}
	elseif ($get == 'xss2'){
		xss2();
		
	}else if (isset($_GET['get']) == 'xss3')
	{
		
	$title = isset($_POST['title'])?$_POST['title']:null;
	$subject = isset($_POST['subject'])?$_POST['subject']:null;
				echo "<br><br><br><br><contact us><br>Xss4_Stored<br>
				<form method='post' action=''>
			subject:	<input type='text' name='title' width='20'><br>
		<textarea rows='20' cols='60' name='subject'></textarea><br>
		<input type = 'submit' name='insert'>
		</form><br>";
	
		
		if (empty($title) or empty($subject))die('please fill out');
		$insert = $db->query("INSERT INTO connect(id,title,subject)
		VALUES
		(null,'$title','$subject')
		");
	
		if ($insert)
		{
			echo "send secussfully";
			
	}
}
$ls = isset($_GET['ls'])?$_GET['ls']:null;
if ($ls == 'local') {
require("includes/class/class.Local.php");
print "<br />";
		echo "</form><br><br><br><br> the language<br><form method='POST' action=''>
		<select name='language'>
		<option value='english'>English</options>
		<option value='arabic'>Arabic</options>
		</select>
		<input type='submit' name='submit'>
		</form><br>";
		if (isset($_POST['submit'])){
			$english = $_POST['language'];
			if  (isset($english)){
				$url = $english.".php";
				
			}
			$sf = include($url);
			
			}

}


if ($ls == 'local2') {
	
	require("includes/class/class.Local.php");
	echo "<h3>help me out </h3>";
	$local2 = new includes();
	$lf = $local2->_readfile($_GET['read']);

}


$name = isset($_POST['name'])?$_POST['name']:null;
$age = isset($_POST['age'])?$_POST['age']:null;
$id = isset($_GET['id'])?$_GET['id']:null;

if ($id == 'remote') {
require("includes/class/class.log.php");
print " enter your nname
<form action='' method='post'>
Name ;<input type='text' name='name'><br>
Age  ; <input type='text' name='age'>
<input type='submit' name='submit' />
</form>
";
if (empty($name) or empty($age))die('error');			
if (isset($_POST['submit'])){
	
		$save = new ze();
	
		if ($save->Write('ss.php', $name )){
				print "<h3>writing</h3>";
		}

			
			}
		}
$id = isset($_GET['id'])?$_GET['id']:null;

if ($id == 'remote2') {
$name = isset($_POST['name'])?$_POST['name']:null;
require("includes/class/class.log.php");
print " fill out your address
<form action='' method='post'>
Name ;<input type='text' name='name'><br>
<input type='submit' name='submit' />
</form>
";
if (empty($name))die('');
if (isset($_POST['submit'])){
	if ($_POST['ra'] !='as')
			if ($_POST['ls'] == 'z3r0day'){
				if ($_POST['a'] == 'rs'){
					if ($_POST['ff'] =='do'){
		$save = new ze();
		if ($save->Write('priv.php', $name )){
		}
				print "<h3>writing</h3>";

		}
		
			}
		}

			
			}
		}
$cmd = isset($_GET['cmd'])?$_GET['cmd']:null;

if ($cmd == 'remote') {
$dns = isset($_POST['dns'])?$_POST['dns']:null;

require("includes/class/class.system.php");
$cmd = new _command();

print "<h2> get domain name system</h2>";
print "<form method='post' action=''>
		<input type='text' name='dns' value='rit.edu'>
		<input type='submit'>
</form>";

	$up = $cmd->ping($dns);
	if ($up){
			echo "<br>";
			echo $up;
	}else {
		echo "No way";
	}
	
}

//----------

$cmd = isset($_GET['cmd'])?$_GET['cmd']:null;

if ($cmd == 'remote2') {
$domain = isset($_POST['domain'])?$_POST['domain']:null;

require("includes/class/class.system.php");
$cmd = new _command();

print "<h2> easy challenge</h2>";
print "<h2> bypass it if you can ! ' !!</h2>";
print " 
<form action='' method='post'>
Domain ;<input type='text' name='domain'><br>

<input type='submit' name='submit' />
</form>
";
$disable = array('id','wget','curl','ln -s','whoami','cp','pwd','ftp','dir' ,'php','ls');
	foreach ($disable as $block){
		//print_r($block);
		if ($domain == $block)die('try harder !');
	}
		$s = $cmd->_ping($domain);
		echo $s;
}		


require("includes/class/class.injection.php");
require('includes/class/class.injection2.php');
$obj = isset($_GET['obj'])?$_GET['obj']:null;
if ($obj == 'inj'){
$obj = new _injection();
$z3r0 = unserialize($_POST['go']);
	
	}

if ($obj == 'inj2'){
	$ls = new _errorlog();
	$z3r0 = unserialize($_COOKIE['go']);
	print "<h3>good luck  .. </h3>";
}	

?>
  
</body>
</html>
