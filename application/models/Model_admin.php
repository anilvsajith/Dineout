<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {
    
    public function login()
    {
        $query = $this->db->get_where('admin', array('email' => $this->input->post('lg_username') , 'password' => $this->input->post('lg_password')));
        
        if($query->num_rows()==1){
            $row= $query->row();
            $sess = array( 'admin_status' => true ,
                           'admin_name' => $row->name ,
                            'admin_id' => $row->id);
            $this->session->set_userdata($sess);
            return true;
        }
        return false;
    }
    
    public function add_hotel()
    {
        
        if($this->db->insert('hotel', array('name' => $this->input->post('hotelname'),
                                             'type' => $this->input->post('hoteltype'),
                                             'lat'  => $this->input->post('hotellat'),
                                             'lng'  => $this->input->post('hotellng'),
                                             'username' => $this->input->post('user'))))
            return true;
        return false;
    }
    
    public function signup() {
          $admin=1;
		  if($this->db->insert('admin', array('name' => $this->input->post('reg_fullname'),'password' => $this->input->post('reg_password'),'email' => $this->input->post('reg_email'),'phone' => $this->input->post('reg_mobile'),'admin' => $admin)))
            return true;
        return false;
	}


}
