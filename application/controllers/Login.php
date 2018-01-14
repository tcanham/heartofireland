<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    // Login logout and session start stop functions
    
            public function index(){
            $this->load->view('templates/header');
            $this->load->view('admin/templates/login');
            //$this->load->view('templates/footer');
    }


    public function login_check(){
        
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
        
            if ($this->form_validation->run() == FALSE){
                $this->load->view('templates/header');
                $this->load->view('admin/templates/login');
                $this->load->view('admin/templates/footer');    
            }else{
                
                //Get inputs from login form
                $username = $this->security->xss_clean($this->input->post('username'));
                $password = $this->security->xss_clean($this->input->post('password'));
                $this->load->model('admin/users_model');
                
                //Get the user data from the database   
                $user = $this->users_model->get_users($username);
                
                //Assign the users password to a variable    
                $hashed_pass = $user['password']; 
                
                //Check that the passwords match
                if(password_verify($password,$hashed_pass)){
                    $user_data = array(
                        'user_id'   => $user['id'],
                        'user_name' => $user['username'],
                        'level'     => $user['type'],
                        'logged_in' => true
                    );
                    //$this->load->library('session');
                    $this->session->set_userdata($user_data); 
                    header('Location:' . BASE_URL. 'admin');
                }else{
                   header('Location:' . BASE_URL. 'login');
                }
                
            }      
    }//End of logout function
    
        public function logout(){
            session_destroy();
            header('Location:' . BASE_URL);
        }
}
