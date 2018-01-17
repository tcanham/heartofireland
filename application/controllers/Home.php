<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {


	public function index()
	{
            $this->load->model('home_model');
            $this->load->model('profiles_model');
            $data['profiles'] = $this->profiles_model->get_profiles();
            $data['page'] = 'Home';
            $this->load->view('templates/homeHeader',$data);
            $this->load->view('home',$data);
            $this->load->view('templates/footer');
	}
    
    public function contact(){
            $this->load->model('home_model');
            $data['contact_data'] = $this->home_model->contact_page_data();
            $data['page'] = 'Contact us';
            $this->load->view('templates/header',$data);
            $this->load->view('contact',$data);
            $this->load->view('templates/footer');
    }
    
}
