<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function index()
    {
        if($this->session->userdata('admin_status'))
            $this->load->view('admin_home');
        else
            $this->load->view('admin_login');  
    }
    
    public function login()
    {
        $this->load->model('model_admin');
        if($this->model_admin->login())
                redirect('admin');
        else
                redirect('error404');
    }
    
    public function hotel()
    {
        $this->load->view('admin_hotel');
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