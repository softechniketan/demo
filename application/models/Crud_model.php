<?php
	class Crud_model extends CI_Model{

		
		public function get_dashbord_card(){
			$this->db->select('count(*)');
			return $this->db->get('parts')->result_array();

		}
		public function get_customer(){
			$this->db->select('count(*)');
			return $this->db->get('add_customers')->result_array();
	
		}
		public function get_ppap(){
			$this->db->select('count(*)');
			return $this->db->get('add_ppap_index_master')->result_array();
	
		}
		
		public function get_standards(){
			$this->db->select('count(*)');
			return $this->db->get('add_standard_library')->result_array();
	
		}
	
		public function get_sign_in($data){

			$this->db->select('user_email');
		  $this->db->select('user_pass');
			$this->db->where('user_email', $data['user_email']);
			$this->db->where('user_pass', $data['user_pass']);
			return $this->db->get('user_info')->result_array();

		}
		

		
		public function get_dashbord_card_count($data){
echo "model"; die();
			//$this->db->select('user_email');
		
			return $this->db->get('add_part_type')->result_array();

		}
		public function add_customer($data){

			$this->db->insert('add_design_index', $data);
			
		}
		public function add_masters($data){

			$this->db->insert('master_add', $data);
			
		}

		public function get_list_customer(){
			
			$this->db->select('*');
			return $this->db->get('add_design_index')->result_array();
		}
        

		public function get_edit_master(){
			$id =$this->uri->segment('3');
			$this->db->where('id', $id);

			return $this->db->get('master_add')->result_array();
		}
		
		
		public function update_customer($data){
		
	
			$this->db->where('id', $data['id']);
			$this->db->update('add_design_index', $data);
			}
	
 	public function delete_customer(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('add_design_index');
		
}

public function add_department($data){

	$this->db->insert('add_ppap_index_master', $data);
	
}
public function get_list_department(){
			
	$this->db->select('*');
	return $this->db->get('add_ppap_index_master')->result_array();
}

public function update_department($data){
		
	
	$this->db->where('id', $data['id']);
	$this->db->update('add_ppap_index_master', $data);
	}
	
	public function delete_department(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('add_ppap_index_master');
		
}

public function add_employee($data){

	$this->db->insert('add_part_family', $data);
}

public function get_list_employee(){
			
	$this->db->select('*');
	return $this->db->get('add_part_family')->result_array();
}

public function update_employee($data){
		
	$this->db->where('id', $data['id']);
	$this->db->update('add_part_family', $data);
	}
	public function delete_employee(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('add_part_family');
		
}

public function add_admin_task($data){

	$this->db->insert('add_customers', $data);
}
public function get_list_admin_task(){
			
	$this->db->select('*');
	return $this->db->get('add_customers')->result_array();
}
public function update_admin_task($data){
		
	
	$this->db->where('id', $data['id']);
	$this->db->update('add_customers', $data);
	}
	public function delete_admin_task(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('add_customers');
		
}


public function add_operational_task($data){
$this->db->insert('add_operation_number', $data);
}

public function get_list_operational_task(){
			
	$this->db->select('*');
	return $this->db->get('add_operation_number')->result_array();
}
public function update_operational_task($data){
		
	
	$this->db->where('id', $data['id']);
	$this->db->update('add_operation_number', $data);
	}
	public function list_operational_task(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('add_operation_number');
		
}


public function add_project_entry($data){

	$this->db->insert('add_part_type', $data);
}
public function get_list_project_entry(){
			
	$this->db->select('*');
	return $this->db->get('add_part_type')->result_array();
}
public function update_project_entry($data){
		
	
	$this->db->where('id', $data['id']);
	$this->db->update('add_part_type', $data);
	}

	public function delete_project_entry(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('add_part_type');
		
}


public function add_project_task($data){

	$this->db->insert('add_email_masters', $data);
}
public function get_list_project_task(){
			
	$this->db->select('*');
	return $this->db->get('add_email_masters')->result_array();
}
public function update_project_task($data){

	$this->db->where('id', $data['id']);
	$this->db->update('add_email_masters', $data);
	}

	public function delete_project_task(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('add_email_masters');
		
}

public function add_project_status($data){

	$this->db->insert('add_project_status', $data);
}

public function get_list_project_status(){
			
	$this->db->select('*');
	return $this->db->get('add_project_status')->result_array();
}
 
public function update_project_status($data){

	$this->db->where('id', $data['id']);
	$this->db->update('add_project_status', $data);
	}
	public function delete_project_status(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('add_project_status');
		
}

public function add_erp_users($data){
	
	$this->db->insert('user_info', $data);
}

public function get_list_erp_users(){
			
	$this->db->select('*');
	return $this->db->get('user_info')->result_array();
}

public function update_erp_users($data){
		
	
	$this->db->where('id', $data['id']);
	$this->db->update('user_info', $data);
	}
	
	public function delete_erp_users(){
		$id =$this->uri->segment('3');
		$this->db->where('id', $id);
		$this -> db -> delete('user_info');
		
}
public function add_parts($data){

	$this->db->insert('parts', $data);
}
public function get_list_parts(){
			
	$this->db->select('*');
	return $this->db->get('parts')->result_array();
}
public function update_parts($data){
		
	
	$this->db->where('id', $data['id']);
	$this->db->update('parts', $data);
	}
	public function get_list_part($part_no){
		
			
		$this->db->where('part_number',$part_no);
		return $this->db->get('parts')->result_array();
	}
	public function add_design_documents($data){

		$this->db->insert('add_design_documents', $data);
	}
	public function get_list_add_design_documents($part_no){
		
			
		$this->db->select('*');
		$this->db->where('part_number',$part_no);
		return $this->db->get('add_design_documents')->result_array();
	}
	public function download(){
		$id =$this->uri->segment('3');
	  
		  $this->db->where('id', $id);
		  return $this->db->get('add_design_documents')->result_array();
	  }
	  public function get_list_add_design_documents1($id){
		
			
		$this->db->select('*');
		$this->db->where('id',$id);
		return $this->db->get('add_design_documents')->result_array();
	}
	
	public function add_standard_library($data){

		$this->db->insert('add_standard_library', $data);
	}
	
	public function get_list_standard_library(){
		$this->db->select('*');
      return $this->db->get('add_standard_library')->result_array();
	}
	public function download1(){
		$id =$this->uri->segment('3');
	  
		  $this->db->where('id', $id);
		  return $this->db->get('add_standard_library')->result_array();
	  }
	  
	  public function add_standard_library_revision($data){

		$this->db->insert('add_standard_library_revision', $data);
	}
	
	public function get_list_standard_library_revision(){
		$document_name =$this->uri->segment('3');
		$this->db->select('*');
				  $this->db->where('document_name', $document_name);

      return $this->db->get('add_standard_library_revision')->result_array();
	}
	public function download2(){
		$id =$this->uri->segment('3');
	//  print_r($id); die();
		  $this->db->where('id', $id);
		  return $this->db->get('add_standard_library_revision')->result_array();
	  }
	  
	  public function get_list_drawing_revision(){
		$this->db->select('*');

      return $this->db->get('add_standard_library_revision')->result_array();
	}
	
	public function add_slide_show($data){

		$this->db->insert('add_slide_show', $data);
	}
	
	public function get_list_slide_show(){
		$this->db->select('*');

      return $this->db->get('add_slide_show')->result_array();
	}

    }