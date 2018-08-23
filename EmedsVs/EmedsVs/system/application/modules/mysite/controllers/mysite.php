<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mysite extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('email');
		$this->load->library('form_validation');
		$this->load->model('mysite_model');
		$this->load->library('session');
		$this->load->helper('text');
		$this->form_validation->set_error_delimiters('<p style="color:#F00;font-size:10px;">', '</p>');
	}

	public function index($username='',$pagename='index')
	{
		
		$data['username']=$username;
		$data['userid']=$this->session->userdata('userid');
		$data['content']=$this->mysite_model->mysitecontent($username,$pagename);
		
		$this->load->view('mytemplate',$data);
	}
	public function sitecontent()
	{
		$data='';
		$this->load->view('sitecontent',$data);
	}
	

}