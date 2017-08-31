<?php
class includes
{
	public $Files;

	  public function inc ($include_file)
    {
		$this->Files = $include_file;
		if (!file_exists ($this->Files))
			die ('i cant found the file');
			
		 return include($this->Files);
		
		}
		
	}
	
	
class Reader {
 
    private $fName = "";
    private $FilePointer = 0;
 
    public function __construct($filename){
        $this->fName = $filename;
    }
 
    public function readLine(){
        if (!$this->fName)
            return NULL;    
 
        $file_handle = fopen($this->fName, "rb");
        fseek($file_handle, $this->FilePointer);
        if(!feof($file_handle)){
            $value = fgets($file_handle);
            $this->FilePointer += strlen($value);
            fclose($file_handle);
            return $value;
        }
        else
            return NULL;
    }
 
    public function seekLine($lineNumber){
        if (!$this->fName)
            return NULL;    
 
        $file_handle = fopen($this->fName, "rb");
        $this->resetFilePointer();
        for($i=0; $i<$lineNumber; $i++)
            $this->FilePointer += strlen(fgets($file_handle));
        return $this->FilePointer;
    }
 
    private function resetFilePointer(){
        $this->FilePointer = 0;
    }
 
    public function countLines(){
        if (!$this->fName)
            return NULL;    
 
        $file_handle = fopen($this->fName, "rb");
        $count = 0;
        while(!feof($file_handle)) {
            fgets ($file_handle);
            $count ++;
        }
        fclose($file_handle);
        return $count;
    }
}
?>
