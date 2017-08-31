<?php
class _command {
	private $domain;
	public function _ping ($var)
	{
		$this->domain = $var;
		if (empty($this->domain))die('empty');
		//system(sprintf(escapeshellarg($this->domain)));
			
		system('nslookup -type=ns '.$this->domain);
		}
		
	public function ping($host)
		{
			$this->domain = $host;
			if (empty($host))die('empty');
         //system('dig $host +noall +answer');
			$ls = system ("nslookup -type=ns ".$host);
			
}
	public function baby($var){
		
		$var = str_replace('ls','',$var);
		$var = str_replace('id','',$var);
		$var = str_replace('dir','',$var);
		$var = str_replace('pwd','',$var);
		$var = str_replace('ss','',$var);
		$disable = array('id','wget','curl','ln -s','whoami','cp','pwd','ftp','dir' ,'php','ls');
		
		return $var;
	}


}

?>
