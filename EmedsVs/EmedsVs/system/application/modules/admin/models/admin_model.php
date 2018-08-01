<?php
class admin_model extends CI_Model
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
	function getDataByIdPosition($tablename,$field_name,$field_id)
	{
		$this->db->where($field_name,$field_id);
		$this->db->order_by('position');
		return $this->db->get($tablename)->result();
	}
	function getNumRows($tablename)
	{
		return $this->db->get($tablename)->num_rows();
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

	function deleteById($tablename,$field_name,$id)
	{
		$this->db->where($field_name, $id);
		$this->db->delete($tablename); 
	}
	
	function move_home_position($from,$to,$id,$cus_page_id)
	{
		$data = array(
			'position' => $from
		);
		$this->db->where('cus_page_id',$cus_page_id);
		$this->db->where('position',$to);
		$this->db->update('defalut_banner', $data);
		
		
		$data = array(
			'position' => $to
		);
		$this->db->where('id',$id);
		$this->db->update('defalut_banner', $data);
		
	}
	
	function mysitecontent($site_id)
	{
		$this->db->select('*');
		$this->db->from('emeds_cus_sites');
		$this->db->where('emeds_cus_sites.site_id',$site_id);
		$this->db->join('emeds_templates', 'emeds_templates.temp_id = emeds_cus_sites.site_temp_id','right');
		
		return $this->db->get()->row();
	}


	function login()
	{
		$loginName = $_POST['uname']; $passWord = $_POST['pword'];
		$passWord = preg_replace ("/</","[",$passWord); $loginName = preg_replace ("/>/","]",$loginName); 
		$loginName = str_replace(".."," ",$loginName); $passWord = str_replace(".."," ",$passWord);        
		$loginName=trim($loginName); $passWord=trim($passWord);
		
		$this->db->where('username',$loginName);
		$this->db->where('password',md5($passWord));
		return $this->db->get('admin_users')->row();
		
	}
	
	function email_exist($email)
	{
		$this->db->where('cus_email',$email);
		return $this->db->get('emeds_customer')->row();
	}
	
	function editHomeDataByPosition($value,$template_id)
	{
		$this->db->where('cus_page_id',$value);
		$this->db->where('temp_id',$template_id);
		$this->db->order_by('position');
		return $this->db->get('defalut_banner')->result();
	}



}

?>