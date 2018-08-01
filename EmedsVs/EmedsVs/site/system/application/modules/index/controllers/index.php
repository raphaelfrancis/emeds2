<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {
	


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('email');
		$this->load->library('form_validation');
		$this->load->model('index_model');
		$this->load->library('session');
		$this->load->helper('text');
		$this->form_validation->set_error_delimiters('<p style="color:#F00;font-size:10px;">', '</p>');
		date_default_timezone_set('Asia/Kolkata');
		

		
	}
	

	public function index($hid='')
	{
		$data='';
		$this->template->load('master','home',$data);
	}
	
	public function signin()
	{
		$this->load->view('signin');
	}
	
	public function signup()
	{
		$this->load->view('signup');
	}
	
	public function forgot()
	{
		$this->load->view('forgot');
	}

	public function sites()
	{
		if(!$this->session->userdata('userid')){redirect('index/signin');}
		$data='';
		$this->template->load('master','sites',$data);
	}

	public function templates()
	{
		$data='';
		$this->template->load('master','templates',$data);
	}
	
	public function pricing()
	{
		$data='';
		$this->template->load('master','pricing',$data);
	}
	
	public function contact()
	{
		$data='';
		$this->template->load('master','contact',$data);
	}
	
	public function logout()
	{
		$data = array('online' => 0);
		$this->index_model->updateRow('xcrm_login_master',"xcrm_user_id",$this->session->userdata('userid'),$data);
		
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		$this->session->set_flashdata('message','You are now logged out.');
		redirect('index');
	}

}