<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function index()
    {
        if($this->session->userdata('admin_status'))
            $this->load->view('home');
        else
            $this->load->view('login');  
    }
    
    
}