<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function signup() {

		  if($this->db->insert('admin', array('NAME' => $this->input->post('reg_fullname'),'PASSWORD' => $this->input->post('reg_password'),'EMAIL' => $this->input->post('reg_email'),'MOBILE' => $this->input->post('reg_mobile'))))
            return true;
        return false;
	}



}