<?php
class includes
{
	public $Files;

	  public function _includeTheFile ($include_file)
    {
		$this->Files = $include_file;
		if (!file_exists ($this->Files))
			die ('i cant found the file');
			if (!preg_match("#^\.\..//../#",$this->Files)) die('No Hacker');
		 return include($this->Files);
		
		}
		
	}
	