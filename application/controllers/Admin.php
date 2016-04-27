<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function index()
    {    
        if($this->session->userdata('admin_status'))
        {
            $this->load->model('model_admin');
            $data['hotel']=$this->model_admin->gethotel();
            $data['userdata']=$this->session->userdata;
            $this->load->view('admin_home',$data);
        }
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
                redirect('admin');
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
    
    public function hotel($id)
    {
        $this->load->model('model_admin');
        $data['hotel']=$this->model_admin->gethotel();
        $data['hotel_spec']=$this->model_admin->get_hotel_spec($id);
        $data['userdata'] = $this->session->userdata;
        $this->load->view('admin_hotel',$data);
    }
    
    public function add_hotel()
    {
        $this->load->model('model_admin');
        $data['hotel']=$this->model_admin->gethotel();        
        $data['userdata'] = $this->session->userdata;
        $this->load->view('admin_add_hotel',$data);
    }
    
    public function input_hotel()
    {
        $config['upload_path']   = './assets/uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png'; 
        //$config['max_size']      = 100; 
        //$config['max_width']     = 1024; 
        //$config['max_height']    = 768;  
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('pic'))
        {
            $data['error']=$this->upload->display_errors();
            $this->load->view('error',$data);
        }
        else
        {
            $upload_data = $this->upload->data(); 
            $file_name = $upload_data['file_name'];
        }
        $this->load->model('model_admin');
        if($this->model_admin->add_hotel($file_name))
        {
            redirect('admin/add_hotel');
        }
        else
        {
            redirect('admin');
        }
    }
    
    
}