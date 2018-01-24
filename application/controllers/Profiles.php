<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profiles extends CI_Controller {


    public function index(){
            $data['page'] = 'Profiles';
            $this->load->model('profiles_model');
            $data['profiles'] = $this->profiles_model->get_profiles();
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page_list'] = $this->dashboard_model->get_page_list();
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/profiles',$data);
            $this->load->view('admin/templates/footer');
	}
        
    public function add_profile(){
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page_list'] = $this->dashboard_model->get_page_list();
            $data['page_title'] = 'Add Profile';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/add_profile',$data);
            $this->load->view('admin/templates/footer');    
    }

    public function save_profile(){
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('add_profile_text', 'Add profile text', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page_list'] = $this->dashboard_model->get_page_list();
            $data['page_title'] = 'Add Profile';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/add_profile',$data);
            $this->load->view('admin/templates/footer');    
        }else{
            $name = $this->security->xss_clean($this->input->post('name'));
            $text = $this->security->xss_clean($this->input->post('add_profile_text'));

            //Function to upload the image
            $image_upload = $this->site_functions->profile_image_upload();
            //Get the image name for the database
            $image_name = $this->security->xss_clean($_FILES["fileToUpload"]["name"]);
        }
        //Check for data
        if(!isset($name) || !isset($text)){
           $check = 0; 
        }else{
            $check = 1;
        }
        
        //Send to the database
        if($check == TRUE){
        $profile_data = array("name"=>$name,"text"=>$text,"image"=>$image_name);
        $this->load->model('profiles_model');
        $this->profiles_model->add_profile($profile_data);
        header('Location:' . BASE_URL . 'profiles');
        }
     }
    
    public function view_profile($slug = null){
        $this->load->model('profiles_model');
        $data['profile'] = $this->profiles_model->get_profiles($slug);
        //Check if valid page data
        if(empty($data['profile'])){
            header('Location:' . BASE_URL . 'profiles');
        }
        $this->load->model('admin/dashboard_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();
        $data['page_title'] = $data['profile']['title'];
        $this->load->view('templates/header',$data);
        $this->load->view('single_profile',$data);
        $this->load->view('templates/footer');  
    }
    
    
        public function edit_profile($slug = false){
        $this->load->model('profiles_model');
        $data['profile'] = $this->profiles_model->get_profiles($slug);
        //Check if valid page data
        if(empty($data['profile'])){
            header('Location:' . BASE_URL . 'profiles');
        } 
        $this->load->model('admin/dashboard_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();    
        $data['page_title'] = $data['profile']['title'];
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/edit_profile',$data);
        $this->load->view('admin/templates/footer');  
    }
    
    public function update_profile($slug = false){
        $this->load->model('profiles_model');
        $data['profile'] = $this->profiles_model->get_profiles($slug);
        $this->form_validation->set_rules('id', 'Id', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('add_profile_text', 'Add profile text', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page_list'] = $this->dashboard_model->get_page_list();
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/edit_profile',$data);
            $this->load->view('admin/templates/footer');    
        }else{
            $id = $this->security->xss_clean($this->input->post('id'));
            $name = $this->security->xss_clean($this->input->post('name'));
            $text = $this->security->xss_clean($this->input->post('add_profile_text'));

            //Function to upload the image
            $image_upload = $this->site_functions->profile_image_upload();
            //Get the image name for the database
            $image_name = $this->security->xss_clean($_FILES["fileToUpload"]["name"]);
        }
        //Check for data
        if(!isset($name) || !isset($text)){
           $check = 0; 
        }else{
            $check = 1;
        }
        
        //Send to the database
        if($check == TRUE){
        $profile_data = array("id"=>$id,"name"=>$name,"text"=>$text,"image"=>$image_name);
        $this->load->model('profiles_model');
        $this->profiles_model->update_profile($profile_data);
        header('Location:' . BASE_URL . 'profiles');
        }
    }
    
    public function check_delete_profile($id){
        $this->load->model('profiles_model');
        $data['profile'] = $this->profiles_model->check_delete_profile($id);
        $this->load->model('admin/dashboard_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/check_delete_profile',$data);
        $this->load->view('admin/templates/footer'); 
    }
    
    public function delete_profile($id){
        $this->load->model('profiles_model');
        $this->profiles_model->delete_profile($id);
        header('Location:' . BASE_URL . 'profiles');
    }
    
    
    public function our_animals(){
        $this->load->model('profiles_model');
        $data['profiles'] = $this->profiles_model->get_profiles();
        $data['page_title'] = 'Our Animals';
        $this->load->view('templates/header',$data);
        $this->load->view('our_animals',$data);
        $this->load->view('templates/footer');   
    }
        
    
}// End of class