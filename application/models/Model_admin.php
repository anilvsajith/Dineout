<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {
    
    public function login()
    {   
        $admin=1;
        $query = $this->db->get_where('admin', array('email' => $this->input->post('lg_username') , 'password' => $this->input->post('lg_password'), 'admin' => $admin));
        
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
    
    public function add_hotel($file_name)
    {
        
        if($this->db->insert('hotel', array('name' => $this->input->post('hotelname'),
                                             'type' => $this->input->post('hoteltype'),
                                             'lat'  => $this->input->post('hotellat'),
                                             'lng'  => $this->input->post('hotellng'),
                                             'address' => $this->input->post('hoteladdr'),
                                             'topen' => $this->input->post('topen'),
                                             'tclose' => $this->input->post('tclose'),
                                             'phone' => $this->input->post('hotelphn'),
                                             'email' => $this->input->post('hotelemail'),
                                             'web' => $this->input->post('hotelweb'),
                                             'image' => $file_name,
                                             'admin_id' => $this->session->userdata('admin_id'))))
            return true;
        return false;
    }
    
    public function signup() {
          $admin=1;
		  if($this->db->insert('admin', array('name' => $this->input->post('reg_fullname'),'password' => $this->input->post('reg_password'),'email' => $this->input->post('reg_email'),'phone' => $this->input->post('reg_mobile'),'admin' => $admin)))
            return true;
        return false;
	}
    
    public function gethotel()
    {
        $query = $this->db->get_where('hotel',array('admin_id' => $this->session->userdata('admin_id')));
        $data= array();
        $i=0;
        foreach ($query->result() as $row){
            $data[$i]['name']=$row->name;
            $data[$i]['image']=$row->image;
            $i++;
        }
        $data['size']=$i;
        $data[$i]=NULL;
        return $data;
    }


}
