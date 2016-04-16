<?php  if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');  
class users extends CI_Controller 
{  
function __construct()
  {  parent::__construct();
     #$this->load->helper('url');  
	 $this->load->model('users_model');
	 
  }

public function index()
  { 
   $data['user_list'] = $this->users_model->get_all_users();
   $this->load->view('show_users', $data);
  }
  
  public function add_form()
  {
	  
	  $this->load->view('insert');
 
  }
  
  public function insert_new_user() 
  { 
  $udata['id'] = $this->input->post('catid');
  $udata['name'] = $this->input->post('catname');
  $udata['description'] = $this->input->post('catdes'); 
  $udata['entered_date'] = $this->input->post('catdate');
  $res = $this->users_model->insert_users_to_db($udata);
  if($res)
  {
	  header(''.$this->index());
  }
  }
  
  public function edit()
  { 
  
  $id = $this->uri->segment(3); 
  $data['user'] = $this->users_model->getById($id); 
  $this->load->view('edit', $data); 
  }
  
  public function update()  
  {  
  $data['user'] = $this->users_model->getById($id);
  $mdata['id']=$this->input->post('catid');  
  $mdata['name']=$this->input->post('catname');  
  $mdata['description']=$this->input->post('catdes');  
  $mdata['entered_date']=$this->input->post('catdate');    
  //$res = $this->users_model->insert_users_to_db($udata);  
  $res=$this->users_model->update_info($mdata, $_POST['id']);  
  if($res)
  {   echo "hi";
      header(''.$this->index());  
  }
  else
  {
	  echo "not done";
  }
  } 
  
  public function delete($id) 
  {  
   $this->users_model->delete_a_user($id);  
   $this->index();  
  } 
 
} 