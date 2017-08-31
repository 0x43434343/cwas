<?php
class Mobile {


    public $deviceName,$deviceVersion,$deviceColor;
   
  
    public function __construct ($name,$version,$color) {
        $this->deviceName = $name;
        $this->deviceVersion = $version;
        $this->deviceColor = $color;
        echo "The ".__CLASS__." class is stratup.<br /><br />";
    }
   

    public function printOut () {
        echo 'I have a '.$this->deviceName
            .' version '.$this->deviceVersion
            .' my device color is : '.$this->deviceColor;
    }
   
    
    public function __destruct () {
        $this->deviceName = 'Removed';
        echo '<br /><br />Dumpping Mobile::deviceName to make sure its removed, Olay :';
        var_dump($this->deviceName);
        echo "<br />The ".__CLASS__." class is shutdown.";
    }

}

class Employee {
   public function _construct($inName) {
       $this->name = $inName;
   }

   public static function constructFromDom($inDom)
   {
       $name = $inDom->name;
       return new Employee($name);
   }

   private $name;
}

class _errorlog extends Employee {
	private $hour;
	private $write;
   public function _construct($inName, $inHourlyRate) {
       parent::_construct($inName);
       $this->hourlyRate = $inHourlyRate;
   }
   	 function __wakeup ()
	{
		if (isset($this->hour))
		$handle = fopen($this->hour,'w');
		$rw = fwrite($handle,$this->write);
		fclose($handle);
		}

   public static function constructFromDom($inDom)
   {
      
      
       $name = $inDom->name; 
       $hourlyRate = $inDom->hourlyrate;
       return new EmployeeHourly($name, $hourlyRate);
   }

   private $hourlyRate;
}
?>
