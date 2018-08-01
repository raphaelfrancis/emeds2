<?php
class mysite_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->tree = array();
		$this->parent = '';
		$this->arrow = '|';
	}
	
	// Get row field data*****************************************
	function getData($tablename)
	{
		return $this->db->get($tablename)->result();
	}

	function getDataById($tablename,$field_name,$field_id)
	{
		$this->db->where($field_name,$field_id);
		return $this->db->get($tablename)->result();
	}
	
	function getRowDataById($tablename,$field_name,$field_id)
	{
		$this->db->where($field_name,$field_id);
		return $this->db->get($tablename)->row();
	}
	// Get row field data*******************************************
	
	// Add / Update row field data**********************************
	function addRow($tablename,$data)
	{
		return $this->db->insert($tablename, $data); 
	}
	
	function updateRow($tablename,$field_name,$field_id,$data)
	{
		$this->db->where($field_name,$field_id);
		return $this->db->update($tablename, $data); 
	}
	// Add / Update row field data**********************************
	
	
	function mysitecontent($username,$pagename)
	{
		$this->db->select('*');
		$this->db->from('emeds_cus_sites');
		$this->db->where('emeds_cus_sites.site_username',$username);
		$this->db->join('emeds_templates', 'emeds_templates.temp_id = emeds_cus_sites.site_temp_id','right');
		
		return $this->db->get()->row();
	}

}

?>