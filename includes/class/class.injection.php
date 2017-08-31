<?php
class _injection
{
	public $phpinf = 'phpinfo';
	public $php_uname = 'phpuname';
	public $php = "echo 3333333333;";
	public $dir = 'dir';
	private $files;
	
	
	public function __construct (){
		print "<br />";
		echo "</form><br><br><br><br> the language<br><form method='POST' action=''>
		<select name='objj'>
		<option value='phpinfo'>333</options>
		<option value='phpuname'>dir</options>
		</select>
		<input type='submit' name='submit'>
		</form><br>";
}
		public function __destruct (){
			if(!empty($php))die('aa');
			if (isset($_POST['submit']) and $_POST['objj']  == $this->phpinf){
			 eval($this->php);
			
	} else if (isset($_POST['submit']) and $_POST['objj']  == $this->php_uname){
			system($this->dir);
	}
	}
	
}


?>
