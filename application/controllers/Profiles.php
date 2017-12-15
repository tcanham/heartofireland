<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profiles extends CI_Controller {


	public function index()
	{
        $data['page'] = 'Profiles';
        $this->load->model('profiles_model');
        $data['profiles'] = $this->profiles_model->get_profiles();

        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/profiles',$data);
        $this->load->view('admin/templates/footer');
	}
        
    public function add_profile(){
            $this->load->view('admin/templates/header');
            $this->load->view('admin/add_profile');
            $this->load->view('admin/templates/footer');    
    }
    
}