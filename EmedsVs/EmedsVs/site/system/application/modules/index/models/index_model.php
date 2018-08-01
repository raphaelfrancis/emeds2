<?php
class index_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->tree = array();
		$this->parent = '';
		$this->arrow = '|';
	}
	
	

}

?>