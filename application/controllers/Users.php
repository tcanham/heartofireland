<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
    
public function index(){
        
        $data['page'] = 'Users';
        $this->load->model('admin/users_model');
        $data['users'] = $this->users_model->get_users();
        
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/users',$data);
        $this->load->view('admin/templates/footer');
    }

    public function add_user(){
            $data['page'] = 'Add User';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/add_user',$data);
            $this->load->view('admin/templates/footer');    
    }
    
        public function save_user(){
        
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('surname', 'Surname', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');    
        $this->form_validation->set_rules('password', 'Password', 'required');  
        $this->form_validation->set_rules('email', 'Email', 'required'); 
        $this->form_validation->set_rules('type', 'User type', 'required');     
        if ($this->form_validation->run() == FALSE){
            $data['page'] = 'Add User';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/add_user',$data);
            $this->load->view('admin/templates/footer');    
        }else{
            $first_name = $this->security->xss_clean($this->input->post('first_name'));
            $surname = $this->security->xss_clean($this->input->post('surname'));
            $username = $this->security->xss_clean($this->input->post('username'));
            $password = $this->security->xss_clean($this->input->post('password'));
            $password = password_hash($password, PASSWORD_DEFAULT);
            $email = $this->security->xss_clean($this->input->post('email'));
            $type = $this->security->xss_clean($this->input->post('type'));
        }
        //Check for data
        if(!isset($first_name) || !isset($surname) || !isset($password) || !isset($email) || !isset($type) || !isset($username)){
           $check = 0; 
        }else{
            $check = 1;
        }
        
        //Send to the database
        if($check == TRUE){
        $user_data = array("first_name"=>$first_name,"surname"=>$surname,"username"=>$username,"password"=>$password,"email"=>$email,"type"=>$type);
        $this->load->model('admin/users_model');
        $this->users_model->add_user($user_data);
        header('Location:' . BASE_URL . 'users');
        }
     }
    
    public function edit_user(){
        
    }
}