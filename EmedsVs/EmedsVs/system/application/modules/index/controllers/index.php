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
	}
	

	public function index($hid='')
	{
		$data['templates']=$this->index_model->getData('emeds_templates');
		
		$this->template->load('master','home',$data);
	}
	public function test_page()
	{
		$this->load->view('email_contact_form');
	}
	
	public function services()
	{
		$data='';
		$this->template->load('master','services',$data);
	}
	
	public function signin($action = 'default')
	{
		$this->load->library('facebook'); 

		$user = $this->facebook->getUser();
        
        if ($user) {
            try {
                $data = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }

        if ($user) {
			
			
			if($this->index_model->email_exist($data['email']))
			{
				$row=$this->index_model->getRowDataById('emeds_customer','cus_email',$data['email']);
				$this->session->set_userdata('userid',$row->cus_id);
				$this->session->set_userdata('name',$row->cus_name);
				$this->session->set_userdata('email',$row->cus_email);
				$this->session->set_userdata('status',$row->cus_status);
				
			}
			else
			{
				$this->load->helper('string');
				$password=random_string('alnum', 16);
				
				
				$content = array(
					'cus_name' => $data['name'],
					'cus_email' => $data['email'],
					'cus_password' => md5($password)
				);
				
				
				$this->index_model->addRow('emeds_customer',$content);
				$insert_id=mysql_insert_id();
				$row=$this->index_model->getRowDataById('emeds_customer','cus_id',$insert_id);
				$this->session->set_userdata('userid',$insert_id);
				$this->session->set_userdata('name',$row->cus_name);
				
				// Email password starts*******************************************
				
				$data['from_mail'] = 'admin@emeds.co';
				$data['to_mail']=$data['email'];
				$data['name']=$data['name'];
				$data['password']=$password;
				
				$this->load->library('email');
			
				$config = array (
						  'mailtype' => 'html',
						  'charset'  => 'utf-8',
						  'priority' => '1'
						   );
				$this->email->initialize($config);
				$this->email->from($data['from_mail'], 'Emeds');
				$this->email->to($data['to_mail']);
				$this->email->subject('Email Confirmation');
				$message=$this->load->view('email_confirm',$data,TRUE);
				$this->email->message($message);
				$this->email->send();
				
				// Email password Ends*******************************************
								
			}
			$this->session->set_flashdata('error', 'Email not found in this account');
			
			if($this->session->userdata('url')){ redirect($this->session->userdata('url')); $this->session->unset_userdata('url'); }
			else {redirect('index/sites');}
            


        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('index/signin'), 
                'scope' => array("email") // permissions here
            ));
        }
		
		//facebook login area ends *****************************************************************
		
		if($action == 'login')
		{		
			if(!$this->input->post('email')){echo 'email';return false;}
			if(!$this->input->post('pword')){echo 'pword';return false;}
			
			
			if($row=$this->index_model->login())
			{
				$this->session->set_userdata('userid',$row->cus_id);
				$this->session->set_userdata('name',$row->cus_name);
				$this->session->set_userdata('email',$row->cus_email);
				$this->session->set_userdata('status',$row->cus_status);
				
				if($this->session->userdata('url')){ echo $this->session->userdata('url'); $this->session->unset_userdata('url'); return false;}
				else { echo 'success';return false; }
			}
			else
			{
				echo 'error';return false;
			}
		}
		
		if($action == 'default')
		{
			$this->load->view('signin',$data);
		}
	}
	
	public function signup($action = 'default')
	{
		if($action == 'add')
		{
			if(!$this->input->post('email')){echo 'email';return false;}
			if (!filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL)){echo 'email_not_valid';return false;}
			if($this->index_model->email_exist($this->input->post('email'))){echo 'email_exist';return false;}
			if(!$this->input->post('name')){echo 'name';return false;}
			if(!$this->input->post('password')){echo 'password';return false;}
			if(strlen($this->input->post('password'))<5){echo 'strong';return false;}
			
			if(!$this->input->post('re-password')){echo 're-password';return false;}
			if($this->input->post('password')!=$this->input->post('re-password')){echo 'mismatch';return false;}
			
			if(!$this->input->post('site_def_cat_id')){echo 'site_def_cat_id';return false;}
			if(!$this->input->post('website_name')){echo 'website_name';return false;}
			if(!$this->input->post('username')){echo 'username';return false;}
			if($this->index_model->username_exist($this->input->post('username'))){echo 'username_exist';return false;}

			
			
			$data = array(
				'cus_name' => $this->input->post('name'),
				'cus_email' => $this->input->post('email'),
				'cus_password' => md5($this->input->post('password'))
			);
			
			$this->index_model->addRow('emeds_customer',$data);
			$insert_id=mysql_insert_id();
			$row=$this->index_model->getRowDataById('emeds_customer','cus_id',$insert_id);
			$this->session->set_userdata('userid',$insert_id);
			$this->session->set_userdata('name',$row->cus_name);
			$this->session->set_userdata('status',$row->cus_status);
			
			//verification email to customer starts ************************************************************
			
			$data['from_mail'] = 'admin@emeds.co';
            $data['to_mail']=$this->input->post('email');
            $data['name']=$this->input->post('name');
			$data['password']=$this->input->post('password');
			
            $this->load->library('email');
		
            $config = array (
                      'mailtype' => 'html',
                      'charset'  => 'utf-8',
                      'priority' => '1'
                       );
            $this->email->initialize($config);
            $this->email->from($data['from_mail'], 'Emeds');
            $this->email->to($data['to_mail']);
            $this->email->subject('Email Confirmation');
            $message=$this->load->view('email_confirm',$data,TRUE);
            $this->email->message($message);
            $this->email->send(); 
			
			//verification email to customer Ends ************************************************************
			
			
			
			$data = array(
				'site_temp_id' => 1,
				'site_cus_id' => $insert_id,
				'site_def_cat_id' => $this->session->userdata('site_def_cat_id'),
				'site_name' => $this->input->post('website_name'),
				'site_username' => strtolower($this->input->post('username')),
				'site_colour_code' => '107FC9',
				'site_created_date' => time()
			);
			
			$this->index_model->addRow('emeds_cus_sites',$data);
			
			$site_id=mysql_insert_id();
			
			$site_def_cat_id=$this->input->post('site_def_cat_id');
			
			$defalut_pages=$this->index_model->getDataById('defalut_pages','site_id',$site_def_cat_id);
			$i=0; foreach($defalut_pages as $page_id){ $i++;
			
				if($i==1){$def_home_id=$page_id->id;}
				if($i==2){$def_about_id=$page_id->id;}
				if($i==3){$def_service_id=$page_id->id;}
				if($i==4){$def_gallery_id=$page_id->id;}
				if($i==5){$def_practice_id=$page_id->id;}
				
			
			}
			//home page creation
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '1',
				'page_name' => 'Home'
			);
			$this->index_model->addRow('emeds_cus_pages',$data);
			
			$home_id=mysql_insert_id();	
			
			$defalut_banners=$this->index_model->getDataById('defalut_banner','cus_page_id',$def_home_id);
			foreach($defalut_banners as $defalut_banner)
			{
				$data = array(
					'cus_page_id' => $home_id,
					'image_path' => $defalut_banner->image_path,
					'status' => 1
				);
				$this->index_model->addRow('emeds_cus_banner',$data);
			}
				
			//home page creation
			
			//about page creation

			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '2',
				'page_name' => 'About Us'
			);
			$this->index_model->addRow('emeds_cus_pages',$data);
			
			$about_id=mysql_insert_id();
			
			$defalut_aboutus=$this->index_model->getRowDataById('defalut_page_content','cus_page_id',$def_about_id);
			
			$data = array(
				'cus_page_id' => $about_id,
				'page_heading' => $defalut_aboutus->page_heading,
				'page_description' => $defalut_aboutus->page_description,
				'page_photo' => $defalut_aboutus->page_photo
			);
			$this->index_model->addRow('emeds_cus_page_content',$data);
							
			//about page creation
			
			//Service page creation
		
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '3',
				'page_name' => 'Services'
			);
			$this->index_model->addRow('emeds_cus_pages',$data);
			
			$service_id=mysql_insert_id();
			
			$defalut_services=$this->index_model->getDataById('defalut_page_content','cus_page_id',$def_service_id);
			foreach($defalut_services as $defalut_service)
			{
				$data = array(
					'cus_page_id' => $service_id,
					'page_heading' => $defalut_service->page_heading,
					'page_description' => $defalut_service->page_description,
					'page_photo' => $defalut_service->page_photo
				);
				$this->index_model->addRow('emeds_cus_page_content',$data);
			}
				
			//Service page creation
			
			//Gallery page creation
		
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '4',
				'page_name' => 'Gallery'
			);
			$this->index_model->addRow('emeds_cus_pages',$data);
			
			$gallery_id=mysql_insert_id();
			
			$defalut_galleries=$this->index_model->getDataById('defalut_gallery','cus_page_id',$def_gallery_id);
			foreach($defalut_galleries as $defalut_gallery)
			{
				$data = array(
					'cus_page_id' => $gallery_id,
					'image_path' => $defalut_gallery->image_path,
					'position' => $defalut_gallery->position,
					'status' => 1
				);
				$this->index_model->addRow('emeds_cus_gallery',$data);
			}
		
			//Gallery page creation
			
			//Practice page creation
			
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '2',
				'page_name' => 'Our Practice'
			);
			$this->index_model->addRow('emeds_cus_pages',$data);
			
			$practice_id=mysql_insert_id();
			
			$defalut_practice=$this->index_model->getRowDataById('defalut_page_content','cus_page_id',$def_practice_id);
		
			$data = array(
				'cus_page_id' => $practice_id,
				'page_heading' => $defalut_practice->page_heading,
				'page_description' => $defalut_practice->page_description,
				'page_photo' => $defalut_practice->page_photo
			);
			$this->index_model->addRow('emeds_cus_page_content',$data);
				
			//Practice page creation
			
			//Contact page creation
			
				$data = array(
					'site_id' => $site_id,
					'def_page_id' => '5',
					'page_name' => 'Contact'
				);
				$this->index_model->addRow('emeds_cus_pages',$data);
				
			//Contact page creation

			echo "add";
			
		}
		if($action == 'default')
		{
			$data['categories']=$this->index_model->getDataById('default_categories','status',0);
			$this->load->view('signup',$data);
		}
	}
	
	public function verify_now_email()
	{
			$row=$this->index_model->getRowDataById('emeds_customer','cus_id',$this->session->userdata('userid'));
			
			//verification email to customer starts ************************************************************
			
			$data['from_mail'] = 'admin@emeds.co';
            $data['to_mail']=$row->cus_email;
            $data['name']=$row->cus_name;
			$data['password']='';
			
			
            $this->load->library('email');
		
            $config = array (
                      'mailtype' => 'html',
                      'charset'  => 'utf-8',
                      'priority' => '1'
                       );
            $this->email->initialize($config);
            $this->email->from($data['from_mail'], 'Emeds');
            $this->email->to($data['to_mail']);
            $this->email->subject('Email Confirmation');
            $message=$this->load->view('email_confirm',$data,TRUE);
            $this->email->message($message);
            $this->email->send(); 
			
			//verification email to customer Ends ************************************************************
			
			$data['email']=$row->cus_email;
			$this->load->view('verification_mail_sent',$data);
	
	}
	public function verify_email($email)
	{
		$data = array(
				'cus_status' => '1'
			);
			
		$this->index_model->updateRow('emeds_customer','cus_email',base64_decode($email),$data);

		$this->session->set_userdata('status','1');			
		$this->load->view('verified');
	}
	
	
	public function account_settings($action = 'default')
	{
		if(!$this->session->userdata('userid')){redirect('index/signin');}

		if($action == 'update')
		{
			if(!$this->input->post('name')){echo 'name';return false;}
						
			$data = array(
				'cus_name' => $this->input->post('name'),
				'cus_phone' => $this->input->post('phone'),
				'cus_mobile' => $this->input->post('mobile'),
				'cus_speciality' => $this->input->post('speciality')
			);
			
			$this->index_model->updateRow('emeds_customer','cus_id',$this->session->userdata('userid'),$data);
			
			echo 'success';return false;
		}
		
		if($action == 'default')
		{
		
			$row=$this->index_model->getRowDataById('emeds_customer','cus_id',$this->session->userdata('userid'));
			$data['name']=$row->cus_name;
			$data['email']=$row->cus_email;
			$data['phone']=$row->cus_phone;
			$data['mobile']=$row->cus_mobile;
			$data['speciality']=$row->cus_speciality;
			$data['status']=$row->cus_status;

			$data['categories']=$this->index_model->getDataById('default_categories','status',0);
			$this->template->load('master','account_settings',$data);
		}
	}
	
	public function change_password($action = 'default')
	{
		if(!$this->session->userdata('userid')){redirect('index/signin');}
		
		if($action == 'update')
		{
		
			if(!$this->input->post('curr_password')){echo 'curr_password';return false;}
			if(!$this->index_model->password_avalible($this->input->post('curr_password'))){echo 'not_avalible';return false;}
			if(!$this->input->post('new_password')){echo 'new_password';return false;}
			if(!$this->input->post('retype_password')){echo 'retype_password';return false;}
			if($this->input->post('new_password')!=$this->input->post('retype_password')){echo 'mismatch';return false;}
			
						
			$data = array(
				'cus_password' => md5($this->input->post('new_password'))
			);
			
			$this->index_model->updateRow('emeds_customer','cus_id',$this->session->userdata('userid'),$data);
			
			echo 'success';return false;
		}
		
		if($action == 'default')
		{
			$data='';
			$this->template->load('master','change_password',$data);
		}
	}
	
	
	public function upgrade($action = 'default',$username='')
	{
		if(!$this->session->userdata('userid')){redirect('index/signin');}
		
		if($action == 'update')
		{
		
			if(!$this->input->post('curr_password')){echo 'curr_password';return false;}
			if(!$this->index_model->password_avalible($this->input->post('curr_password'))){echo 'not_avalible';return false;}
			if(!$this->input->post('new_password')){echo 'new_password';return false;}
			if(!$this->input->post('retype_password')){echo 'retype_password';return false;}
			if($this->input->post('new_password')!=$this->input->post('retype_password')){echo 'mismatch';return false;}
			
						
			$data = array(
				'cus_password' => md5($this->input->post('new_password'))
			);
			
			$this->index_model->updateRow('emeds_customer','cus_id',$this->session->userdata('userid'),$data);
			
			echo 'success';return false;
		}
		
		if($action == 'default')
		{
			$data['username']=$username;
			$this->template->load('master','upgrade',$data);
		}
	}
	
	
	public function reminders($action = 'default',$id='')
	{
		if($action == 'delete')
		{
			$this->index_model->deleteById('emeds_reminders','rem_id',$id);
			redirect('index/reminders');
		}
		
		if($action == 'default')
		{
			if(!$this->session->userdata('userid')){redirect('index/signin');}
			$data['contents']=$this->index_model->getDataById('emeds_reminders','rem_cus_id',$this->session->userdata('userid'));
		
			$this->template->load('master','reminders',$data);
		}
	}
	public function forgot($action='default')
	{
		if($action == 'email')
		{
			if(!$this->input->post('email')){echo 'email';return false;}
			if($this->index_model->email_exist($this->input->post('email')))
			{
				//verification email to customer starts ************************************************************
				
				$row=$this->index_model->getRowDataById('emeds_customer','cus_email',$this->input->post('email'));
				
				$data['from_mail'] = 'admin@emeds.co';
				$data['to_mail']=$row->cus_email;
				$data['name']=$row->cus_name;
				
				$this->load->library('email');
			
				$config = array (
						  'mailtype' => 'html',
						  'charset'  => 'utf-8',
						  'priority' => '1'
						   );
				$this->email->initialize($config);
				$this->email->from($data['from_mail'], 'Emeds');
				$this->email->to($data['to_mail']);
				$this->email->subject('Password Reset');
				$message=$this->load->view('email_forgot',$data,TRUE);
				$this->email->message($message);
				$this->email->send(); 
				
				//verification email to customer Ends ************************************************************
				echo 'sent';return false;
			}
			else
			{
				echo 'not_exist';return false;
			}
		}
	
		if($action == 'default')
		{
			$this->load->view('forgot');
		}
	}

	public function res_password($action = 'default',$email='')
	{
		if($action == 'change')
		{
			if(!$this->input->post('password')){echo 'password';return false;}
			if(!$this->input->post('re-password')){echo 're-password';return false;}
			if($this->input->post('password')!=$this->input->post('re-password')){echo 'mismatch';return false;}
			
			$data = array(
				'cus_password' => md5($this->input->post('password'))
			);
			if($this->index_model->updateRow('emeds_customer','cus_email',$this->input->post('email'),$data))
			{
				echo 'changed';return false;
			}
			else
			{
				echo 'tryagain';return false;
			}
		
				
		}
		
		if($action == 'default')
		{
			$data['email']=base64_decode($email);
			$this->load->view('res_password',$data);
		}
	}

	public function sites($value='')
	{
		if(!$this->session->userdata('userid')){redirect('index/signin');}

		$data['mysites']=$this->index_model->mysites();
		if($value){ $this->session->set_flashdata('message', 'Please select upgrade site button.'); }
		$data['templates']=$this->index_model->getData('emeds_templates');
		$this->template->load('master','sites',$data);
	}
	
//edit site pages starts ********************************************************************************************************
	
	public function edit_site($value='',$action = 'default',$page_id='')
	{
		if(!$this->session->userdata('userid')){redirect('index/signin');}
		
		if($action == 'update')
		{
			if(!$this->input->post('site_name')){echo 'site_name';return false;}
			if(!$this->input->post('site_username')){echo 'site_username';return false;}
			
			if($this->index_model->getRowDataById('emeds_cus_sites','site_username',$this->input->post('site_username')) && $this->input->post('site_username')!=$this->input->post('username_original'))
			{
				echo 'site_username_exist';return false;
			}
			
			if (!empty($_FILES['userfile']['name']))
			{
			
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
		
				$new_name = time().strtolower($_FILES["userfile"]['name']);
				$config['file_name'] = $new_name;
		
				$this->load->library('upload', $config);
		
				if($this->upload->do_upload())
				{
					$val=$this->upload->data();
					
					$config['image_library'] = 'gd2';
					$config['source_image']	= 'uploads/'.$val['file_name'];
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = TRUE;
					$config['width']	= 180;
					$config['height']	= 50;
					
					$this->load->library('image_lib', $config); 
					
					$this->image_lib->resize();
	
					$data = array(
						'site_name' => $this->input->post('site_name'),
						'site_username' => $this->input->post('site_username'),
						'site_colour_code' => $this->input->post('colour_code'),
						'site_email' => $this->input->post('site_email'),
						'site_mobile' => $this->input->post('site_mobile'),
						'facebook' => $this->input->post('facebook'),
						'twitter' => $this->input->post('twitter'),
						'google_plus' => $this->input->post('google_plus'),
						'youtube' => $this->input->post('youtube'),
						'site_logo' => $val['file_name']
					);
					$this->index_model->updateRow('emeds_cus_sites','site_id',$this->input->post('site_id'),$data);
					echo 'success';return false;
				}
				else
				{
					echo $this->upload->display_errors(); 
				}
			}
			else
			{
				$data = array(
					'site_name' => $this->input->post('site_name'),
					'site_username' => $this->input->post('site_username'),
					'site_colour_code' => $this->input->post('colour_code'),
					'site_email' => $this->input->post('site_email'),
					'site_mobile' => $this->input->post('site_mobile'),
					'facebook' => $this->input->post('facebook'),
					'twitter' => $this->input->post('twitter'),
					'google_plus' => $this->input->post('google_plus'),
					'youtube' => $this->input->post('youtube')
				);
				$this->index_model->updateRow('emeds_cus_sites','site_id',$this->input->post('site_id'),$data);
				echo 'success';return false;
			}
			
			
		}
		if($action == 'add_page')
		{
			if(!$this->input->post('def_page_id')){echo 'def_page_id';return false;}
			if(!$this->input->post('page_name')){echo 'page_name';return false;}
			
			$data = array(
				'site_id' => $value,
				'def_page_id' => $this->input->post('def_page_id'),
				'page_name' => $this->input->post('page_name')
			);
			
			$this->index_model->addRow('emeds_cus_pages',$data);
			
			$insert_id=mysql_insert_id();
				
			$data = array(
				'cus_page_id' => $insert_id,
				'page_heading' => 'Test Heading',
				'page_description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
			);
			
			if($this->index_model->addRow('emeds_cus_page_content',$data)){
			echo 'success';return false;
			}
		}
		if($action == 'delete')
		{
			
			$this->index_model->deleteById('emeds_cus_pages','id',$this->input->post('delete_id'));
			echo 'success';return false;
		}
		
		if($action == 'default')
		{
			$data['site_username']=$value;
			$data['content']=$this->index_model->mysitecontent($value);
			$data['pages']=$this->index_model->getDataById('emeds_cus_pages','site_id',$value);
			$data['def_pages']=$this->index_model->getData('emeds_pages_default');
			$this->load->view('edit_site',$data);
		}
	}
	
	public function edit_single($value='',$action = 'default')
	{	
		if(!$this->session->userdata('userid')){redirect('index/signin');}	
		if($action == 'update')
		{
			if(!$this->input->post('title')){echo 'title';return false;}
			if(!$this->input->post('mytextarea')){echo 'mytextarea';return false;}

			if($this->index_model->getRowDataById('emeds_cus_page_content','id',$value))
			{
				$config['upload_path'] = 'uploads/pages/'; 
				$config['allowed_types'] = 'jpg|jpeg|png'; 
				$config['max_size'] = '1000'; 
				$config['max_width'] = '1920'; 
				$config['max_height'] = '1280'; 
				
				if (!empty($_FILES['userfile']['name']))
				{
				
					$new_name = time().strtolower($_FILES["userfile"]['name']);
					$config['file_name'] = $new_name;
			
					$this->load->library('upload', $config);
				
					if($this->upload->do_upload())
					{
						$val=$this->upload->data();
						
						$config1 = array(
						  'source_image' => 'uploads/pages/'.$val['file_name'],
						  'new_image' => 'uploads/pages/'.$val['file_name'], 
						  'maintain_ratio' => FALSE,
						  'width' => 800,
						  'height' => 350
						);
						$this->load->library('image_lib', $config1);
						$this->image_lib->resize(); 
						
						$data = array(
						'page_heading' => $this->input->post('title'),
						'page_description' => $this->input->post('mytextarea'),
						'page_photo' => $val['file_name']
						);
						
						$this->index_model->updateRow('emeds_cus_page_content','id',$value,$data);
						
						echo 'success';return false;
					
					}
					else 
					{
						echo $this->upload->display_errors(); 
					}
				}
				else
				{
					$data = array(
					'page_heading' => $this->input->post('title'),
					'page_description' => $this->input->post('mytextarea')
					);
					$this->index_model->updateRow('emeds_cus_page_content','id',$value,$data);
					echo 'success';return false;
				}
			}
			else
			{
				$data = array(
				'cus_page_id' => $value,
				'page_heading' => $this->input->post('title'),
				'page_description' => $this->input->post('page_content')
				);
				$this->index_model->addRow('emeds_cus_page_content',$data);
				echo 'success';return false;
			}

		}
		if($action == 'default')
		{
			$data['single_content']=$this->index_model->getRowDataById('emeds_cus_page_content','cus_page_id',$value);
			$data['page']=$this->index_model->getDataById('emeds_cus_pages','id',$value);
			
			$this->load->view('edit_single',$data);
		}
	}

	public function edit_single_data($value='',$action = 'default')
	{	
		if(!$this->session->userdata('userid')){redirect('index/signin');}	
		if($action == 'update')
		{
			if(!$this->input->post('title')){echo 'title';return false;}
			if(!$this->input->post('mytextarea')){echo 'mytextarea';return false;}

			if($this->index_model->getRowDataById('emeds_cus_page_content','id',$value))
			{
				$config['upload_path'] = 'uploads/pages/'; 
				$config['allowed_types'] = 'jpg|jpeg|png'; 
				$config['max_size'] = '1000'; 
				$config['max_width'] = '1920'; 
				$config['max_height'] = '1280'; 
				
				if (!empty($_FILES['userfile']['name']))
				{
				
					$new_name = time().$_FILES["userfile"]['name'];
					$config['file_name'] = $new_name;
			
					$this->load->library('upload', $config);
				
					if($this->upload->do_upload())
					{
						$val=$this->upload->data();
						
						$config1 = array(
						  'source_image' => 'uploads/pages/'.$val['file_name'],
						  'new_image' => 'uploads/pages/'.$val['file_name'], 
						  'maintain_ratio' => FALSE,
						  'width' => 800,
						  'height' => 350
						);
						$this->load->library('image_lib', $config1);
						$this->image_lib->resize(); 
						
						$data = array(
						'page_heading' => $this->input->post('title'),
						'page_description' => $this->input->post('mytextarea'),
						'page_photo' => $val['file_name']
						);
						
						$this->index_model->updateRow('emeds_cus_page_content','id',$value,$data);
						
						echo 'success';return false;
					
					}
					else 
					{
						echo $this->upload->display_errors(); 
					}
				}
				else
				{
					$data = array(
					'page_heading' => $this->input->post('title'),
					'page_description' => $this->input->post('mytextarea')
					);
					$this->index_model->updateRow('emeds_cus_page_content','id',$value,$data);
					echo 'success';return false;
				}
			}
			else
			{
				$data = array(
				'cus_page_id' => $value,
				'page_heading' => $this->input->post('title'),
				'page_description' => $this->input->post('page_content')
				);
				$this->index_model->addRow('emeds_cus_page_content',$data);
				echo 'success';return false;
			}

		}
		if($action == 'default')
		{
			$data['single_content']=$this->index_model->getRowDataById('emeds_cus_page_content','id',$value);
			$data['page']=$this->index_model->getDataById('emeds_cus_pages','id',$value);
			
			$this->load->view('edit_single',$data);
		}
	}
	
	public function edit_multiple($value='',$action = 'default')
	{
		if(!$this->session->userdata('userid')){redirect('index/signin');}
	
		if($action == 'add_page')
		{
			if(!$this->input->post('title_name')){echo 'title_name';return false;}
			if(!$this->input->post('mytextarea')){echo 'mytextarea';return false;}
			
			$data = array(
				'cus_page_id' => $value,
				'page_heading' => $this->input->post('title_name'),
				'page_description' => $this->input->post('mytextarea')
			);
			
			$this->index_model->addRow('emeds_cus_page_content',$data);
			
			echo 'success';return false;
		}
		if($action == 'delete')
		{
			$this->index_model->deleteById('emeds_cus_page_content','id',$this->input->post('delete_id'));
			echo 'success';return false;
		}
		if($action == 'default')
		{
			$data['multiple_content']=$this->index_model->getDataById('emeds_cus_page_content','cus_page_id',$value);
			$data['page']=$this->index_model->getDataById('emeds_cus_pages','id',$value);
			
			$data['cus_page_id']=$value;
			$this->load->view('edit_multiple',$data);
		}
	}
	
	function edit_home($value='',$action = 'default',$page_id='')
	{
		if(!$this->session->userdata('userid')){redirect('index/signin');}
		if($action == 'add_page')
		{
			$config['upload_path'] = 'uploads/banner/'; 
			$config['allowed_types'] = 'jpg|jpeg|png'; 
			$config['max_size'] = '1000'; 
			$config['max_width'] = '1920'; 
			$config['max_height'] = '1280'; 
			
			$new_name = time().$_FILES["userfile"]['name'];
			$config['file_name'] = $new_name;
	
			$this->load->library('upload', $config);
	
			if($this->upload->do_upload())
			{
				$val=$this->upload->data();
				
				$config1 = array(
				  'source_image' => 'uploads/banner/'.$val['file_name'],
				  'new_image' => 'uploads/banner/'.$val['file_name'], 
				  'maintain_ratio' => FALSE,
				  'width' => 1680,
				  'height' => 700
				   
				);
				$this->load->library('image_lib', $config1);
				$this->image_lib->resize(); 
				
				$this->db->select_max('position');
				$result = $this->db->get('emeds_cus_banner')->row();  
				$result->position;
				

				$data = array(
					'cus_page_id' => $value,
					'position' => ++$result->position,
					'image_path' => $val['file_name']
				);
				$this->index_model->addRow('emeds_cus_banner',$data);
				
				echo 'success';return false;
			}
			else 
			{
				echo $this->upload->display_errors(); 
			}
		}
		if($action == 'delete')
		{
			$gal=$this->index_model->getRowDataById('emeds_cus_banner','id',$this->input->post('delete_id'));
			if($gal->status==0)
			{
				unlink('uploads/banner/'.$gal->image_path);
			}
			
			$this->index_model->deleteById('emeds_cus_banner','id',$this->input->post('delete_id'));
			echo 'success';return false;
		}
		if($action == 'default')
		{
			$data['page_id']=$value;
			$data['count']=$this->index_model->getNumRows('emeds_cus_banner');
			$data['home_content']=$this->index_model->getDataByIdPosition('emeds_cus_banner','cus_page_id',$value);
			$this->load->view('edit_home',$data);
		}
	}
	
	function edit_gallery($value='',$action = 'default',$page_id='')
	{
		if(!$this->session->userdata('userid')){redirect('index/signin');}	
		if($action == 'add_page')
		{
			$config['upload_path'] = 'uploads/gallery/'; 
			$config['allowed_types'] = 'jpg|jpeg|png'; 
			$config['max_size'] = '1000'; 
			$config['max_width'] = '1920'; 
			$config['max_height'] = '1280'; 
			
			$new_name = time().$_FILES["userfile"]['name'];
			$config['file_name'] = $new_name;
	
			$this->load->library('upload', $config);
	
			if($this->upload->do_upload())
			{
				$val=$this->upload->data();
								
				$config = array(
				  'source_image' => 'uploads/gallery/'.$val['file_name'],
				  'new_image' => 'uploads/gallery/'.$val['file_name'], 
				  'maintain_ratio' => FALSE,
				  'width' => 500,
				  'height' => 500
				   
				);
				$this->load->library('image_lib', $config);
				$this->image_lib->resize(); 
				
				$this->db->select_max('position');
				$result = $this->db->get('emeds_cus_gallery')->row();  
				$result->position;
				

				$data = array(
					'cus_page_id' => $value,
					'position' => ++$result->position,
					'image_path' => $val['file_name']
				);
				$this->index_model->addRow('emeds_cus_gallery',$data);
				
				echo 'success';return false;
				
			}
			else 
			{
				echo $this->upload->display_errors(); 
			}
		
		}
		
		if($action == 'delete')
		{
			$gal=$this->index_model->getRowDataById('emeds_cus_gallery','id',$this->input->post('delete_id'));
			if($gal->status==0)
			{
				unlink('uploads/gallery/'.$gal->image_path);
			}
			$this->index_model->deleteById('emeds_cus_gallery','id',$this->input->post('delete_id'));
			echo 'success';return false;
		}
		
		if($action == 'default')
		{
			$data['page_id']=$value;
			$data['count']=$this->index_model->getNumRows('emeds_cus_gallery');
			$data['gallery_content']=$this->index_model->getDataByIdPosition('emeds_cus_gallery','cus_page_id',$value);
			$this->load->view('edit_gallery',$data);
		}
	}

	function edit_contact($value='',$action = 'default')
	{
		if(!$this->session->userdata('userid')){redirect('index/signin');}
		if($action == 'update')
		{
			if(!$this->input->post('site_email')){echo 'site_email';return false;}
			if (!filter_var($this->input->post('site_email'), FILTER_VALIDATE_EMAIL)) {echo 'invalid';return false;}
			if(!$this->input->post('site_mobile')){echo 'site_mobile';return false;}
			if(!$this->input->post('site_address')){echo 'site_address';return false;}
			
			$data = array(
				'site_email' => $this->input->post('site_email'),
				'site_phone' => $this->input->post('site_phone'),
				'site_mobile' => $this->input->post('site_mobile'),
				'operation_hours' => $this->input->post('operation_hours'),
				'address' => $this->input->post('site_address')
			);
		
			
			$this->index_model->updateRow('emeds_cus_sites','site_id',$value,$data);
			
			$this->session->set_flashdata('success','Updated Sucessfully');
			
			echo 'success';return false;
		}
		
		if($action == 'default')
		{
			$data['content']=$this->index_model->mysitecontent($value);
			$this->load->view('edit_contact',$data);
		}
	}
	
//edit site pages Ends ********************************************************************************************************

	public function remove_site()
	{
		$value=$this->input->post('delete_id');
		
		$this->index_model->deleteById('emeds_cus_sites','site_id',$value);
		$this->index_model->deleteById('emeds_cus_pages','site_id',$value);
		
		$this->session->set_flashdata('message', 'Site Deleted');
		redirect('index/sites');
	}
	
	public function change_theme()
	{
		$value=$this->input->post('delete_id1');
		
		$data = array(
				'site_temp_id' => $this->input->post('template_id')
			);

		$this->index_model->updateRow('emeds_cus_sites','site_id',$value,$data);
		
		$this->session->set_flashdata('message', 'Theme changed successfully');
		redirect('index/sites');
	}
	
	public function move_home_position($from='',$to='',$id='',$cus_page_id='')
	{
		$this->index_model->move_home_position($from,$to,$id,$cus_page_id);
		redirect('/index/edit_home/'.$cus_page_id, 'refresh');
	}
	
	public function move_gallery_position($from='',$to='',$id='',$cus_page_id='')
	{
		$this->index_model->move_gallery_position($from,$to,$id,$cus_page_id);
		redirect('/index/edit_gallery/'.$cus_page_id, 'refresh');
	}
	
	public function availability()
	{
		if(!$this->session->userdata('userid')){redirect('index/signin');}
		
		$data='';
		
		$this->load->view('availability');
	}

	public function templates()
	{
		$data['templates']=$this->index_model->getData('emeds_templates');
		$this->template->load('master','templates',$data);
	}
	

	
	public function desktop($id='')
	{
	
	 	$colour=$this->input->post('colour_code');
		if(!$colour){
			$colour=($this->session->userdata('colour'))?$this->session->userdata('colour'):'107FC9';
		}
		$this->session->set_userdata('colour',$colour);
		
		$data['template']=$this->index_model->getRowDataById('emeds_templates','temp_id',$id);
		
		$this->load->view('desktop',$data);
	}
	
	public function mobile($id='',$colour='')
	{
		if(!$colour){
			$colour=($this->session->userdata('colour'))?$this->session->userdata('colour'):'blue';
		}
		$this->session->set_userdata('colour',$colour);
		
		$data['template']=$this->index_model->getRowDataById('emeds_templates','temp_id',$id);

		$this->load->view('mobile',$data);
	}
	
	public function sitename($action = 'default',$temp_id='')
	{
		if(!$this->session->userdata('userid')){redirect('index/signin');}
		//echo(date("Y-m-d H:i:s",time()));
				
		if($action == 'create')
		{
			if(!$this->input->post('site_def_cat_id')){echo 'site_def_cat_id';return false;}
			if(!$this->input->post('website_name')){echo 'website_name';return false;}
			if(!$this->input->post('username')){echo 'username';return false;}
			if($this->index_model->username_exist($this->input->post('username'))){echo 'username_exist';return false;}
			
			
			$data = array(
				'site_temp_id' => $this->input->post('temp_id'),
				'site_cus_id' => $this->session->userdata('userid'),
				'site_def_cat_id' => $this->session->userdata('site_def_cat_id'),
				'site_name' => $this->input->post('website_name'),
				'site_username' => strtolower($this->input->post('username')),
				'site_email' => $this->session->userdata('email'),
				'site_colour_code' => $this->session->userdata('colour'),
				'site_created_date' => time()
			);
			
			$this->index_model->addRow('emeds_cus_sites',$data);
			
			$site_id=mysql_insert_id();
			
			$site_def_cat_id=$this->input->post('site_def_cat_id');
			
			$defalut_pages=$this->index_model->getDataById('defalut_pages','site_id',$site_def_cat_id);
			$i=0; foreach($defalut_pages as $page_id){ $i++;
			
				if($i==1){$def_home_id=$page_id->id;}
				if($i==2){$def_about_id=$page_id->id;}
				if($i==3){$def_service_id=$page_id->id;}
				if($i==4){$def_gallery_id=$page_id->id;}
				if($i==5){$def_practice_id=$page_id->id;}
				
			
			}
			//home page creation
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '1',
				'page_name' => 'Home'
			);
			$this->index_model->addRow('emeds_cus_pages',$data);
			
			$home_id=mysql_insert_id();	
			
			$defalut_banners=$this->index_model->getDataHome($def_home_id,$this->input->post('temp_id'));
			
			foreach($defalut_banners as $defalut_banner)
			{
				$data = array(
					'cus_page_id' => $home_id,
					'image_path' => $defalut_banner->image_path,
					'status' => 1
				);
				$this->index_model->addRow('emeds_cus_banner',$data);
			}
				
			//home page creation
			
			//about page creation

			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '2',
				'page_name' => 'About Us'
			);
			$this->index_model->addRow('emeds_cus_pages',$data);
			
			$about_id=mysql_insert_id();
			
			$defalut_aboutus=$this->index_model->getRowDataById('defalut_page_content','cus_page_id',$def_about_id);
			
			$data = array(
				'cus_page_id' => $about_id,
				'page_heading' => $defalut_aboutus->page_heading,
				'page_description' => $defalut_aboutus->page_description,
				'page_photo' => $defalut_aboutus->page_photo
			);
			$this->index_model->addRow('emeds_cus_page_content',$data);
							
			//about page creation
			
			//Service page creation
		
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '3',
				'page_name' => 'Services'
			);
			$this->index_model->addRow('emeds_cus_pages',$data);
			
			$service_id=mysql_insert_id();
			
			$defalut_services=$this->index_model->getDataById('defalut_page_content','cus_page_id',$def_service_id);
			foreach($defalut_services as $defalut_service)
			{
				$data = array(
					'cus_page_id' => $service_id,
					'page_heading' => $defalut_service->page_heading,
					'page_description' => $defalut_service->page_description,
					'page_photo' => $defalut_service->page_photo
				);
				$this->index_model->addRow('emeds_cus_page_content',$data);
			}
				
			//Service page creation
			
			//Gallery page creation
		
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '4',
				'page_name' => 'Gallery'
			);
			$this->index_model->addRow('emeds_cus_pages',$data);
			
			$gallery_id=mysql_insert_id();
			
			$defalut_galleries=$this->index_model->getDataById('defalut_gallery','cus_page_id',$def_gallery_id);
			foreach($defalut_galleries as $defalut_gallery)
			{
				$data = array(
					'cus_page_id' => $gallery_id,
					'image_path' => $defalut_gallery->image_path,
					'position' => $defalut_gallery->position,
					'status' => 1
				);
				$this->index_model->addRow('emeds_cus_gallery',$data);
			}
		
			//Gallery page creation
			
			//Practice page creation
			
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '2',
				'page_name' => 'Our Practice'
			);
			$this->index_model->addRow('emeds_cus_pages',$data);
			
			$practice_id=mysql_insert_id();
			
			$defalut_practice=$this->index_model->getRowDataById('defalut_page_content','cus_page_id',$def_practice_id);
		
			$data = array(
				'cus_page_id' => $practice_id,
				'page_heading' => $defalut_practice->page_heading,
				'page_description' => $defalut_practice->page_description,
				'page_photo' => $defalut_practice->page_photo
			);
			$this->index_model->addRow('emeds_cus_page_content',$data);
				
			//Practice page creation
			
			//Contact page creation
			
				$data = array(
					'site_id' => $site_id,
					'def_page_id' => '5',
					'page_name' => 'Contact'
				);
				$this->index_model->addRow('emeds_cus_pages',$data);
				
			//Contact page creation
			
			echo 'success';return false;
		}
			
		if($action == 'default')
		{
			$data['temp_id']=$temp_id;
			$data['site_cus_id']=$this->session->userdata('userid');
			$data['categories']=$this->index_model->getDataById('default_categories','status',0);
			$this->load->view('sitename',$data);
		}
	}
	
	
	public function pricing()
	{
		$data='';
		$this->template->load('master','pricing',$data);
	}
	
	public function support()
	{
		$data='';
		$this->template->load('master','support',$data);
	}
	
	public function contact($action = 'default')
	{
		
		/* Check if form (and captcha) passed validation*/
		if($action == 'mail')
		{
		
			if(!$this->input->post('name')){echo 'name';return false;}
			if(!$this->input->post('email')){echo 'email';return false;}
			if(!$this->input->post('captcha')){echo 'captcha';return false;}
			$userCaptcha = $this->input->post('captcha');
			$word = $this->session->userdata('captchaWord');		
			if(strcmp(strtoupper($userCaptcha),strtoupper($word)) != 0){echo 'captcha_error';return false;}

			/* Clear the session variable */
			$this->session->unset_userdata('captchaWord');
			
			$data['to_mail']='brillob@gmail.com';
		$data['from_mail'] = $this->input->post('email');
		$data['name']=$this->input->post('name');
		$data['subject']=$this->input->post('subject');
		$data['message']=$this->input->post('message');
		
		$this->load->library('email');
		
		$config = array (
				  'mailtype' => 'html',
				  'charset'  => 'utf-8',
				  'priority' => '1'
				   );
		$this->email->initialize($config);
		$this->email->from($data['from_mail'], 'Emeds');
		$this->email->to($data['to_mail']);
		$this->email->subject('Emeds Contact Form');
		$message=$this->load->view('email_contact_form',$data,TRUE);
		$this->email->message($message);
		
		
		if($this->email->send()) {
			echo 'success';return false;
		}
		else
		{
			echo 'error';return false;
		}
		
						
	
	
		}
		if($action == 'default')
		{
		  
			$this->load->helper('captcha');
			
      			  
			$vals = array(
				'img_path'	=> './captcha/',
				'img_url'	=> base_url().'captcha/'
			);
			
			$captcha = create_captcha($vals);
			
			$this->session->set_userdata('captchaWord', $captcha['word']);
			
			$this->template->load('master','contact', $captcha);
		}
		
	}
	
	public function contact_action()
	{
		//verification email to customer starts ************************************************************
		
		$data['to_mail']='brillob@gmail.com';
		$data['from_mail'] = $this->input->post('email');
		$data['name']=$this->input->post('name');
		$data['subject']=$this->input->post('subject');
		$data['message']=$this->input->post('message');
		
		$this->load->library('email');
		
		$config = array (
				  'mailtype' => 'html',
				  'charset'  => 'utf-8',
				  'priority' => '1'
				   );
		$this->email->initialize($config);
		$this->email->from($data['from_mail'], 'Emeds');
		$this->email->to($data['to_mail']);
		$this->email->subject('Emeds Contact Form');
		$message=$this->load->view('email_contact_form',$data,TRUE);
		$this->email->message($message);
		
		
		if($this->email->send()) {
			$arrResult = array ('response'=>'success');
		}
		else
		{
			$arrResult = array ('response'=>'error');
		}
		
		echo json_encode($arrResult); 
		
		//verification email to customer Ends ************************************************************
	}
	
	public function chk_usr()
	{             
		if(isset($_POST))
			{
				$usr_name = str_replace(' ', '', $_POST['usr_name']);
				
				if (!filter_var($usr_name, FILTER_VALIDATE_EMAIL) === false) {
					$this->index_model->usrchk($usr_name); 
				} 
				else 
				{
					 echo("2");
				}
				
			}
	}
	
	public function logout()
	{
		$this->load->library('facebook');

        // Logs off session from website
        $this->facebook->destroySession();
		
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		$this->session->set_flashdata('message','You are now logged out.');
		redirect('index');
	}

}