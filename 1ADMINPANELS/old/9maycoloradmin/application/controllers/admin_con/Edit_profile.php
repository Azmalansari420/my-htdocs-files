<?php

class Edit_profile extends CI_Controller
{


	//-define everything for here
	protected $arr_values = array(
							'page_title'=>'profile',
						   	'table_name'=>'tbl_admin',
						   	'upload_path'=>'media/uploads/',
						   	'load_path'=>'admin/edit_profile',
						   	'redirect_path'=>'admin/dashboard',
						   ); 



	///------author for login--
	 public function __construct()
    {
        parent::__construct(); 
        chech_admin_login(); 
    }

	//---edit function in left menu

	function edit()
	{
		 
		$args=func_get_args();

		if(isset($_POST['submit']))
		{

			if($_FILES['image']['name']!='')
			{
				$image = time().'.'.explode(".", $_FILES['image']['name'])[1];
				$path = $this->arr_values['upload_path'].$image;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}

			else
			{
				$image = $_POST['oldimage'];
			}

			$data['image'] = $image;
			$data['first_name'] = $this->input->post('first_name');			
			$data['last_name'] = $this->input->post('last_name');			
			$data['username'] = $this->input->post('username');			
			$data['password'] = $this->input->post('password');	
			$data['email'] = $this->input->post('email');			
			$data['mobile'] = $this->input->post('mobile');			
			$data['address'] = $this->input->post('address');			
			$data['gender'] = $this->input->post('gender');			
			$data['dob'] = $this->input->post('dob');			
			$data['martial'] = $this->input->post('martial');			
			$data['age'] = $this->input->post('age');			
			$data['country'] = $this->input->post('country');			
			$data['state'] = $this->input->post('state');			
			
			$this->crud->update($this->arr_values['table_name'],$this->session->userdata("id"),$data);
			$this->session->set_flashdata('message','<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"><div class="bg-blue rounded w-25px h-25px d-flex align-items-center justify-content-center text-white"><i class="fa fa-bell"></i></div><strong class="me-auto ms-2">Message</strong><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body" style="color:black;">Record has been successfully Updated..</div></div>');
			redirect($this->arr_values['redirect_path']);	
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($this->session->userdata("id"),$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'],$data);
	}


}