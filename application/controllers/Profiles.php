<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profiles extends CI_Controller {


    public function index(){
            $data['page'] = 'Profiles';
            $this->load->model('profiles_model');
            $data['profiles'] = $this->profiles_model->get_profiles();

            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/profiles',$data);
            $this->load->view('admin/templates/footer');
	}
        
    public function add_profile(){
            $data['page'] = 'Add Profile';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/add_profile',$data);
            $this->load->view('admin/templates/footer');    
    }

    public function save_profile(){
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('add_profile_text', 'Add profile text', 'required');
        if ($this->form_validation->run() == FALSE){
            $data['page'] = 'Add Profile';
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
        //Send to the database
        $profile_data = array("name"=>$name,"text"=>$text,"image"=>$image_name);
        $this->load->model('profiles_model');
        $this->profiles_model->add_profile($profile_data);
        redirect(admin);
     }
    
}// End of class