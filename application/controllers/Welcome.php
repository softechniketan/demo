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



	public function add_customer(){
		$data = array(
			'name' => $this->input->post('name'),
			'location' => $this->input->post('location'),

			);
			//print_r($data);die();
			$this->Crud_model->add_customer($data);
			redirect(base_url('list_customer') , 'refresh');
			
	}

	public function list_customer()
	{
		//echo "ekdkd";die();
		$data['records'] = $this->Crud_model->get_list_customer();
		$this->load->view('sidebar');
		$this->load->view('list_customer',$data);
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

 public function edit_customer(){
	$data = array(
		'id' => $this->input->post('id'),
		'name' => $this->input->post('name'),
		'location' => $this->input->post('location'),

		);
	//print_r($data); die();
		$this->Crud_model->update_customer($data);
		redirect(base_url('list_customer') , 'refresh');		
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


	public function delete_customer(){
		$this->Crud_model->delete_customer();
		redirect(base_url('list_customer') , 'refresh');	
	   }

	   public function list_department()
	   {
		   $data['records'] = $this->Crud_model->get_list_department();
		   $this->load->view('sidebar');
		   $this->load->view('list_department',$data);
	   $this->load->view('footer');
   
	   }

	   public function add_department(){
		$data = array(
			'name' => $this->input->post('name'),
			);
			$this->Crud_model->add_department($data);
			redirect(base_url('list_department') , 'refresh');
			
	}

	public function edit_department(){
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			
			);
		
			$this->Crud_model->update_department($data);
			redirect(base_url('list_department') , 'refresh');		
	}
	
	public function delete_department(){
		$this->Crud_model->delete_department();
		redirect(base_url('list_department') , 'refresh');	
	   }
	   
	   public function list_employee()
	   {
	 $data['records'] = $this->Crud_model->get_list_employee();
		   $this->load->view('sidebar');
		  $this->load->view('list_employee',$data);
		 
	   $this->load->view('footer');
   
	   }
	   
	   public function add_employee(){
		$data = array(
			'employee_no' => $this->input->post('employee_no'),
			'employee_name' => $this->input->post('employee_name'),
			'employee_department' => $this->input->post('employee_department'),
        	);
			//print_r($data);die();
			$this->Crud_model->add_employee($data);
			redirect(base_url('list_employee') , 'refresh');
			
	}
	public function edit_employee(){
		$data = array(
			'employee_no' => $this->input->post('employee_no'),
			'employee_name' => $this->input->post('employee_name'),
			'employee_department' => $this->input->post('employee_department'),
			'id' => $this->input->post('id'),

			);
			//print_r($data);die();
		
			$this->Crud_model->update_employee($data);
			redirect(base_url('list_employee') , 'refresh');		
	}
	public function delete_employee(){
		$this->Crud_model->delete_employee();
		redirect(base_url('list_employee') , 'refresh');	
	   }

	   
	   public function list_admin_task()
	   {
	 $data['records'] = $this->Crud_model->get_list_admin_task();
		   $this->load->view('sidebar');
		  $this->load->view('list_admin_task',$data);
		 
	   $this->load->view('footer');
   
	   }

	   public function add_admin_task(){
		$data = array(
			'task_description' => $this->input->post('task_description'),
			'evaluation_method' => $this->input->post('evaluation_method'),
			);
			//print_r($data);die();
			$this->Crud_model->add_admin_task($data);
			redirect(base_url('list_admin_task') , 'refresh');
			
	  }
	public function edit_admin_task(){
		$data = array(
			'id' => $this->input->post('id'),
			'task_description' => $this->input->post('task_description'),
			'evaluation_method' => $this->input->post('evaluation_method'),
			);
		
			$this->Crud_model->update_admin_task($data);
			redirect(base_url('list_admin_task') , 'refresh');		
	}

	public function delete_admin_task(){
		$this->Crud_model->delete_admin_task();
		redirect(base_url('list_admin_task') , 'refresh');	
	   }
	  
	   public function list_operational_task()
	   {
	 $data['records'] = $this->Crud_model->get_list_operational_task();
		   $this->load->view('sidebar');
		  $this->load->view('list_operational_task',$data);
		 
	   $this->load->view('footer');
   
	   }

	   public function add_operational_task(){
		$data = array(
			'operational_task_description' => $this->input->post('operational_task_description'),
			'department' => $this->input->post('department'),

			);
			//print_r($data); die();
			$this->Crud_model->add_operational_task($data);
			redirect(base_url('list_operational_task') , 'refresh');
			
	}
	public function edit_operational_task(){
		$data = array(
			'id' => $this->input->post('id'),
			'operational_task_description' => $this->input->post('operational_task_description'),
			'department' => $this->input->post('department'),
         	);
		
			$this->Crud_model->update_operational_task($data);
			redirect(base_url('list_operational_task') , 'refresh');		
	}

	public function delete_operational_task(){
		$this->Crud_model->list_operational_task();
	
		redirect(base_url('list_operational_task') , 'refresh');		

	   }

	   public function list_project_entry()
	   {
	 $data['records'] = $this->Crud_model->get_list_project_entry();
		   $this->load->view('sidebar');
		  $this->load->view('list_project_entry',$data);
		 
	   $this->load->view('footer');
   
	   }

	   public function add_project_entry(){
		$data = array(
			'project_no' => $this->input->post('project_no'),
			'project_name' => $this->input->post('project_name'),
			'project_task' => $this->input->post('project_task'),
			);
			//print_r($data);die();
			$this->Crud_model->add_project_entry($data);
			redirect(base_url('list_project_entry') , 'refresh');
			
	}
	public function edit_project_entry(){
		$data = array(
			'id' => $this->input->post('id'),
			'project_no' => $this->input->post('project_no'),
			'project_name' => $this->input->post('project_name'),
			'project_task' => $this->input->post('project_task'),
			
			);
		
			$this->Crud_model->update_project_entry($data);
			redirect(base_url('list_project_entry') , 'refresh');		
	}

	public function delete_project_entry(){
		$this->Crud_model->delete_project_entry();
	
		redirect(base_url('list_project_entry') , 'refresh');		

	   }

	   public function list_project_task()
	   {
		$data['task_description'] = $this->Crud_model->get_list_operational_task();
		//print_r($data);die();
	 $data['records'] = $this->Crud_model->get_list_project_task();
		   $this->load->view('sidebar');
		  $this->load->view('list_project_task',$data);
		 
	   $this->load->view('footer');
   
	   }

	   public function add_project_task(){

		$data = array(
			'operational_task_description' => $this->input->post('task_description'),
			'department' => $this->input->post('department'),
			'planned_compltion_days' => $this->input->post('planned_compltion_days'),
			);
		
			$this->Crud_model->add_project_task($data);
			redirect(base_url('list_project_task') , 'refresh');
			
	}
	public function edit_project_task(){
		$data = array(
			'id' => $this->input->post('id'),
			'operational_task_description' => $this->input->post('task_description'),
			'department' => $this->input->post('department'),
			'planned_compltion_days' => $this->input->post('planned_compltion_days'),
			
			);
		//print_r($data);die();
			$this->Crud_model->update_project_task($data);
			redirect(base_url('list_project_task') , 'refresh');		
	}

	public function delete_project_task(){
		$this->Crud_model->delete_project_task();
	
		redirect(base_url('list_project_task') , 'refresh');		

	   }

	   public function list_project_status()
	   {
		$data['records'] = $this->Crud_model->get_list_project_entry();
		//print_r($data);die();
	 $data['records'] = $this->Crud_model->get_list_project_status();
		   $this->load->view('sidebar');
		  $this->load->view('list_project_status',$data);
		 
	   $this->load->view('footer');
   
	   }

	   public function add_project_status(){

		$data = array(
			'project_no' => $this->input->post('project_no'),
			'project_name' => $this->input->post('project_name'),
			'design_dept' => $this->input->post('design_dept'),
			'purchase_dept' => $this->input->post('purchase_dept'),
			'store_dept' => $this->input->post('store_dept'),
			'mfg_dept' => $this->input->post('mfg_dept'),
			'assy_dept' => $this->input->post('assy_dept'),
			);
			//print_r($data);die();
		
			$this->Crud_model->add_project_status($data);
			redirect(base_url('list_project_status') , 'refresh');
			
	}
	public function edit_project_status(){
		$data = array(
			'id' => $this->input->post('id'),
			'project_no' => $this->input->post('project_no'),
			'project_name' => $this->input->post('project_name'),
			'design_dept' => $this->input->post('design_dept'),
			'purchase_dept' => $this->input->post('purchase_dept'),
			'store_dept' => $this->input->post('store_dept'),
			'mfg_dept' => $this->input->post('mfg_dept'),
			'assy_dept' => $this->input->post('assy_dept'),
			);
		//print_r($data);die();
			$this->Crud_model->update_project_status($data);
			redirect(base_url('list_project_status') , 'refresh');		
	}
	 
	public function delete_project_status(){
		$this->Crud_model->delete_project_status();
	
		redirect(base_url('list_project_status') , 'refresh');		

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
		$data['customer'] = $this->Crud_model->get_list_admin_task();
		$data['part_type'] = $this->Crud_model->get_list_project_entry();
		$data['part_family'] = $this->Crud_model->get_list_employee();


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
