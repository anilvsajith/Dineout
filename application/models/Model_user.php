<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function login()
    {
        $query = $this->db->get_where('admin', array('email' => $this->input->post('lg_username') , 'password' => $this->input->post('lg_password')));
        
        if($query->num_rows()==1){
            $row= $query->row();
            $sess = array( 'user_status' => true ,
                           'user_name' => $row->name ,
                            'user_id' => $row->id);
            $this->session->set_userdata($sess);
            return true;
        }
        return false;
    }
    
    
    public function signup() {
          $admin=0;
		  if($this->db->insert('admin', array('name' => $this->input->post('reg_fullname'),'password' => $this->input->post('reg_password'),'email' => $this->input->post('reg_email'),'phone' => $this->input->post('reg_mobile'),'admin' => $admin)))
            return true;
        return false;
	}



}