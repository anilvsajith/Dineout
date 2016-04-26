<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function index()
    {
        $data['userdata'] = $this->session->userdata; 
        if($this->session->userdata('admin_status'))
            $this->load->view('admin_home',$data);
        else if($this->session->userdata('user_status'))
            redirect('user');
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
    
    public function sign_up()
    {
        if($this->session->userdata('user_status'))
            redirect('user');
        else if($this->session->userdata('admin_status'))
            redirect('admin');
        else
            $this->load->view('admin_signup');
    }
    
    public function signup_submit(){
        $this->form_validation->set_rules('reg_fullname', 'Username', 'trim|required');
        $this->form_validation->set_rules('reg_password', 'Password', 'trim|required');
        $this->form_validation->set_rules('reg_password_confirm', 'Password confirm', 'trim|required|matches[reg_password]');
        $this->form_validation->set_rules('reg_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('reg_mobile', 'Mobile', 'trim|required|numeric');
        if ($this->form_validation->run() ==FALSE) {
            $this->load->view('admin_signup');
            
        }else {
            $this->load->model('model_admin');
            if($this->model_admin->signup()) {
                $this->load->view('admin_login');
            }

            

        }
        
    }
    
    public function hotel()
    {
        $data['userdata'] = $this->session->userdata;
        $this->load->view('admin_hotel',$data);
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