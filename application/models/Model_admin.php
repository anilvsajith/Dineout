<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {
    
    public function login()
    {
        $query = $this->db->get_where('admin', array('username' => $this->input->post('lg_username') , 'password' => $this->input->post('lg_password')));
        
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


}
