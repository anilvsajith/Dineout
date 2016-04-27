<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $this->load->model('model_user');
        $data['hotel']= $this->model_user->get_all_hotel();
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
    
    public function find_dist()
    {
        
        $this->load->model('model_user');
        $d=$this->model_user->distance();
        $d1=$this->model_user->sort_best($d);
        $d2=$this->model_user->sort_dist($d);
        $d3=$this->model_user->sort_rating($d);
        $data['hotel_best']=$this->model_user->gethotel($d1);
        $data['hotel_dist']=$this->model_user->gethotel($d2);
        $data['hotel_rating']=$this->model_user->gethotel($d3);
        $data['userdata'] = $this->session->userdata;
        $this->load->view('search',$data);
//        for($j=0;$j<$data['size'];$j++)
//        {
//            echo $data[$j]['name'].'<br>';
//        }
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
