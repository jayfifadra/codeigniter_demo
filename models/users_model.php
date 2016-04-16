<?php

  class users_model extends CI_Model 
  {  
  function __construct()
   {  
     parent::__construct();   
	 $this->load->database(); 

   } 
  public function get_all_users()
  {  
     $query = $this->db->get('category');  
	 return $query->result();  
  }
  public function insert_users_to_db($data)
  {  
     return $this->db->insert('category', $data); 
  }  
  public function getById($id)
  { 
     $query = $this->db->get_where('category',array('id'=>$id)); return $query->row_array(); 
  }
  
  public function update_info($data,$id) 
  {
	 $this->db->where('category.id',$id); 
	 return $this->db->update('category', $data);  
  }
  public function delete_a_user($id)
  {
	  $this->db->where('category.id',$id);  return $this->db->delete('category');
  }
  }  
 ?> 