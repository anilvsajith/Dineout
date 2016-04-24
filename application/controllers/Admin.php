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
    
    public function hotel()
    {
        $this->load->view('admin_panel');
    }
    
    public function input_hotel()
    {
        $this->load->model('model_admin');
        if($this->model_admin->add_hotel())
        {
            redirect('user');
        }
        else
        {
            redirect('lol');
        }
    }
    
    
}