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
    
    public function login()
    {
        if($this->session->userdata('admin_status'))
            $this->load->view('home');
        else
            $this->load->view('login');         
    }
    
    public function login_form()
    {
        $this->load->model('model_admin');
        if($this->model_admin->login())
                redirect('dineout');
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
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('dineout');
    }
        
    
    public function forgot()
    {
        $this->load->view('forgot_pass');
    }
}
