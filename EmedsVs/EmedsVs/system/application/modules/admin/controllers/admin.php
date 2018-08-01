<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {
	


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('email');
		$this->load->library('form_validation');
		$this->load->model('admin_model');
		$this->load->library('session');
		$this->load->helper('text');
		$this->form_validation->set_error_delimiters('<p style="color:#F00;font-size:10px;">', '</p>');
	}
	
	public function index()
	{
		$this->load->view('login');
	}
	
	public function login()
	{
		if(!$this->input->post('uname')){echo 'email';return false;}
		if(!$this->input->post('pword')){echo 'pword';return false;}
		
		if($row=$this->admin_model->login())
		{
			$this->session->set_userdata('user_login',1);
			$this->session->set_userdata('admin_name',$row->name);
			echo 'success';return false;
		}
		else
		{
			echo 'error';return false;
		}		
	}
	public function dashboard()
	{
		if($this->session->userdata('user_login')!=1){redirect('admin');}
		$data['customers']=$this->admin_model->getNumRows('emeds_customer');
		$data['category']=$this->admin_model->getNumRows('default_categories');
		$this->template->load('admin','dashboard',$data);
	}
	
	public function category($action = 'default')
	{
		if($this->session->userdata('user_login')!=1){redirect('admin');}
		if($action == 'delete')
		{
			$this->input->post('delete_id');
			$this->admin_model->deleteById('defalut_pages','site_id',$this->input->post('delete_id'));
			$this->admin_model->deleteById('default_categories','id',$this->input->post('delete_id'));
			
			redirect('admin/category');
		}
		if($action == 'default')
		{
			$data['categories']=$this->admin_model->getData('default_categories');
			$this->template->load('admin','category',$data);
		}

	}
	
	public function category_add($action = 'default')
	{
		if($action == 'add')
		{
			if(!$this->input->post('category_name')){echo 'category_name';return false;}
			
			$data = array(
				'category_name' => $this->input->post('category_name')
			);

			$this->admin_model->addRow('default_categories',$data);
			
			$site_id=mysql_insert_id();
			
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '1',
				'page_name' => 'Home'
			);
			$this->admin_model->addRow('defalut_pages',$data);
			
			//About Us Starts *********************************************************************
			
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '2',
				'page_name' => 'About Us'
			);
			$this->admin_model->addRow('defalut_pages',$data);
			
			$about_id=mysql_insert_id();
				
			$data = array(
				'cus_page_id' => $about_id,
				'page_heading' => 'Test Heading',
				'page_description' => "Test Content"
			);
			$this->admin_model->addRow('defalut_page_content',$data);
			
			//About Us Ends *********************************************************************
			
			//Service Starts *********************************************************************
			
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '3',
				'page_name' => 'Services'
			);
			$this->admin_model->addRow('defalut_pages',$data);
			
			$service_id=mysql_insert_id();
				
			$data = array(
				'cus_page_id' => $service_id,
				'page_heading' => 'Test Heading 1',
				'page_description' => "Test Content 1"
			);
			$this->admin_model->addRow('defalut_page_content',$data);
			
			$data = array(
				'cus_page_id' => $service_id,
				'page_heading' => 'Test Heading 2',
				'page_description' => "Test Content 2"
			);
			$this->admin_model->addRow('defalut_page_content',$data);
		
			$data = array(
				'cus_page_id' => $service_id,
				'page_heading' => 'Test Heading 3',
				'page_description' => "Test Content 3"
			);
			$this->admin_model->addRow('defalut_page_content',$data);
			
			//Services Ends *********************************************************************
			
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '4',
				'page_name' => 'Gallery'
			);
			$this->admin_model->addRow('defalut_pages',$data);

			//Our Practice Starts *********************************************************************
			
			$data = array(
				'site_id' => $site_id,
				'def_page_id' => '2',
				'page_name' => 'Our Practice'
			);
			$this->admin_model->addRow('defalut_pages',$data);
			
			$practice_id=mysql_insert_id();
				
			$data = array(
				'cus_page_id' => $practice_id,
				'page_heading' => 'Test Heading',
				'page_description' => "Test Content"
			);
			$this->admin_model->addRow('defalut_page_content',$data);
		
			//Our Practice Ends *********************************************************************
			
			echo "success";return false;
			
		}
		if($action == 'default')
		{
			$data='';
			$this->template->load('admin','category_add',$data);
		}
	}
	
	public function customers($action = 'default')
	{
		if($this->session->userdata('user_login')!=1){redirect('admin');}
		if($action == 'delete')
		{
			$this->input->post('delete_id');
			$this->admin_model->deleteById('emeds_customer','cus_id',$this->input->post('delete_id'));
			$this->admin_model->deleteById('emeds_cus_sites','site_cus_id',$this->input->post('delete_id'));
			
			redirect('admin/customers');
		}
		if($action == 'default')
		{
			$data['customers']=$this->admin_model->getData('emeds_customer');
			$this->template->load('admin','customers',$data);
		}

	}
	
	public function customer_add($action = 'default')
	{
		if($action == 'add')
		{
			if(!$this->input->post('email')){echo 'email';return false;}
			if (!filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL)){echo 'email_not_valid';return false;}
			if($this->admin_model->email_exist($this->input->post('email'))){echo 'email_exist';return false;}
			if(!$this->input->post('name')){echo 'name';return false;}
			if(!$this->input->post('password')){echo 'password';return false;}
			if(strlen($this->input->post('password'))<5){echo 'strong';return false;}
			
			if(!$this->input->post('re-password')){echo 're-password';return false;}
			if($this->input->post('password')!=$this->input->post('re-password')){echo 'mismatch';return false;}

						
			$data = array(
				'cus_name' => $this->input->post('name'),
				'cus_email' => $this->input->post('email'),
				'cus_password' => md5($this->input->post('password'))
			);

			$this->admin_model->addRow('emeds_customer',$data);
			
			echo "success";
			
		}
		if($action == 'default')
		{
			$data='';
			$this->template->load('admin','customer_add',$data);
		}
	}

	public function customer_edit($field_id='',$action = 'default')
	{
		if($action== 'update')
		{
			if(!$this->input->post('email')){echo 'email';return false;}
			if (!filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL)){echo 'email_not_valid';return false;}
			if(!$this->input->post('name')){echo 'name';return false;}
						
			$data = array(
				'cus_name' => $this->input->post('name'),
				'cus_email' => $this->input->post('email'),
			);

			$this->admin_model->updateRow('emeds_customer','cus_id',$field_id,$data);
			echo "success";
		}
		if($action== 'reset')
		{
			if(!$this->input->post('new_password')){echo 'new_password';return false;}
			
			 $data = array(
				'cus_password' => md5($this->input->post('new_password'))
			);
			$this->admin_model->updateRow('emeds_customer','cus_id',$field_id,$data);
			
			echo "success";return false;
		
		}
		if($action == 'default')
		{
			$data['customer']=$this->admin_model->getRowDataById('emeds_customer','cus_id',$field_id);
			$this->template->load('admin','customer_edit',$data);
		}
	}



	
	function edit_contact($value='',$action = 'default')
	{
		if($action == 'update')
		{
			if(!$this->input->post('site_email')){echo 'site_email';return false;}
			if(!$this->input->post('site_mobile')){echo 'site_mobile';return false;}
			
			$data = array(
				'site_email' => $this->input->post('site_email'),
				'site_phone' => $this->input->post('site_phone'),
				'site_mobile' => $this->input->post('site_mobile'),
				'address' => $this->input->post('site_address')
			);
		
			
			$this->admin_model->updateRow('emeds_cus_sites','site_id',$value,$data);
			
			$this->session->set_flashdata('success','Updated Sucessfully');
			
			echo 'success';return false;
		}
		
		if($action == 'default')
		{
			$data['content']=$this->admin_model->mysitecontent($value);
			$this->template->load('admin','edit_contact',$data);
		}
	}


	
	public function category_edit($field_id='',$action = 'default')
	{
		if($action== 'update')
		{
			if(!$this->input->post('category_name')){echo 'category_name';return false;}

			$data = array(
				'category_name' => $this->input->post('category_name') 
			);

			$this->admin_model->updateRow('default_categories','id',$field_id,$data);
			echo "success";return false;
		}
		if($action == 'default')
		{
			$data['category']=$this->admin_model->getRowDataById('default_categories','id',$field_id);
			$this->template->load('admin','category_edit',$data);
		}
	}


	
	public function pages($value='',$action = 'default')
	{
		if($this->session->userdata('user_login')!=1){redirect('admin');}
		if($action == 'delete')
		{
			$this->input->post('delete_id');
			$this->admin_model->deleteById('products','product_id',$this->input->post('delete_id'));
			redirect('admin/products');
		}
		if($action == 'default')
		{
			$data['pages']=$this->admin_model->getDataById('defalut_pages','site_id',$value);
			$this->template->load('admin','pages',$data);
		}
	}
	
	function edit_home($value='',$action = 'default',$template_id='')
	{
		if($action == 'add_page')
		{
			$config['upload_path'] = 'uploads/banner/'; 
			$config['allowed_types'] = 'jpg|jpeg|png'; 
			$config['max_size'] = '1000'; 
			$config['max_width'] = '1920'; 
			$config['max_height'] = '1280'; 
			
			$new_name = time().strtolower($_FILES["userfile"]['name']);
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
				$result = $this->db->get('defalut_banner')->row();  
				$result->position;
				

				$data = array(
					'cus_page_id' => $value,
					'position' => ++$result->position,
					'temp_id' => $this->input->post('temp_id'),
					'image_path' => $val['file_name']
				);
				$this->admin_model->addRow('defalut_banner',$data);
				
				echo 'success';return false;
			}
			else 
			{
				echo $this->upload->display_errors(); 
			}
		}
		if($action == 'delete')
		{
			$gal=$this->admin_model->getRowDataById('defalut_banner','id',$this->input->post('delete_id'));
			unlink('uploads/banner/'.$gal->image_path);
			
			$this->admin_model->deleteById('defalut_banner','id',$this->input->post('delete_id'));
			echo 'success';return false;
		}
		if($action == 'default')
		{
			$data['page_id']=$value;
			$data['template_id']=$template_id;
			$data['count']=$this->admin_model->getNumRows('defalut_banner');
			$data['home_content']=$this->admin_model->editHomeDataByPosition($value,$template_id);
			$data['templates']=$this->admin_model->getData('emeds_templates');
			$this->template->load('admin','edit_home',$data);
		}
	}
	
	public function move_home_position($from='',$to='',$id='',$cus_page_id='',$template_id='')
	{
		$this->admin_model->move_home_position($from,$to,$id,$cus_page_id);
		redirect('/admin/edit_home/'.$cus_page_id.'/default/'.$template_id, 'refresh');
	}

	public function edit_single($value='',$action = 'default')
	{		
		if($action == 'update')
		{
			if(!$this->input->post('title')){echo 'title';return false;}
			if(!$this->input->post('mytextarea')){echo 'mytextarea';return false;}

			if($this->admin_model->getRowDataById('defalut_page_content','id',$value))
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
						
						$this->admin_model->updateRow('defalut_page_content','id',$value,$data);
						
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
					$this->admin_model->updateRow('defalut_page_content','id',$value,$data);
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
				$this->admin_model->addRow('defalut_page_content',$data);
				echo 'success';return false;
			}

		}
		if($action == 'default')
		{
			$data['single_content']=$this->admin_model->getRowDataById('defalut_page_content','cus_page_id',$value);
			$this->template->load('admin','edit_single',$data);
		}
	}

	public function edit_multiple($value='',$action = 'default')
	{
	
		if($action == 'add_page')
		{
			if(!$this->input->post('title_name')){echo 'title_name';return false;}
			if(!$this->input->post('mytextarea')){echo 'mytextarea';return false;}
			
			$data = array(
				'cus_page_id' => $value,
				'page_heading' => $this->input->post('title_name'),
				'page_description' => $this->input->post('mytextarea')
			);
			
			$this->admin_model->addRow('defalut_page_content',$data);
			
			echo 'success';return false;
		}
		if($action == 'delete')
		{
			$this->admin_model->deleteById('defalut_page_content','id',$this->input->post('delete_id'));
			echo 'success';return false;
		}
		if($action == 'default')
		{
			$data['multiple_content']=$this->admin_model->getDataById('defalut_page_content','cus_page_id',$value);
			$data['cus_page_id']=$value;
			$this->template->load('admin','edit_multiple',$data);
		}
	}
	
	public function edit_single_data($value='',$action = 'default')
	{		
		if($action == 'update')
		{
			if(!$this->input->post('title')){echo 'title';return false;}
			if(!$this->input->post('mytextarea')){echo 'mytextarea';return false;}

			if($this->admin_model->getRowDataById('defalut_page_content','id',$value))
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
						
						$this->admin_model->updateRow('defalut_page_content','id',$value,$data);
						
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
					$this->admin_model->updateRow('defalut_page_content','id',$value,$data);
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
				$this->admin_model->addRow('defalut_page_content',$data);
				echo 'success';return false;
			}

		}
		if($action == 'default')
		{
			$data['single_content']=$this->admin_model->getRowDataById('defalut_page_content','id',$value);
			$this->template->load('admin','edit_single',$data);
		}
	}

	function edit_gallery($value='',$action = 'default',$page_id='')
	{
			
		if($action == 'add_page')
		{
			$config['upload_path'] = 'uploads/gallery/'; 
			$config['allowed_types'] = 'jpg|jpeg|png'; 
			$config['max_size'] = '1000'; 
			$config['max_width'] = '1920'; 
			$config['max_height'] = '1280'; 
			
			$new_name = time().strtolower($_FILES["userfile"]['name']);
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
				$result = $this->db->get('defalut_gallery')->row();  
				$result->position;
				

				$data = array(
					'cus_page_id' => $value,
					'position' => ++$result->position,
					'image_path' => $val['file_name']
				);
				$this->admin_model->addRow('defalut_gallery',$data);
				
				echo 'success';return false;
				
			}
			else 
			{
				echo $this->upload->display_errors(); 
			}
		
		}
		
		if($action == 'delete')
		{
			$gal=$this->admin_model->getRowDataById('defalut_gallery','id',$this->input->post('delete_id'));
			unlink('uploads/gallery/'.$gal->image_path);
			
			$this->admin_model->deleteById('defalut_gallery','id',$this->input->post('delete_id'));
			echo 'success';return false;
		}
		
		if($action == 'default')
		{
			$data['page_id']=$value;
			$data['count']=$this->admin_model->getNumRows('defalut_gallery');
			$data['gallery_content']=$this->admin_model->getDataByIdPosition('defalut_gallery','cus_page_id',$value);
			$this->template->load('admin','edit_gallery',$data);
		}
	}


	public function logout()
	{
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		$this->session->set_flashdata('message','You are now logged out.');
		redirect('admin');
	}


}