<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dineout extends CI_Controller {
    
    public function index()
    {
        if($this->session->userdata('admin_status'))
            $this->load->view('home');
        else
            $this->load->view('welcome');         
    }
    
}