<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('admin_status'))
            $this->load->view('home');
        else
            $this->load->view('login');         
    }
    

    
    public function login()
    {
        $this->load->model('model_admin');
        if($this->model_admin->login())
                redirect('user');
        else
                redirect('blah');
    }
    
    public function sign_up()
    {
        if($this->session->userdata('admin_status'))
            $this->load->view('home');
        else
            $this->load->view('sign_up');
    }
    
    public function signup_submit(){
        $this->form_validation->set_rules('reg_fullname', 'Username', 'trim|required');
        $this->form_validation->set_rules('reg_password', 'Password', 'trim|required');
        $this->form_validation->set_rules('reg_password_confirm', 'Password confirm', 'trim|required|matches[reg_password]');
        $this->form_validation->set_rules('reg_username', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('reg_mobile', 'Mobile', 'trim|required|numeric');
        if ($this->form_validation->run() ==FALSE) {
            $this->load->view('login');
            
        }else {
            $this->load->model('model_user');
            if($this->model_user->signup()) {
                $this->load->view('success');
            }

            

        }
        
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('dineout');
    }
        
    
    public function forgot()
    {
        $this->load->view('forgot_pass');
    }
}
