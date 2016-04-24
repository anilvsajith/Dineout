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
                redirect('user/dash');
    }
    
    public function sign_up()
    {
        if($this->session->userdata('admin_status'))
            $this->load->view('home');
        else
            $this->load->view('sign_up');
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('dineout');
    }
        
    
    public function forgot()
    {
        $this->load->view('forgot_pass');
    }

    public function dash()
    {
        $this->load->view('home');
    }
}
