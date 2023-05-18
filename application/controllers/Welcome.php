<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 
                
	public function index(){

		$this->load->view('sign_in');
	 }



	public function dashbord()
	{
		$data['get_dashbord_card'] = $this->Crud_model->get_dashbord_card();
		$data['get_customer'] = $this->Crud_model->get_customer();
		$data['get_ppap'] = $this->Crud_model->get_ppap();
		$data['standards'] = $this->Crud_model->get_standards();


	$this->load->view('sidebar');
		
		$this->load->view('login',$data);

			$this->load->view('footer');

	}

	

	public function sign_in(){
		
		$data = array(
			'user_email' => $this->input->post('user_email'),
			'user_pass' => $this->input->post('user_pass'),
			);

			if($data['user_email'] == NULL){
				$this->load->view('sign_in');
			}else{

				$get_data= $this->Crud_model->get_sign_in($data);

				if($get_data == NULL){
	
					$data1 = array(
						'errors' => ' email and password Invalid'
	
					);
					$this->session->set_flashdata($data1);
	
		          $this->load->view('sign_in');
	
				}else{
					redirect(base_url('dashbord') , 'refresh');
		}
	}


			}
			

			public function table()
	{
		$this->load->view('sidebar');
		$this->load->view('table');
	$this->load->view('footer');

	}



	public function add_design_index(){
		$data = array(
			'name' => $this->input->post('name'),
			);
			$this->Crud_model->add_design_index($data);
			redirect(base_url('list_design_index') , 'refresh');
			
	}

	public function list_design_index()
	{
		$data['records'] = $this->Crud_model->get_list_master();
		$this->load->view('sidebar');
		$this->load->view('list_masters',$data);
	$this->load->view('footer');

	}

	public function add_masters()
	{
		$master_name = $this->input->post('master_name');
		if($master_name == NULL){
			
		}else{
	$data = array(
				'master_name' => $this->input->post('master_name'),
				'master_no' => $this->input->post('master_no'),
	
				);
		 $this->Crud_model->add_masters($data);

		}
		$this->load->view('sidebar');
		$this->load->view('add_masters');
	$this->load->view('footer');

	}

 public function edit_design_index(){
	$data = array(
		'id' => $this->input->post('id'),
		'name' => $this->input->post('name'),
		
		);
	//	print_r($data); die();
		$this->Crud_model->update_design_index($data);
		redirect(base_url('list_design_index') , 'refresh');		
  }



	
	public function edit_masters()
	{
		$data['records'] = $this->Crud_model->get_edit_master();
		 
		$master_name = $this->input->post('master_name');
		if($master_name == NULL){
			
		}else{
			$data1 = array(
				'id' => $this->input->post('id'),
				'master_name' => $this->input->post('master_name'),
				'master_no' => $this->input->post('master_no'),
				);
				$this->Crud_model->update_masters($data1);
				redirect('/welcome/list_masters', 'refresh');
		}
	$this->load->view('sidebar');
		$this->load->view('edit_masters',$data);
	$this->load->view('footer');

	}


	public function delete_design_index(){
		$this->Crud_model->delete_design_index();
		redirect(base_url('list_design_index') , 'refresh');	
	   }

	   public function list_ppap_index_master()
	   {
		   $data['records'] = $this->Crud_model->get_list_ppap_index_master();
		   $this->load->view('sidebar');
		   $this->load->view('list_ppap_index_master',$data);
	   $this->load->view('footer');
   
	   }

	   public function add_ppap_index_master(){
		$data = array(
			'name' => $this->input->post('name'),
			);
			$this->Crud_model->add_ppap_index_master($data);
			redirect(base_url('list_ppap_index_master') , 'refresh');
			
	}

	public function edit_ppap_index_master(){
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			
			);
		
			$this->Crud_model->update_ppap_index_master($data);
			redirect(base_url('list_ppap_index_master') , 'refresh');		
	}
	
	public function delete_ppap_index_master(){
		$this->Crud_model->delete_ppap_index_master();
		redirect(base_url('list_ppap_index_master') , 'refresh');	
	   }
	   
	   public function list_part_family()
	   {
	 $data['records'] = $this->Crud_model->get_list_part_family();
		   $this->load->view('sidebar');
		  $this->load->view('list_part_family',$data);
		 
	   $this->load->view('footer');
   
	   }
	   
	   public function add_part_family(){
		$data = array(
			'name' => $this->input->post('name'),
			);
			$this->Crud_model->add_part_family($data);
			redirect(base_url('list_part_family') , 'refresh');
			
	}
	public function edit_part_family(){
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			
			);
		
			$this->Crud_model->update_part_family($data);
			redirect(base_url('list_part_family') , 'refresh');		
	}
	public function delete_part_family(){
		$this->Crud_model->delete_part_family();
		redirect(base_url('list_part_family') , 'refresh');	
	   }

	   
	   public function list_customers()
	   {
	 $data['records'] = $this->Crud_model->get_list_customers();
		   $this->load->view('sidebar');
		  $this->load->view('list_customers',$data);
		 
	   $this->load->view('footer');
   
	   }

	   public function add_customers(){
		$data = array(
			'name' => $this->input->post('name'),
			);
			$this->Crud_model->add_customers($data);
			redirect(base_url('list_customers') , 'refresh');
			
	  }
	public function edit_customers(){
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			
			);
		
			$this->Crud_model->update_customers($data);
			redirect(base_url('list_customers') , 'refresh');		
	}

	public function delete_customers(){
		$this->Crud_model->delete_customers();
		redirect(base_url('list_customers') , 'refresh');	
	   }
	  
	   public function list_operation_number()
	   {
	 $data['records'] = $this->Crud_model->get_list_operation_number();
		   $this->load->view('sidebar');
		  $this->load->view('list_operation_number',$data);
		 
	   $this->load->view('footer');
   
	   }

	   public function add_operation_number(){
		$data = array(
			'name' => $this->input->post('name'),
			);
			$this->Crud_model->add_operation_number($data);
			redirect(base_url('list_operation_number') , 'refresh');
			
	}
	public function edit_operation_number(){
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			
			);
		
			$this->Crud_model->update_operation_number($data);
			redirect(base_url('list_operation_number') , 'refresh');		
	}

	public function delete_operation_number(){
		$this->Crud_model->delete_operation_number();
	
		redirect(base_url('list_operation_number') , 'refresh');		

	   }

	   public function list_part_type()
	   {
	 $data['records'] = $this->Crud_model->get_list_part_type();
		   $this->load->view('sidebar');
		  $this->load->view('list_part_type',$data);
		 
	   $this->load->view('footer');
   
	   }

	   public function add_part_type(){
		$data = array(
			'name' => $this->input->post('name'),
			);
			$this->Crud_model->add_part_type($data);
			redirect(base_url('list_part_type') , 'refresh');
			
	}
	public function edit_part_type(){
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			
			);
		
			$this->Crud_model->update_part_type($data);
			redirect(base_url('list_part_type') , 'refresh');		
	}

	public function delete_part_type(){
		$this->Crud_model->delete_part_type();
	
		redirect(base_url('list_part_type') , 'refresh');		

	   }

	   public function list_email_masters()
	   {
	 $data['records'] = $this->Crud_model->get_list_email_masters();
		   $this->load->view('sidebar');
		  $this->load->view('list_email_masters',$data);
		 
	   $this->load->view('footer');
   
	   }

	   public function add_email_masters(){
		$data = array(
			'email_id' => $this->input->post('name'),
			);
			//print_r($data); die();
			$this->Crud_model->add_email_masters($data);
			redirect(base_url('list_email_masters') , 'refresh');
			
	}
	public function edit_email_masters(){
		$data = array(
			'id' => $this->input->post('id'),
			'email_id' => $this->input->post('name'),
			
			);
		
			$this->Crud_model->update_email_masters($data);
			redirect(base_url('list_email_masters') , 'refresh');		
	}

	public function delete_email_masters(){
		$this->Crud_model->delete_email_masters();
	
		redirect(base_url('list_email_masters') , 'refresh');		

	   }

	   public function list_erp_users()
	   {
	 $data['records'] = $this->Crud_model->get_list_erp_users();
		   $this->load->view('sidebar');
		  $this->load->view('list_erp_users',$data);

	   $this->load->view('footer');
   
	   }
	   
	   public function add_erp_users(){
	
		$data = array(
			'user_email' => $this->input->post('user_email'),
			'user_pass' => $this->input->post('user_password'),
			'user_name' => $this->input->post('user_fullname'),
			'user_type' => $this->input->post('user_role'),
			'drawing_upload' => $this->input->post('drawing_upload'),
			'drawing_download' => $this->input->post('drawing_download'),
			'cad_download' => $this->input->post('cad_download'),
			'cad_upload' => $this->input->post('cad_upload'),
			'model_download' => $this->input->post('model_download'),
			'model_upload' => $this->input->post('model_upload'),
			'other_doc_1_download' => $this->input->post('other_doc_1_download'),
			'other_doc_1_upload' => $this->input->post('other_doc_1_upload'),
			'other_doc_2_download' => $this->input->post('other_doc_2_download'),
			'other_doc_2_upload' => $this->input->post('other_doc_2_upload'),
			'ppap_download' => $this->input->post('ppap_download'),
			'ppap_upload' => $this->input->post('ppap_upload'),
			'operation_download' => $this->input->post('operation_download'),
			'operation_upload' => $this->input->post('operation_upload'),
			'other_data_download' => $this->input->post('other_data_download'),
			'other_data_upload' => $this->input->post('other_data_upload'),
			'mis_data_download' => $this->input->post('mis_data_download'),
			'mis_data_upload' => $this->input->post('mis_data_upload'),
			'plant' => $this->input->post('plant'),
			'department' => $this->input->post('department'),
			'plant_head' => $this->input->post('plant_head'),


		);
			
			$this->Crud_model->add_erp_users($data);
			redirect(base_url('list_erp_users') , 'refresh');
			
	}

	public function edit_erp_users(){
		$data = array(
			'id' => $this->input->post('id'),
	
			'user_pass' => $this->input->post('user_password'),
			'user_name' => $this->input->post('user_fullname'),
			'user_type' => $this->input->post('user_role'),
			'drawing_upload' => $this->input->post('drawing_upload'),
			'drawing_download' => $this->input->post('drawing_download'),
			'cad_download' => $this->input->post('cad_download'),
			'cad_upload' => $this->input->post('cad_upload'),
			'model_download' => $this->input->post('model_download'),
			'model_upload' => $this->input->post('model_upload'),
			'other_doc_1_download' => $this->input->post('other_doc_1_download'),
			'other_doc_1_upload' => $this->input->post('other_doc_1_upload'),
			'other_doc_2_download' => $this->input->post('other_doc_2_download'),
			'other_doc_2_upload' => $this->input->post('other_doc_2_upload'),
			'ppap_download' => $this->input->post('ppap_download'),
			'ppap_upload' => $this->input->post('ppap_upload'),
			'operation_download' => $this->input->post('operation_download'),
			'operation_upload' => $this->input->post('operation_upload'),
			'other_data_download' => $this->input->post('other_data_download'),
			'other_data_upload' => $this->input->post('other_data_upload'),
			'mis_data_download' => $this->input->post('mis_data_download'),
			'mis_data_upload' => $this->input->post('mis_data_upload'),
			'plant' => $this->input->post('plant'),
			'department' => $this->input->post('department'),
			'plant_head' => $this->input->post('plant_head'),


		);
		//print_r($data); die();
		
			$this->Crud_model->update_erp_users($data);
			redirect(base_url('list_erp_users') , 'refresh');		
	}
	public function delete_erp_users(){
		$this->Crud_model->delete_erp_users();
	
		redirect(base_url('list_erp_users') , 'refresh');		

	   }

	   
	   public function list_parts()
	   {
		$data['customer'] = $this->Crud_model->get_list_customers();
		$data['part_type'] = $this->Crud_model->get_list_part_type();
		$data['part_family'] = $this->Crud_model->get_list_part_family();


	$data['records'] = $this->Crud_model->get_list_parts();
		   $this->load->view('sidebar');
		 // $this->load->view('list_erp_users',$data);
		  $this->load->view('list_parts',$data);

	   $this->load->view('footer');
   
	   }

	   public function add_parts(){
		$data = array(
			'part_number' => $this->input->post('part_number'),
			'part_description' => $this->input->post('part_description'),
			'customer_name' => $this->input->post('customer_name'),
			'part_type' => $this->input->post('part_type'),
			'part_family' => $this->input->post('part_family'),
			);
		//print_r($data); die();
			$this->Crud_model->add_parts($data);
			redirect(base_url('list_parts') , 'refresh');
			
	}

	public function edit_parts(){
		$data = array(
			'id' => $this->input->post('id'),

			'part_number' => $this->input->post('part_number'),
			'part_description' => $this->input->post('part_description'),
			'customer_name' => $this->input->post('customer_name'),
			'part_type' => $this->input->post('part_type'),
			'part_family' => $this->input->post('part_family'),
			);
		
			$this->Crud_model->update_parts($data);
			redirect(base_url('list_parts') , 'refresh');		
	}

	public function view_design_documents(){
		
		$part_no =$this->uri->segment('3');
		
		$data['parts'] = $this->Crud_model->get_list_part($part_no);

		$data['records'] = $this->Crud_model->get_list_add_design_documents($part_no);


		//print_r($data['parts']);die();
		$this->load->view('sidebar');
		 $this->load->view('view_design_documents',$data);

	  $this->load->view('footer');
	}

	public function add_design_documents(){
		$part_no =$this->uri->segment('3');
		
		$data['parts'] = $this->Crud_model->get_list_part($part_no);
		
		
		$config['upload_path'] = 'uploads/image/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
 
		$this->load->library('upload',$config);
		
		$this->upload->do_upload('upload_drawing');
	
        $file_data = $this->upload->data();
       $file_name= $file_data['file_name'];
		

		$data = array(
			
			'part_number' => $this->input->post('part_number'),
			'part_description' => $this->input->post('part_description'),
            'document_name' => $this->input->post('document_name'),
			'revision_number' => $this->input->post('revision_number'),
			'revision_remark' => $this->input->post('revision_remark'),
			'revision_date' => $this->input->post('revision_date'),
			'upload_drawing' => $file_name,
			);
			
	
			$this->Crud_model->add_design_documents($data);
			
			redirect(base_url('view_design_documents') , 'refresh');
			
	}
	public function download($id){
		$id =$this->uri->segment('3');
		
		$data['parts'] = $this->Crud_model->get_list_add_design_documents1($id);
		$part_no = $data['parts']['0']['part_number'];
		$data['records'] = $this->Crud_model->get_list_add_design_documents($part_no);

        $this->load->helper('download');

        $fileinfo = $this->Crud_model->download($id);
		//print_r($fileinfo);die();

        $file = 'uploads/image/'.$fileinfo['0']['upload_drawing'];
     // print_r($file);die();
        force_download($file, NULL);
		//redirect(base_url('list_parts'));
		$this->load->view('sidebar');
		$this->load->view('view_design_documents',$data);

	 $this->load->view('footer');
	}

	
	public function list_standard_library(){

	 $data['records'] = $this->Crud_model->get_list_standard_library();
 //print_r($data['parts']);die();
		$this->load->view('sidebar');
		 $this->load->view('list_standard_library',$data);

	  $this->load->view('footer');
	}

	
	public function add_standard_library(){
		$config['upload_path'] = 'uploads/image/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
 
		$this->load->library('upload',$config);
		
		$this->upload->do_upload('upload_operation_drawing');
	
        $file_data = $this->upload->data();
       $file_name= $file_data['file_name'];
		$data = array(
			'document_name' => $this->input->post('document_name'),
			'upload_operation_drawing' => $file_name,
			'revision_number' => $this->input->post('revision_number'),
			'revision_remark' => $this->input->post('revision_remark'),
			'revision_date' => $this->input->post('revision_date'),
			);
	
			$this->Crud_model->add_standard_library($data);
			redirect(base_url('list_standard_library') , 'refresh');
			
	}

	public function download1(){
		
		$this->load->helper('download');

        $fileinfo = $this->Crud_model->download1();
        $file = 'uploads/image/'.$fileinfo['0']['upload_operation_drawing'];
     
        force_download($file, NULL);
		redirect(base_url('list_standard_library') , 'refresh');

	}
	public function add_standard_library_revision(){
		$config['upload_path'] = 'uploads/image/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
 
		$this->load->library('upload',$config);
		
		$this->upload->do_upload('upload_operation_drawing');
	
        $file_data = $this->upload->data();
       $file_name= $file_data['file_name'];
		$data = array(
			'document_name' => $this->input->post('document_name'),
			'upload_operation_drawing' => $file_name,
			'revision_number' => $this->input->post('revision_number'),
			'revision_remark' => $this->input->post('revision_remark'),
			'revision_date' => $this->input->post('revision_date'),
			);
		//	print_r($data);die();
	
			$this->Crud_model->add_standard_library_revision($data);
			redirect(base_url('list_standard_library') , 'refresh');
			
	}
	
	public function list_standard_library_revision(){

		$data['records'] = $this->Crud_model->get_list_standard_library_revision();
   //print_r($data['parts']);die();
		   $this->load->view('sidebar');
			$this->load->view('list_standard_library_revision',$data);
   
		 $this->load->view('footer');
	   }

	   public function download2(){
		
		$this->load->helper('download');

        $fileinfo = $this->Crud_model->download2();
		//print_r($fileinfo); die();
        $file = 'uploads/image/'.$fileinfo['0']['upload_operation_drawing'];
     
        force_download($file, NULL);
		redirect(base_url('list_standard_library_revision'));

	}
	
	public function list_drawing_revision(){

		$data['records'] = $this->Crud_model->get_list_drawing_revision();
   //print_r($data['parts']);die();
		   $this->load->view('sidebar');
			$this->load->view('list_drawing_revision',$data);
   
		 $this->load->view('footer');
	   }
	   
	   public function list_slide_show(){

		$data['records'] = $this->Crud_model->get_list_slide_show();
   
		   $this->load->view('sidebar');
			$this->load->view('list_slide_show',$data);
   
		 $this->load->view('footer');
	   }

	   
	   public function add_slide_show(){
		$config['upload_path'] = 'uploads/image/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
 
		$this->load->library('upload',$config);
		
		$this->upload->do_upload('upload_image');
	
        $file_data = $this->upload->data();
       $file_name= $file_data['file_name'];
		$data = array(
			'select_screen' => $this->input->post('select_screen'),
			'upload_image' => $file_name,
	
			);
			//print_r($data);die();
	
			$this->Crud_model->add_slide_show($data);
			redirect(base_url('list_slide_show') , 'refresh');
			
	}
	



















}
