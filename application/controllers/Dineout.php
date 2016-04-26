<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dineout extends CI_Controller {
    
    public function index()
    {
        if($this->session->userdata('user_status'))
            redirect('user');
        else if($this->session->userdata('admin_status'))
            redirect('admin');
        else
            $this->load->view('welcome');         
    }
    
}