<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data['userdata'] = $this->session->userdata;
        if($this->session->userdata('user_status'))
            $this->load->view('home',$data);
        else if($this->session->userdata('admin_status'))
            redirect('admin');
        else
            $this->load->view('login');         
    }
    

    
    public function login()
    {
        $this->load->model('model_user');
        if($this->model_user->login())
                redirect('user');
        else
                redirect('user');
    }
    
    public function sign_up()
    {
        if($this->session->userdata('user_status'))
            redirect('user');
        else if($this->session->userdata('admin_status'))
            redirect('admin');
        else
            $this->load->view('sign_up');
    }
    
    public function signup_submit(){
        $this->form_validation->set_rules('reg_fullname', 'Username', 'trim|required');
        $this->form_validation->set_rules('reg_password', 'Password', 'trim|required');
        $this->form_validation->set_rules('reg_password_confirm', 'Password confirm', 'trim|required|matches[reg_password]');
        $this->form_validation->set_rules('reg_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('reg_mobile', 'Mobile', 'trim|required|numeric');
        if ($this->form_validation->run() ==FALSE) {
            $this->load->view('sign_up');
            
        }else {
            $this->load->model('model_user');
            if($this->model_user->signup()) {
                $this->load->view('login');
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
