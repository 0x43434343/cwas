
<?php 

class ze {
	private $_FileName;
	private $_Data;
	
	public function Write ($strFileName,$strData) 
	{
		$this->_FileName = $strFileName;
		$this->_Data = $strData;
		//$this->_CheckData;
		$handle = fopen($strFileName,'w');
		fwrite ($handle,$strData."\n");
		fclose($handle);
		
		}
		
		public function Read ($strFileName)
		{
			$this->_FileName = $strFileName;
			$this->_CheckExists();
			$handle = fopen($strFileName,'r');
			return file_get_contents($strFileName);
			}
		private function _chmod ($ze3r0six)
		{
			if (file_exists($ze3r0six)) {
				chmod($ze3r0six,755);
				
			}
			
			}
		private function _CheckExists (){
			if (!file_exists ($this->_FileName))
			die ('The file does not exists');
		}
		private function _CheckPermission (){
			if (!is_writable($this->_FileName)) 
				die ('Change your CHMOD permissions to '.$this->_FileName);
		}
			
			
		public function _clean($file) {
				$file = str_replace('<?','', $file);
				$file = str_replace('?>','', $file);
				$file = str_replace('<?php','', $file);

				
		}
	}

	
	
?>
